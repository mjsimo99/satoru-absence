<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();
        
        return view('admin.admin', compact('admins', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('admin.create', compact('user'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nom_admin' => 'required',
            'prenom_admin' => 'required',
            'email_admin' => 'required|email|unique:admins,email_admin',
        ]);

        $user = User::findOrFail($validatedData['user_id']);

        $admin = new Admin([
            'nom_admin' => $validatedData['nom_admin'],
            'prenom_admin' => $validatedData['prenom_admin'],
            'email_admin' => $validatedData['email_admin'],
        ]);

        $user->admin()->save($admin);

        return redirect()->back()->with('success', 'Admin créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $admins = Admin::find($id);
        return view('admin.show', compact('admins', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
