<?php

namespace App\Http\Controllers\admin;

use Image ;

use App\Cat;
use App\Course;
use App\Student;
use App\Trainer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class StudentController extends Controller
{




    public function index(){

        $students = Student::get();

        return view( 'admin.students.index' , compact('students') ) ;
    }

    public function create(){

        $cats = Cat::get() ;
        $trainers = Trainer::get() ;

        return view( 'admin.students.create' ,compact('cats' , 'trainers') ) ;
    }

    public function store( Request $request){

        $data = $request->validate([

            'name' => 'required|string|max:50' ,
            'email' => 'required|email|max:191|unique:students' ,
            'subject' => 'nullable|max:191' ,

        ]) ;


        $student = Student::create([
            'name' => $data['name'] ,
            'email' => $data['email'] ,
            'spec' => $data['subject'] ,
        ]) ;

        return redirect(route('students')) ;
    }

    public function edit($id){

        $student = Student::findOrFail($id) ;


        return view( 'admin.students.edit' , compact('student' ) ) ;

    }

    public function update( Request $request , $id){

        $data = $request->validate([
            'name' => 'required|string|max:50' ,
            'email' => 'required|email|max:191' ,
            'subject' => 'nullable|max:191' ,

        ]) ;


        $student = Student::findOrFail($id)->update([
            'name' => $data['name'] ,
            'email' => $data['email'] ,
            'spec' => $data['subject'] ,

        ]) ;

        return redirect(route('students')) ;

    }


    public function delete($id){

        $student = Student::findOrFail($id)->delete() ;
        return back() ;

    }


    public function showCourses($id){

        $courses = Student::findOrFail($id)->courses ;
        $student_id = $id ;
        return view( 'admin.students.showCourses' , compact('courses' , 'student_id') ) ;

    }


    public function approveCourse($id , $c_id){

        DB::table('course_student')
        ->where('student_id' , '=' , $id)
        ->where('course_id' , '=' , $c_id)
        ->update([
            'status' => 'approve'
        ]);

        return back() ;

    }




    public function rejectCourse($id , $c_id){

        DB::table('course_student')
        ->where('student_id' , '=' , $id)
        ->where('course_id' , '=' , $c_id)
        ->update([
            'status' => 'reject'
        ]);

        return back() ;

    }




    public function addToCourse($id) {

        $student = Student::where('id' , '=' , $id)->first() ;

        $courses = Course::get() ;


        return view('admin.students.addToCourse' , compact('student' , 'courses')) ;

    }


    public function storeCourse($id , Request $request){

        $data = $request->validate([
            'course_id' => 'required|exists:courses,id'
        ]) ;


        DB::table('course_student')->insert([
            'student_id' => $id ,
            'course_id' => $data['course_id'],
        ]);

        return redirect( route('students.showCourses' , $id ) ) ;



    }









}
