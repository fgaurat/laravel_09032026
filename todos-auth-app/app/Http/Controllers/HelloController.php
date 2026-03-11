<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class HelloController extends Controller
{
    public function index(){
        Log::info("hello");
        return Inertia::render('hello');
    }
}
