<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\FlareMiddleware\AddJobs;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();

        return view('admin.index', compact('admins', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),

        ]);

        // Create a new admin
        $admin = new Admin([
            'nom_admin' => $request->input('nom_admin'),
            'prenom_admin' => $request->input('prenom_admin'),
            'email_admin' => $request->input('email_admin'),
        ]);
        $user->admin()->save($admin);

        return redirect()->route('admin.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $admin = Admin::find($id);
        // return view('admin.show', compact('admin'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = Admin::find($id);
        $admin->nom_admin = $request->input('nom_admin');
        $admin->prenom_admin = $request->input('prenom_admin');
        $admin->email_admin = $request->input('email_admin');
        $admin->save();

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // $admin->status = $request->input('status'); // update status field

        $user->save();

        return redirect()->route('admin.index');
    }
    public function updateStatus(Request $request, $id)
    {
        $user = User::find($id);
        $user->status = $request->input('status');
        $user->save();

        return redirect()->route('admin.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Admin::destroy($id);
        return redirect()->route('admin.index');
    }
    
}
