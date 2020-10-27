<?php

namespace App\Http\Controllers\front;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){

        $sett = Setting::first() ;


        return view('front.contact.contact' , compact('sett')) ;




    }
}
