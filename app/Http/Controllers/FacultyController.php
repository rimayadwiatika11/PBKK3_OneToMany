<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();

        return view('faculty.index', compact('faculties'));
    }
    public function create()
    {
        return view('faculty.create');
    }
    public function store(Request $request)
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:faculties,email',
            'dean' => 'required|max:255',
            'description' => 'nullable',
        ]);

        //2. masukan data ke database
        $Faculty = new Faculty();

        $Faculty->name = $request->name;
        $Faculty->email = $request->email;
        $Faculty->dean = $request->dean;
        $Faculty->description = $request->description;

        $Faculty->save();

        //3. redirect
        return redirect()
            ->route('faculty.index')
            ->with('pesan', 'Data berhasil disimpan');
    }
    public function show(Faculty $Faculty)
    {
        return view('faculty.show', compact('Faculty'));
    }

    public function edit(Faculty $Faculty)
    {
        return view('faculty.edit', compact('Faculty'));
    }
    public function update(Request $request , Faculty $Faculty)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:faculties,email,' . $Faculty->id,
            'dean' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $Faculty->name = $request->name;
        $Faculty->email = $request->email;
        $Faculty->dean = $request->dean;
        $Faculty->description = $request->description;
        $Faculty->save();

        return redirect()
            ->route('faculty.index')
            ->with('pesan', 'Data berhasil diupdate');

    }
    public function destroy(Faculty $Faculty)
    {
        $Faculty->delete();

        return redirect()
            ->route('faculty.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
