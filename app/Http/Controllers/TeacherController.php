<?php

namespace App\Http\Controllers;

use App\Model\Grade;
use App\Model\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();

        return view('dashboard.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::orderBy('name')->get();

        return view('dashboard.teachers.create', compact('grades'));
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
            'name'      => 'required',
            'grade_id'  => 'required|not_in:0'
        ]);

        $createTeacher = Teacher::create([
            'name'      => $request->name,
            'grade_id'  => $request->grade_id,
        ]);

        return redirect()->route('teachers.create')->with('success', 'Teacher has been successfully created');
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
        $editTeacher = Teacher::findOrFail($id);
        $grades = Grade::orderBy('name')->get();

        return view('dashboard.teachers.edit', compact('editTeacher', 'grades'));
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
            'name'      => 'required',
            'grade_id'  => 'required|not_in:0'
        ]);

        $updateTeacher = [
            'name'      => $request->name,
            'grade_id'  => $request->grade_id,
        ];

        $teacher = Teacher::findOrFail($id);
        $teacher->update($updateTeacher);

        return redirect()->route('teachers.index')->with('success', 'Teacher name has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTeacher = Teacher::findOrFail($id);
        $deleteTeacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher name has been successfully deleted');
    }
}
