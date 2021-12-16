<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class FirstController extends Controller
{

    //
    public function __construct()
    {
       
    }

    public function first(){
        $this->middleware('auth');
        return 'first';
    }
    
    public function sec(){
        return 'second';
    }
    
}
