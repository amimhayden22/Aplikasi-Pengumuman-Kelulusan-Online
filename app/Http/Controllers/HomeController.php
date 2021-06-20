<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countGrade = \App\Model\Grade::count();
        $countStudent = \App\Model\Student::count();
        $countUser = \App\User::count();

        return view('dashboard.index', compact('countGrade','countStudent','countUser'));
    }
}
