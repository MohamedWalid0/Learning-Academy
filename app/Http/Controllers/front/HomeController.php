<?php

namespace App\Http\Controllers\front;

use App\Course;
use App\Student;
use App\Trainer;
use App\Feedback;
use App\SiteContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index(){
        $data['courses'] = Course::orderByDesc('id')
        ->limit(3)
        ->get() ;

        $data['courses_count'] = Course::count() ;
        $data['students_count'] = Student::count() ;
        $data['trainers_count'] = Trainer::count() ;

        $data['feedbacks'] = Feedback::get() ;

        $data['banner'] = SiteContent::first() ;


        return view('front.index')->with($data) ;
    }


}
