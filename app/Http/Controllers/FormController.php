<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index($form = null){
        return view('home2')->with('form', $form);
    }
}
