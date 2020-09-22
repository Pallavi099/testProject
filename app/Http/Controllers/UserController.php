<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'pallu';
        $users = array(
            "name" => "pallavi",
            "name1" => "pallavi1",
            "name2" => "pallavi2"
        );
        return view('user', compact('name','users'));
    }
}
