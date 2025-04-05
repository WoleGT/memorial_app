<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RSVPController extends Controller
{
    public function index()
    {
        return view('rsvp.index');
    }
}
