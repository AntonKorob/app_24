<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function about()
    {    
        return view('about');
    }
  
    public function review()
    {
        return view('review');
    }
    public function check()
    {
        return view('check');
    }
        
    public function product()
    {
        return view('product');
    }

    //не зканчено
    public function delete_all()
    {
        return view('delete_all');
        
    }
    
    
}