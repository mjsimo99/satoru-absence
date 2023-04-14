<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affect;
use App\Models\teacher;

class affectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //     public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $teacher = optional(auth()->user())->teacher; // get the logged-in teacher or null
        if ($teacher) {
            $affects = $teacher->affect()->with('module')->get(); // get the affected modules for the teacher
        } else {
            $affects = collect(); // create an empty collection if the user is not logged in or not a teacher
        }

        return view('teachers.index', compact('affects'));
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
