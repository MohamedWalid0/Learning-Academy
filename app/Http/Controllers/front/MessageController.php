<?php

namespace App\Http\Controllers\front;

use App\Message;
use App\Student;
use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function newsletter(Request $request){

        $data = $request->validate([
            'email' => 'required|email'
        ]);


        Newsletter::create($data) ;

        return back();
    }


    public function contact(Request $request){

        $data = $request->validate([
            'message' => 'required|string|max:10000' ,
            'name' => 'required|string|max:191' ,
            'email' => 'required|email|max:191' ,
            'subject' => 'nullable|max:191' ,

        ]);


        Message::create($data) ;

        return back();
    }




    public function enroll(Request $request){

        $data = $request->validate([

            'name' => 'required|string|max:191' ,
            'email' => 'required|email|max:191' ,
            'subject' => 'nullable|max:191' ,
            'course_id' => 'required|exists:courses,id'

        ]);

        $old_student = Student::where('email' , '=' , $data['email'])->first() ;

        if( $old_student == null){

            $student = Student::create([
                'name' => $data['name'],
                'email'=> $data['email'],
                'spec' => $data['subject']
            ]);

            $student_id = $student->id ;

        }
        else{

            $student_id = $old_student->id ;

            if($data['name'] !== null){
                $old_student->update([ 'name'=> $data['name'] ]);
            }

            if($data['subject'] !== null){
                $old_student->update([ 'spec'=> $data['subject'] ]);
            }


        }




        DB::table('course_student')->insert([
            'student_id' => $student_id ,
            'course_id' => $data['course_id']
        ]);


        return back();
    }






}
