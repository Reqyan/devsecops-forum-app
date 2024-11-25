<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RuntimeException;
use Throwable;

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
        try {
            $maxAttempts = 3;
            $cooldownMinutes = 15;
        
            // Check if there's a cooldown in session
            $cooldownUntil = session('cooldown_until');
        
            if ($cooldownUntil && now()->lessThan($cooldownUntil)) {
                $remainingTime = round(now()->diffInMinutes($cooldownUntil));
                throw new RuntimeException("Too many login attempts. Please try again in $remainingTime minutes.");
            }
        
            // Retrieve the current attempt count
            $attempts = session('login_attempts', 0);
        
            if ($attempts >= $maxAttempts) {
                // Set cooldown time and notify the user
                session(['cooldown_until' => now()->addMinutes($cooldownMinutes)]);
                throw new RuntimeException("Too many login attempts. Please try again in 15 minutes.");
            }
        
            // Validate the credentials
            $credentials = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
        
            if (Auth::attempt($credentials)) {
                // Reset attempts and cooldown on successful login
                $request->session()->regenerate();
                session()->forget(['login_attempts', 'cooldown_until']);
                return redirect()->intended('/');
            }
        
            // Increment attempts on failure
            session(['login_attempts' => $attempts + 1]);
        
            throw new RuntimeException('Email/Password incorrect. Attempt ' . ($attempts + 1) . ' of ' . $maxAttempts);
        } catch (Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
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
