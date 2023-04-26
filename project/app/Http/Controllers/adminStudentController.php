<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
use SNMP;
use Illuminate\Support\Facades\Storage;


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
            'photo_etu' => null,

            'email_etu' => $request->input('email_etu'),
            'phone_etu' => $request->input('phone_etu'),
        ]);
        if($request->hasFile('photo_etu')){
            $path = $request->file('photo_etu')->store('public/student_photos');
            $student->photo_etu = Storage::url($path); // store file path in database
        }

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
        $student->email_etu = $request->input('email_etu');
        $student->phone_etu = $request->input('phone_etu');
    
        if($request->hasFile('photo_etu')){
            // delete old image
            if($student->photo_etu != null){
                Storage::delete(str_replace('/storage', 'public', $student->photo_etu));
            }
            // store new image
            $path = $request->file('photo_etu')->store('public/student_photos');
            $student->photo_etu = Storage::url($path); // store file path in database
        } else {
            // keep old image
            $student->photo_etu = $student->photo_etu;
        }
        
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
