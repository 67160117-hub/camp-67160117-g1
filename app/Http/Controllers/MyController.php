<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public $mylav = "";
    private $mylav2;
    protected $mylav3 ;

    function index(){
        return view('myview.index');
    }
}
