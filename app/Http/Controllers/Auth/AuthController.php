<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(){
        return view('login',[
            "title" => "Login",
        ]);
    }

    public function register(){
        return view('register',[
            "title" => "Register new account",
        ]);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('error','Email/Password salah');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Check Email
        if(!User::whereEmail($request->email)->first()){
            // Create new user
            User::create($validatedData);
            return redirect('/login')->with('success','User berhasil ditambahkan');
        }else{
            return back()->with('error','Email sudah terpakai');
        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('/login');
    }
}
