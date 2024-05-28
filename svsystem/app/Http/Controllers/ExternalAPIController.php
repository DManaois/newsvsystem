<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalAPIController extends Controller
{
    public function getsvsytem(){
        return view('login');
    }


    public function authenticateWithKey(){
        $result = User::get()->all();
        return $result;
    }

}
