<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\module;

class adminModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $modules = Module::all();
        return view('adminModul.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adminModul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $input = $request->all();
        Module::create($input);
        return redirect()->route('adminModul.index');
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
        $module = Module::find($id);
        return view('adminModul.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module = Module::find($id);
        $module->update($request->all());
        return redirect()->route('adminModul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Module::destroy($id);
        return redirect()->route('adminModul.index');
    }
}
