<?php

namespace App\Http\Controllers\admin;

use Image ;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller{



    public function index(){

        $trainers = Trainer::get();

        return view( 'admin.trainers.index' , compact('trainers') ) ;
    }

    public function create(){
        return view( 'admin.trainers.create' ) ;
    }

    public function store( Request $request){

        $data = $request->validate([
            'name' => 'required|string|max:50' ,
            'spec' => 'nullable|string|max:50' ,
            'phone' => 'nullable|string|max:50' ,
            'img' => 'required|max:191|mimes:jpg,jpeg,png' ,

        ]) ;

        $new_name = $data['img']->hashName() ;
        Image::make($data['img'])->resize(60,60)->save(public_path('front/img/' . $new_name));


        $trainer = Trainer::create([
            'name' => $data['name'] ,
            'spec' => $data['spec'] ,
            'phone' => $data['phone'] ,
            'img' => $new_name ,


        ]) ;

        return redirect(route('trainers')) ;
    }

    public function edit($id){
        $trainer = Trainer::findOrFail($id) ;
        return view( 'admin.trainers.edit' , compact('trainer') ) ;

    }

    public function update( Request $request , $id){

        $data = $request->validate([
            'name' => 'required|string|max:50' ,
            'spec' => 'required|string|max:50' ,
            'phone' => 'nullable|string|max:50' ,
            'img' => 'nullable|max:191|mimes:jpg,jpeg,png' ,
        ]) ;


        $old_name = Trainer::findOrFail($id)->img ;

        if($request->hasFile('img')){

            Storage::disk('front/img')->delete($old_name) ;

            $new_name = $data['img']->hashName() ;
            Image::make($data['img'])->resize(60,60)->save(public_path('front/img/' . $new_name));
            $data['img'] = $new_name ;

        }
        else{
            $data['img'] = $old_name ;
        }



        $trainer = Trainer::findOrFail($id)->update([
            'name' => $data['name'] ,
            'spec' => $data['spec'] ,
            'phone' => $data['phone'] ,
            'img' =>  $data['img'] ,
        ]) ;

        return redirect(route('trainers')) ;

    }


    public function delete($id){

        $old_name = Trainer::findOrFail($id)->img ;

        Storage::disk('front/img')->delete($old_name) ;


        $trainer = Trainer::findOrFail($id)->delete() ;
        return back() ;

    }









}
