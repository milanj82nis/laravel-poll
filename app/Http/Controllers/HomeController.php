<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $active_polls = Poll::where('open' , 1 )->paginate(10);

        return view('pages/welcome')->with(compact('active_polls'));
    }
}
