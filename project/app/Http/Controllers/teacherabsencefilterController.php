<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seances;
use App\Models\student;
use App\Models\study;
use App\Models\absence;

use function Ramsey\Uuid\v1;

class teacherabsencefilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = auth()->user()->id;

        $sciences = seances::where('user_id', '=', $teacher)->get();
        $students = study::select('students.cne', 'students.nom_etu as Fname', 'students.prenom_etu as Lname', 'seances.id as seance_id', 'students.user_id as student')
            ->join('modules', 'modules.id', '=', 'study.module_id')
            ->join('students', 'students.user_id', '=', 'study.user_id')
            ->join('seances', 'seances.module_id', '=', 'study.module_id')
            ->join('teachers', 'teachers.user_id', '=', 'seances.user_id')
            ->where('teachers.user_id', '=', $teacher)

            ->get();
        return view('teachers.absence', compact('sciences', 'students'));
    }
    public function search(Request $request)
    {
        $teacher = auth()->user()->id;
        $query = seances::where('user_id', '=', $teacher);

        // Filter by date
        if (!empty($request->date)) {
            $query->where('date_seance', $request->date);
        }

        // Filter by start time
        if (!empty($request->start_time)) {
            $query->where('heure_debut', '=', $request->start_time);
        }

        // Filter by end time
        if (!empty($request->end_time)) {
            $query->where('heure_fin', '=', $request->end_time);
        }

        // If no filters are applied, return all the seances
        if ($query->getQuery()->wheres == []) {
            $sciences = seances::all();
        } else {
            $sciences = $query->get();
        }

        $students = study::select('students.cne', 'students.nom_etu as Fname', 'students.prenom_etu as Lname', 'seances.id as seance_id', 'students.user_id as student')
            ->join('modules', 'modules.id', '=', 'study.module_id')
            ->join('students', 'students.user_id', '=', 'study.user_id')
            ->join('seances', 'seances.module_id', '=', 'study.module_id')
            ->join('teachers', 'teachers.user_id', '=', 'seances.user_id')
            ->where('teachers.user_id', '=', $teacher)
            ->get();

        // ->groupBy('students.cne' , 'students.nom_etu', 'students.prenom_etu')
        return view('teachers.absence', compact('sciences', 'students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $absence = new absence();
        $absence->seance_id = $request->seance_id;
        $absence->user_id = $request->student_id;
        $absence->justify = $request->justify;
        $absence->comm_abs = $request->comm_abs;
        $absence->save();

        return redirect()->back()->with('success', 'Absence affectée avec succès.');
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
