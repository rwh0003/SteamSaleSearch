<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display home page
     *
     * @return welcome.blade.php view
     * @author 
     **/
    public function home()
    {
    	$developers = ['Roger', 'Shawn', 'Delia'];

    	return view('welcome', compact('developers'));
    }

    /**
     * Display about page
     *
     * @return about.blade.php view
     * @author 
     **/
    public function about()
    {
    	return view('about');
    }
}
