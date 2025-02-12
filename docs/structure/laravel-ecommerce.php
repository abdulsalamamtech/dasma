<?php

// database/migrations/2024_01_30_000001_create_users_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 32);
            $table->string('email', 64)->unique();
            $table->string('password');
            $table->enum('role', ['super-admin', 'admin', 'customer'])->default('customer');
            $table->boolean('default_address')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};

// database/migrations/2024_01_30_000002_create_assets_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('file_id');
            $table->string('path');
            $table->string('url');
            $table->integer('size');
            $table->enum('hosted_at', ['imagekit', 'aws', 'cloudinary']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assets');
    }
};

// app/Models/User.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'default_address'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'default_address' => 'boolean',
        'email_verified_at' => 'datetime',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}

// app/Models/Asset.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'name',
        'type',
        'file_id',
        'path',
        'url',
        'size',
        'hosted_at'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'banner_id');
    }

    public function productVariations()
    {
        return $this->hasMany(ProductVariation::class);
    }
}

// app/Http/Controllers/Api/UserController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return response()->json($users);
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return response()->json($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}

// app/Http/Controllers/Api/AssetController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssetRequest;
use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::paginate();
        return response()->json($assets);
    }

    public function store(AssetRequest $request)
    {
        $asset = Asset::create($request->validated());
        return response()->json($asset, 201);
    }

    public function show(Asset $asset)
    {
        return response()->json($asset);
    }

    public function update(AssetRequest $request, Asset $asset)
    {
        $asset->update($request->validated());
        return response()->json($asset);
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return response()->json(null, 204);
    }
}

// app/Http/Requests/UserRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|string|min:3|max:32',
            'email' => 'required|string|email|min:10|max:64|unique:users,email,' . $this->user?->id,
            'password' => 'required|string|min:8|max:32',
            'role' => 'required|in:super-admin,admin,customer',
            'default_address' => 'boolean'
        ];
    }
}

// app/Http/Requests/AssetRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'type' => 'required|string',
            'file_id' => 'required|string',
            'path' => 'required|string',
            'url' => 'required|string|url',
            'size' => 'required|integer',
            'hosted_at' => 'required|in:imagekit,aws,cloudinary'
        ];
    }
}

// routes/api.php
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AssetController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('assets', AssetController::class);
});
