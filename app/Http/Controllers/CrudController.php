<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function view() {
        return view('crud');
    }

    public function add() {
        return view('add');
    }
}