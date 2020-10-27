<?php

namespace App\Http\Controllers\admin;

use App\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller{


    public function index(){

        $cats = Cat::get();

        return view( 'admin.cats.index' , compact('cats') ) ;
    }

    public function create(){
        return view( 'admin.cats.create' ) ;
    }

    public function store( Request $request){

        $data = $request->validate([
            'catName' => 'required|string|max:191' ,
        ]) ;

        $cat = Cat::create([
            'name' => $data['catName']
        ]) ;

        return redirect(route('cats')) ;
    }



    public function edit($id){
        $cat = Cat::findOrFail($id) ;
        return view( 'admin.cats.edit' , compact('cat') ) ;

    }


    public function update( Request $request , $id){

        $data = $request->validate([
            'catName' => 'required|string|max:191' ,
        ]) ;

        $cat = Cat::findOrFail($id)->update([
            'name' => $data['catName']
        ]) ;

        return redirect(route('cats')) ;

    }


    public function delete($id){
        $cat = Cat::findOrFail($id)->delete() ;
        return back() ;

    }



}
