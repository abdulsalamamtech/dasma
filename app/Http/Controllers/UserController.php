<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Search for users
        if (request()->filled('search')) {
            $search = request('search');
            $users = $this->search($search);
        } else {
            $users = User::with(['orders'])
                ->latest()
                ->paginate();
        }
        // return $brands;
        return view('dashboard.pages.users.index', [
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validated data
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.pages.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email_verified_at' => ['nullable'],
            'role' => ['required', 'in:customer,admin'],
        ]);

        $user->email_verified_at = time();
        $user->role = $request->role ?? 'customer';
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

    /**
     * Search a specified resource from storage.
     */
    public function search(string $search)
    {
        return User::whereAny(
            ['name', 'email',  'role'],
            'like',
            "%{$search}%"
        )
            ->latest()
            ->paginate();
    }
}
