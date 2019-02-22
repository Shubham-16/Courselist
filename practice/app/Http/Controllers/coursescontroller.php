<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursescontroller extends Controller
{
    public function list()
    {
    	$courses=new \App\courses;
    	$course=\App\courses::all();
    	return view("courses",['core'=>$course]);
    }
}
