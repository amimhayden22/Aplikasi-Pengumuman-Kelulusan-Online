<?php

namespace App\Http\Controllers;

use App\Model\Grade;
use App\Model\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('dashboard.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::orderBy('name')->get();

        return view('dashboard.students.create', compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nisn'          => 'required',
            'name'          => 'required',
            'date_of_birth' => 'required|date:yyyy-mm-dd',
            'gender'        => 'required|not_in:0',
            'attachment'    => 'required',
            'grade_id'      => 'required|not_in:0'
        ]);

        $createStudent = Student::create([
            'nisn'          => $request->nisn,
            'name'          => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'gender'        => $request->gender,
            'attachment'    => $request->attachment,
            'grade_id'      => $request->grade_id,
        ]);

        return redirect()->route('students.create')->with('success', 'Student has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editStudent = Student::findOrFail($id);
        $grades = Grade::orderBy('name')->get();
        
        return view('dashboard.students.edit', compact('editStudent', 'grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nisn'          => 'required',
            'name'          => 'required',
            'date_of_birth' => 'required|date:yyyy-mm-dd',
            'gender'        => 'required|not_in:0',
            'attachment'    => 'required',
            'grade_id'      => 'required|not_in:0'
        ]);

        $updateStudent = [
            'nisn'          => $request->nisn,
            'name'          => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'gender'        => $request->gender,
            'attachment'    => $request->attachment,
            'grade_id'      => $request->grade_id,
        ];

        $student = Student::findOrFail($id);
        $student->update($updateStudent);

        return redirect()->route('students.index')->with('success', 'Student has been successfully updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteStudent = Student::findOrFail($id);
        $deleteStudent->delete();

        return redirect()->route('students.index')->with('success', 'Student has been successfully deleted');
    }
}
