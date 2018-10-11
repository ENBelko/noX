<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Yo\'re welcome shitass ';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title','c\'mon get in douchebag ');
    }

    public function about(){
        $title = 'we\'re super-duper company as you know' ;
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Services#1','Services#2','Services#3']
        );
        return view('pages.services')->with($data);
    }
}
