<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function store(){
        return "store";
    }

    public function update(){
        return "update";
    }

    public function delete(){
        return "delete";
    }

    public function index(){
        return "index";
    }
}
