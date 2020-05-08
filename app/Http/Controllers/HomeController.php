<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Home Page";
        return view('home', compact('name'));
    }

    public function phppage()
    {
        $data = array(
            "lesson1" => "This is lesson1",
            "lesson2" => "This is lesson2",
            "lesson3" => "This is lesson3"
        );
        return view('php', compact('data'));
    }

    public function jspage()
    {
        $data = array(
            "lesson1" => "This is lesson1",
            "lesson2" => "This is lesson2",
            "lesson3" => "This is lesson3"
        );
        return view('js', compact('data'));
    }
}
