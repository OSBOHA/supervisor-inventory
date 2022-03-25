<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;
use App\Models\Leadre;
use App\Models\LeaderDuty;


use Illuminate\Support\Facades\Auth;

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
        $supervisors = Supervisor::get();
        $leader_duties = LeaderDuty::get();
        $leadres = leadre::get();
        return view('supervisorHome')
        ->with('supervisors', $supervisors)
        ->with('leadres', $leadres)
        ->with('leader_duties', $leader_duties);

    }
}
