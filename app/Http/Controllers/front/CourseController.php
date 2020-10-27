<?php

namespace App\Http\Controllers\front;

use App\Cat;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller{

    public function cat($id){

        $cat = Cat::findOrFail($id);

        $courses = Course::where( 'cat_id' , '=' , $id )->paginate(3) ;

        return view('front.courses.cat' , compact('cat' , 'courses') ) ;

    }



    public function show($id , $c_id){


        $course = Course::findOrFail($c_id) ;

        return view('front.courses.show' , compact('course') ) ;

    }




    public function allCourses(){

        $courses = Course::all() ;
        return view('front.courses.allCourses' , compact('courses') ) ;


    }



    public function search( Request $request){
        $keyword = $request->keyword ;

        $courses = Course::where('name' , 'LIKE' , "%$keyword%" )->get() ;
        return response()->json($courses) ;


    }



}
