<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
 
    public function user(){
        return 'welcome user';
    }
    public function getIndex(){

       /*  $obj =new \stdclass();
        $obj->name='Ahmad';
        $obj->id='11';
     */
    $data=['ahmad','bassam'];
        return view('welcome', compact('data'));

    }
}
