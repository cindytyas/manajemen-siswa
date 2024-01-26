<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
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
        $amount_student = Student::count();
        $amount_classroom = Classroom::count();
        $amount_teacher = Teacher::count();
        $amount_subject = Subject::count();
        return view('pages.admin.dashboard', [
            'amount_student' => $amount_student,
            'amount_classroom' => $amount_classroom,
            'amount_teacher' => $amount_teacher,
            'amount_subject' => $amount_subject
        ]);
    }
}
