<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = ['id', 'email', 'address', 'first_name', 'second_name', 'phone', 'role_id'];
        $users = User::select($columns)->get();

        return view('users.index', ['users' => $users, 'columns' => $columns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'first_name' => $request->input('first_name'),
            'second_name' => $request->input('second_name'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'role_id' => $request->input('role_id'),
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $columns = ['id', 'email', 'address', 'first_name', 'second_name', 'phone', 'role_id'];
        $user = User::select($columns)->find($id);

        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->except('_token'));

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
