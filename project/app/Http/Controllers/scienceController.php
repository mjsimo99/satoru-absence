<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seances;
use Psy\Sudo;
use App\Models\module;
use App\Models\student;
use App\Models\Study;

class scienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = auth()->user()->id;

        $students = student::all();
        
        $sciences = seances::where('user_id', '=', $teacher)->get();
        return view('teachers.index', compact('sciences', 'students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        $sciences = module::all();
        return view('teachers.create', compact('sciences'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $sciences = new seances();
        $sciences->module_id = $request->input('module_id');
        $sciences->user_id = auth()->user()->id;
        $sciences->date_seance = $request->input('date_seance');
        $sciences->heure_debut = $request->input('heure_debut');
        $sciences->heure_fin = $request->input('heure_fin');
        $sciences->type_seance = $request->input('type_seance');
        $sciences->save();
        return redirect()->route('science.index');




    }
    public function storeStudy(Request $request)
    {
        $user_id = $request->input('user_id');
        $module_id = $request->input('module_id');
    
        // Check if a record with the same user_id and module_id already exists
        $existingStudy = Study::where('user_id', $user_id)->where('module_id', $module_id)->first();
    
        if ($existingStudy) {
            // Show a message that the student already has this module
            return redirect()->route('science.index')->with('error', 'This student already has this module.');
        }
    
        // If no record with the same user_id and module_id exists, create a new record
        $study = new Study();
        $study->user_id = $user_id;
        $study->module_id = $module_id;
        $study->save();
    
        // Show a success message
        return redirect()->route('science.index')->with('success', 'Study record created successfully.');
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
