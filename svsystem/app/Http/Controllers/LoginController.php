<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showStudentLoginForm()
    {
        return view('loginstudent'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin_dashboard');
            } elseif ($user->role === 'student') {
                return redirect()->route('student_dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Invalid role');
            }
        }

        return redirect()->back()->with('error', 'Invalid email or password');
    }

    public function loginstudent(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Check if the user's password needs to be upgraded to Bcrypt
            if (!Hash::needsRehash(Auth::user()->password)) {
                // Retrieve the user model from the database
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
            }
    

        }
    
        return redirect()->back()->with('error', 'Invalid email or password');
    }

    
    

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }


}
