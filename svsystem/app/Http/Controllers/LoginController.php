<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Closure;
use Symfony\Component\HttpFoundation\Response;


class LoginController extends Controller
{
     public function showLoginForm()
    {

        Session::regenerateToken(); 
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
    
        // If login attempt was unsuccessful, regenerate the CSRF token and return to login page with error
        Session::regenerateToken();
        return redirect()->route('login')->with('error', 'Invalid email or password');
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

    
    
    public function handle(Request $request, Closure $next): Response
    {
        $apikey = config('app.ext_api_key');

        $apiKeyIsValid = (
            !empty ($apikey)
            && $request -> header('x-api-key') == $apikey
        );

        abort_if (! $apiKeyIsValid, 403, 'Access Denied');

        return $next($request);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }


}
