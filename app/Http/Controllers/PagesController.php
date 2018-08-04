<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to app !!!';

       // return view ('pages.Index', compact ('title')) ;
       return view ('pages.Index')->with('title',$title) ;

    }

    public function about(){

        return view ('pages.about') ;
    }


public function services(){
    $data = array (

        'title' => 'services',
        'services' => ['web Design', 'Programming' ,'SEO']
    );
    return view ('pages.services')->with($data);


    }
        
}
