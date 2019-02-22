<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectscontroller extends Controller
{
    public function index()
    {
    	$project=new \App\project;
    	$list=\App\project::all();
    	return view("pages.projects",['list'=>$list]);
    }
}
