<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function TestControllers(){
         
    }
    public function testSub(){
        //echo "this is controller";
        $name = "hola";
        return view('test')->with('name',$name);
    }
}