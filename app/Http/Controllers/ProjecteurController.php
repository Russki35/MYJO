<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjecteurController extends Controller
{
    public function index(){
        return view('layouts.projecteur');
    }
}
