<?php

namespace App\Http\Controllers;

use App\Hello;
use App\HelloDep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class HelloController extends Controller
{
    public function show(Hello $hello, HelloDep $helloDep){

        Log::info("HelloController::show");
        Log::info($hello->sayHello());
        Log::info($helloDep->sayHello());
        $name = "GAURAT";
        $firstName = "Fred";

        // return view('hello.show',["name"=>$name,"firstName"=>$firstName]);

        return view('hello.show',compact("name","firstName"));
    }


    public function form(){
        return view('hello.form');
    }

    public function upper(Request $request){
        $the_name = $request->input("the_name");

        return Str::upper($the_name);
    }
}


