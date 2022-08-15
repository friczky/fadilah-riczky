<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skils;
use App\Models\Works;
use App\Models\Educations;
use App\Models\Contact;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about = About::all();
        $works = Works::all();
        $educations = Educations::all();
        $skils = Skils::all();
        $user = User::where('id', 1)->first();
        return view('fe.pages.home',compact('about','works','educations','skils','user'));
    }
}
