<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;


class absenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher_id = auth()->user()->id;
        $absences = Absence::select('modules.name_modul', 'students.cne', 'students.nom_etu', 'students.prenom_etu', 'absences.justify', 'absences.comm_abs', 'seances.date_seance', 'seances.heure_debut', 'seances.heure_fin', 'seances.type_seance')
            ->join('seances', 'absences.seance_id', '=', 'seances.id')
            ->join('students', 'absences.user_id', '=', 'students.user_id')
            ->join('modules', 'seances.module_id', '=', 'modules.id')
            ->where('seances.user_id', '=', $teacher_id)
            ->get();
        return view('teachers.absences', compact('absences'));
    }

    public function filterByCne(Request $request)
    {
        $teacher_id = auth()->user()->id;
        $cne = $request->input('cne');
        $absences = Absence::select('modules.name_modul', 'students.cne', 'students.nom_etu', 'students.prenom_etu', 'absences.justify', 'absences.comm_abs', 'seances.date_seance', 'seances.heure_debut', 'seances.heure_fin', 'seances.type_seance')
            ->join('seances', 'absences.seance_id', '=', 'seances.id')
            ->join('students', 'absences.user_id', '=', 'students.user_id')
            ->join('modules', 'seances.module_id', '=', 'modules.id')
            ->where('seances.user_id', '=', $teacher_id)
            ->where('students.cne', 'LIKE', '%' . $cne . '%')

            ->get();
    
        return view('teachers.absences', ['absences' => $absences]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
