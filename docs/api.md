<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('email', 64)->unique();
            $table->string('password', 255);
            $table->enum('role', ['super-admin', 'admin', 'customer'])->default('customer');
            $table->boolean('default_address')->default(false);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

// User Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password', 'role', 'default_address'];
}

// User Controller
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    
    public function store(UserRequest $request)
    {
        return User::create($request->validated());
    }
    
    public function show(User $user)
    {
        return $user;
    }
    
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return $user;
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }
}

// User Request Validation
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:32',
            'email' => 'required|email|min:10|max:64|unique:users,email',
            'password' => 'required|string|min:8|max:32',
            'role' => 'required|in:super-admin,admin,customer',
            'default_address' => 'boolean',
        ];
    }
}

// Routes in web.php
use App\Http\Controllers\UserController;

Route::apiResource('users', UserController::class);
