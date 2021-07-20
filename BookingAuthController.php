<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
        ]);
   
        $credentials = $request->only('fullname', 'email');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'qkids' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return Booking::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'qkids' => Hash::make($data['qkids'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return redirect('login');
    }
}