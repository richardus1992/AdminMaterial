<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestControll extends Controller
{
    public function index(){


        return view('backend.index');
    }
}
