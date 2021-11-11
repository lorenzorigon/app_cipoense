<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //aqui?
    }

    public function show()
    {
        //aqui?
    }

    public function about()
    {
        return view('site.about');
    }

    public function schedule()
    {
        return view('site.schedule');
    }

    public function announcers()
    {
        return view('site.announcers');
    }
}
