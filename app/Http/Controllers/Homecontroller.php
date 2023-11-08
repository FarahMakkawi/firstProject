<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return  view('home');
    }

    public function test($id=10,$name='default'){
        return "the name is : $name. <br> the  id is : $id.";
    }
}
