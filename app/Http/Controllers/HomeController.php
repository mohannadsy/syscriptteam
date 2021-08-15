<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $type = "sd";
        $services = Service::get();
        return view('index') ->with(compact('services' , 'type'));
    }

    public function show($type)
    {
        $services = Service::get();
        return view('index') ->with(compact('services' , 'type'));
    }
}
