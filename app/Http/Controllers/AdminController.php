<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.index', [
            'title' => 'Admin',
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.create', [
            'title' => 'Tambah Admin'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users',],
            'password' => ['required', 'min:5', 'max:255',],
            'role' => 'required|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/dashboard/user')->with('success', 'Admin berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.admin.edit', [
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required|max:255'
        ]);

        if ($user->username === $request->username && $user->email === $request) {
            $validatedData = $request->validate([
                'username' => ['required', 'min:5', 'max:255'],
            ]);
        } else if ($user->username !== $request->username && $user->email === $request->email) {
            $validatedData = $request->validate([
                'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            ]);
        }

        if ($user->username === $request->username && $user->email === $request) {
            $validatedData = $request->validate([
                'email' => ['required', 'email:dns'],
            ]);
        } else if ($user->username === $request->username && $user->email !== $request->email) {
            $validatedData = $request->validate([
                'email' => ['required', 'email:dns', 'unique:users'],
            ]);
        }

        User::where('id', $user->id)->update($validatedData);

        return redirect('/dashboard/user')->with('success', 'Admin berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('success', 'Admin berhasil dihapus!');
    }
}
