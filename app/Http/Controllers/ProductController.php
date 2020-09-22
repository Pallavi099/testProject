<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
        $fruit= array('mango', 'mango1', 'mango2');
        return view('welcome', compact('fruit'));
   } 
}
