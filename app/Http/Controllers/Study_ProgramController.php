<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Study_Program;
use Illuminate\Http\Request;

class Study_ProgramController extends Controller
{
    public function index()
    {
        $study_programs=Study_Program::all();

        return view('study_programs.index', compact('study_programs'));
    }

    public function create()
    {
        $faculties=Faculty::all();
        return view('study_programs.create', compact('faculties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'faculty_id' => 'required|numeric',
            'degree_level' => 'required|max:255',
            'accreditation_status' => 'required|max:255',
            'description' => 'nullable',
            'email' => 'required|max:255|unique:study_programs',
        ]);

        // Masukkan data ke database
        $study_program = new Study_Program();
        $study_program->name = $request->name;
        $study_program->faculty_id = $request->faculty_id;
        $study_program->degree_level = $request->degree_level;
        $study_program->accreditation_status = $request->accreditation_status;
        $study_program->description = $request->description;
        $study_program->email = $request->email;
        $study_program->save();

        return redirect()
            ->route('study_programs.index')
            ->with('pesan', 'Data berhasil disimpan');
    }

    public function show(Study_Program $study_program)
    {
        return view('study_programs.show', compact('study_program'));
    }

    public function edit(Study_Program $study_program)
    {
        $faculties = Faculty::all();
        return view('study_programs.edit', compact('faculties', 'study_program'));
    }

    public function update(Request $request, Study_Program $study_program)
    {
        $request->validate([
            'name' => 'required|max:255',
            'faculty_id' => 'required|numeric',
            'degree_level' => 'required|max:255',
            'accreditation_status' => 'required|max:255',
            'description' => 'nullable',
            'email' => 'required|max:255|unique:study_programs,email,' . $study_program->id,
        ]);

        // Update data
        $study_program->name = $request->name;
        $study_program->faculty_id = $request->faculty_id;
        $study_program->degree_level = $request->degree_level;
        $study_program->accreditation_status = $request->accreditation_status;
        $study_program->description = $request->description;
        $study_program->email = $request->email;
        $study_program->save();

        return redirect()
            ->route('study_programs.index')
            ->with('pesan', 'Data berhasil diupdate');
    }

    public function destroy(Study_Program $study_program)
    {
        $study_program->delete();

        return redirect()
            ->route('study_programs.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
