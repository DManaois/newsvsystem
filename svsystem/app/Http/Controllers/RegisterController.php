<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User; // Import the User model

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|ends_with:@adamson.edu.ph|unique:users',
            'student_no' => 'required|string|max:255|unique:users,student_no',
            'password' => 'required|string|min:6',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('register')->with('error', 'Invalid email');
        }
    
        // Create a new user record
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->student_no = $request->student_no; // Save student number
        $user->password = Hash::make($request->password);
        $user->role = 'student'; // Set default role to "student"
        $user->save();
    
        // Redirect to login page after successful registration
        return redirect()->route('admin.liststudents');
    }
}
