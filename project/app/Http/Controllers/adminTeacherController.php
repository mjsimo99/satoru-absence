<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\teacher;
use Tests\TestCase;

class adminTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = teacher::all();
        $users = User::all();
        return view('adminTeacher.index', compact('teachers', 'users'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adminTeacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),

        ]);
        $teacher = new teacher([
            'nom_ens' => $request->input('nom_ens'),
            'prenom_ens' => $request->input('prenom_ens'),
            'adress_ens' => $request->input('adress_ens'),
            'ville_ens' => $request->input('ville_ens'),
            'photo_ens' => $request->input('photo_ens'),
            'email_ens' => $request->input('email_ens'),
            'phone_ens' => $request->input('phone_ens'),
        ]);
        $user->teacher()->save($teacher);
        
        return redirect()->route('adminTeacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $teacher = teacher::find($id);
        // $user = User::find($id);
        // return view('adminTeacher.show', compact('teacher', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = teacher::find($id);
        return view('adminTeacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = teacher::find($id);
        $teacher->nom_ens = $request->input('nom_ens');
        $teacher->prenom_ens = $request->input('prenom_ens');
        $teacher->adress_ens = $request->input('adress_ens');
        $teacher->ville_ens = $request->input('ville_ens');
        $teacher->photo_ens = $request->input('photo_ens');
        $teacher->email_ens = $request->input('email_ens');
        $teacher->phone_ens = $request->input('phone_ens');
        $teacher->save();

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // $user->role = $request->input('role');
        $user->save();

        return redirect()->route('adminTeacher.index');
    }
    public function updateStatus(Request $request, string $id)
    {
        $user = User::find($id);
        $user->status = $request->input('status');
        $user->save();
        return redirect()->route('adminTeacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher:: destroy($id);
        User:: destroy($id);
        return redirect()->route('adminTeacher.index');
    }
}
