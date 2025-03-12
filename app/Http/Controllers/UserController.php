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
        if(request()->filled('search')){
            $search = request('search');
            $users = $this->search($search);
        }else{
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Search a specified resource from storage.
     */
    public function search(string $search){
        return User::where('name', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%')
            ->latest()
            ->paginate();
    }
}
