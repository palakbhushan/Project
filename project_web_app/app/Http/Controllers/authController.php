<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
class authController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function signup()
    {
            return view('auth.signup');
    }

    public function regUser(Request $request)
    {
          $request->validate([
              'firstname'=>'required',
              'lastname'=>'required',
              'email'=>'required|email|unique:users',
              'password'=>'required|max:15|min:6'
              
          ]);

          $user = new User();
          $user->firstname = $request->firstname;
          $user->lastname = $request->lastname;
          $user->email = $request->email;
          $user->password = Hash::make($request->password);
          $res = $user->save();
          if($res)
          {
                return back()->with('success','successfully registered');
          }
          else
          {
            return back()->with('Failed!! something is worng');
          }
    }

    public function logUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|max:15|min:6'
            
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('loginId',$user->id);
                return redirect('home');
                return back()->with('success','Successfully logged in');
            }
            else
            {
                return back()->with('fail',' Incorrect Password');
            }
            
        
        }
        else{
            return back()->with('fail','This email is not registered');
        }
    }

    public function home()
    {
        return view('/home');
    }

    public function index()
    {

    }
    
}
