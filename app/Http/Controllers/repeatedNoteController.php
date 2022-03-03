<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repeatedNoteController extends Controller
{
    public function index()
    {
        return view('RepeatedNote');
    }
}
