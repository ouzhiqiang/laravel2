<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    //
    public function index()
    {   $name = '我是默默';
        return view('blog/index')->with('name' , $name);
    }
}
