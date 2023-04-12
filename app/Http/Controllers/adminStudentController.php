<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
use SNMP;

class adminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = student::all();
        $users = User::all();
        return view('adminStudent.index', compact('students', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adminStudent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
        

        ]);
        $student = new student([
            'cne' => $request->input('cne'),
            'nom_etu' => $request->input('nom_etu'),
            'prenom_etu' => $request->input('prenom_etu'),
            'dateN_etu' => $request->input('dateN_etu'),
            'villeN_etu' => $request->input('villeN_etu'),
            'ville_etu' => $request->input('ville_etu'),
            'adresse_etu' => $request->input('adresse_etu'),
            'photo_etu' => $request->input('photo_etu'),
            'email_etu' => $request->input('email_etu'),
            'phone_etu' => $request->input('phone_etu'),
        ]);

        $user->student()->save($student);
        return redirect()->route('adminStudent.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = student::find($id);
        return view('adminStudent.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = student::find($id);
        $student->cne = $request->input('cne');
        $student->nom_etu = $request->input('nom_etu');
        $student->prenom_etu = $request->input('prenom_etu');
        $student->dateN_etu = $request->input('dateN_etu');
        $student->villeN_etu = $request->input('villeN_etu');
        $student->ville_etu = $request->input('ville_etu');
        $student->adresse_etu = $request->input('adresse_etu');
        $student->photo_etu = $request->input('photo_etu');
        $student->email_etu = $request->input('email_etu');
        $student->phone_etu = $request->input('phone_etu');
        $student->save();
        
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // $user->role = $request->input('role');
        $user->save();
        return redirect()->route('adminStudent.index');
    }
    public function updateStatus(Request $request, string $id)
    {
        $user = User::find($id);
        $user->status = $request->input('status');
        $user->save();
        return redirect()->route('adminStudent.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        User::destroy($id);
        return redirect()->route('adminStudent.index');
    }
}
