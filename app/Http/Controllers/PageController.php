<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        // $train = Train::All();

        return view("welcome");
    }
}
