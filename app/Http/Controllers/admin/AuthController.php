<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Mail\RegisterMail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login') ;

    }

    public function doLogin(Request $request){

        $data = $request->validate([

            'email' => 'required|max:191' ,
            'password' => 'required|string' ,

        ]);

        if ( ! auth()->guard('admin')->attempt( ['email' => $data['email']   , 'password' => $data['password'] ])  ){
            return back() ;
        }
        else{

            return redirect( route('admin.homepage') ) ;

        }



    }



    public function logout(){

        auth()->guard('admin')->logout() ;
        return redirect( route('admin.login') ) ;

    }




    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();



        // use name because facebook not redirect user email

        $username = $user->name ;

        $db_user = Admin::where('email' , '=' , $username)->first() ;


        if ($db_user == null){

            $register = Admin::create([
                'username' => $username ,
                'email' => $username ,
                'password' => Hash::make('111111') ,
                'oAuth_token' => $user->token
            ]);

            Auth::guard('admin')->login($register);

            // send mail


            // $user->email instance of 'mohamed@gmail.com' but fb not give access for user email
            Mail::to('mohamed@gmail.com')->send(new RegisterMail($user->name)) ;



        }
        else{
            Auth::guard('admin')->login($db_user);


        }

        return redirect( route('admin.homepage') );





    }









}
