<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Welcome to Manipur Bhawan!',
            //'index' => ['Home','New Booking Request','View Application Status','Cancel Booking']

        );
        
        //return view('pages.index', compact('title')); 
        return view('index')->with($data); 
        
        
    }

    


    
}


