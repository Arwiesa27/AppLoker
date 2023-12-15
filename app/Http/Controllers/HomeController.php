<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;

class HomeController extends Controller
{
    function show(){
        $data ['lokers'] = Loker::all();
        return view('home',$data);
    }
    function index(){
        return view('alumni.profile');
    }
    function more(){
        $data ['lokers'] = Loker::all();
        return view('more',$data);
    }
}
