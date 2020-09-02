<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App\TrangChuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; //use ==> View

class TrangChuController extends Controller
{
    public function index(){
        return view('TrangChu.home');
    }
}
