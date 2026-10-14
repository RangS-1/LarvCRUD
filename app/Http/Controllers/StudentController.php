<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nis'       => 'required|string|max:20|unique:students,nis', 
            'nama'      => 'required|string|max:100', 
            'rayon'     => 'required|string|max:20', 
            'rombel'    => 'required|string|max:20',
            'email'     => 'nullable|email|unique:students,email',
        ]);

        Student::create($data);

        return redirect()->route('students.index') ->with('success', 'Data ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    //public function show(Student $student)
    //{
    //    //
    //}

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'nis'   => ['required', 'string', 'max:20', Rule::unique('students', 'nis')->ignore($student->id)],
            'nama'  => 'required|string|max:100',
            'rayon' => 'required|string|max:20',
            'rombel'=> 'required|string|max:20',
            'email' => ['nullable', 'email', Rule::unique('students', 'email')->ignore($student->id)],
        ]);

        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Data diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', "Data dihapus");
    }
}
