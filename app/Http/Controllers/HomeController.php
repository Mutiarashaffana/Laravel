<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    function index(){
        // echo "PORORO";
        return view(' /home');
    }
}
?>