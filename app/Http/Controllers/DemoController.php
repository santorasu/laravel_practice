<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function MyName($namevalue){
        return $namevalue;

    }

    function MyFullName($FirstName, $MiddleName, $LastName){
        // return "First Name: ".$FirstName." Middle Name: ".$MiddleName." Last Name: ".$LastName;
        return view('DemoView', ['firstkey'=>$FirstName, 'middlekey'=>$MiddleName, 'lastkey'=>$LastName]);
    }
}
