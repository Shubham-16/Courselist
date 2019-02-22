<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function home()
    {
    	$Languages=[
	"C",
	"c++",
	"python",
	"java"
	];

	return view('welcome',
	[
	'languages' => $Languages,
	'Services'=> '<script>alert("HelloScript..");</script>',
	'desc' => request('desc')
	]);
    }
}
