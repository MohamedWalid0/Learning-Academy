<?php

namespace App\Http\Controllers\admin;

use Image ;
use App\Cat;
use App\Course;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller{



    public function index(){

        $courses = Course::get();

        return view( 'admin.courses.index' , compact('courses') ) ;
    }

    public function create(){

        $cats = Cat::get() ;
        $trainers = Trainer::get() ;

        return view( 'admin.courses.create' ,compact('cats' , 'trainers') ) ;
    }

    public function store( Request $request){

        $data = $request->validate([

            'name' => 'required|string|max:50' ,
            'cat_id' => 'required|exists:cats,id' ,
            'trainer_id' => 'required|exists:trainers,id' ,
            'desc' => 'required|string|max:10000' ,
            'content' => 'required|string|max:50000' ,
            'price' => 'required|string|max:10' ,
            'img' => 'required|image|mimes:jpg,jpeg,png' ,

        ]) ;

        $new_name = $data['img']->hashName() ;
        Image::make($data['img'])->resize(360,313)->save(public_path('front/img/' . $new_name));


        $course = Course::create([
            'name' => $data['name'] ,
            'cat_id' => $data['cat_id'] ,
            'trainer_id' => $data['trainer_id'] ,
            'desc' => $data['desc'] ,
            'content' => $data['content'] ,
            'price' => $data['price'] ,
            'img' => $new_name ,
        ]) ;

        return redirect(route('courses')) ;
    }

    public function edit($id){
        $course = Course::findOrFail($id) ;
        $cats = Cat::get() ;
        $trainers = Trainer::get() ;

        return view( 'admin.courses.edit' , compact('course' , 'cats' , 'trainers') ) ;

    }

    public function update( Request $request , $id){

        $data = $request->validate([
            'name' => 'required|string|max:50' ,
            'cat_id' => 'required|exists:cats,id' ,
            'trainer_id' => 'required|exists:trainers,id' ,
            'desc' => 'required|string|max:10000' ,
            'content' => 'required|string|max:50000' ,
            'price' => 'required|string|max:10' ,
            'img' => 'nullable|image|mimes:jpg,jpeg,png' ,
        ]) ;


        $old_name = Course::findOrFail($id)->img ;

        if($request->hasFile('img')){

            Storage::disk('front/img')->delete($old_name) ;

            $new_name = $data['img']->hashName() ;
            Image::make($data['img'])->resize(360,313)->save(public_path('front/img/' . $new_name));
            $data['img'] = $new_name ;

        }
        else{
            $data['img'] = $old_name ;
        }



        $course = Course::findOrFail($id)->update([
            'name' => $data['name'] ,
            'cat_id' => $data['cat_id'] ,
            'trainer_id' => $data['trainer_id'] ,
            'desc' => $data['desc'] ,
            'content' => $data['content'] ,
            'price' => $data['price'] ,
            'img' => $data['img'] ,
        ]) ;

        return redirect(route('courses')) ;

    }


    public function delete($id){

        $old_name = Course::findOrFail($id)->img ;

        Storage::disk('front/img')->delete($old_name) ;


        $course = Course::findOrFail($id)->delete() ;
        return back() ;

    }




}
