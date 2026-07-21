<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //input data mahasaswa dari url
    public function index ($nama){
        return $nama;
    }
}
