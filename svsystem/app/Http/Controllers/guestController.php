<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guestController extends Controller
{
    public function guest_about()
    {
        return view('guest_about');
    }

    public function guest_violations()
    {
        return view('guest_violations');
    }

    public function guest_policy()
    {
        return view('guest_policy');
    }

    public function guest_interventions()
    {
        return view('guest_interventions');
    }
}
