<?php

namespace App\Http\Controllers;
use App\Models\Leader as Leader;
use App\Models\LeaderDuty;
use App\Models\Supervisor;
use App\Models\Week as Week;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        $supervisor= Supervisor::where('user_id', Auth::id())->latest()->orderBy('created_at', 'DESC')->paginate(1);
        $leader= Leader::where('supervisor_id' ,Auth::id())->latest()->orderBy('created_at', 'DESC')->paginate(6);
        if (count($leader) > 0 ) {
            $mark= LeaderDuty::where('supervisor_id' ,Auth::id())
            ->where('leader_id', Leader::where('supervisor_id' ,Auth::id())->latest()->first()->id)
            ->where('week_id', Week::latest('id')->first()->id)
            ->orderBy('created_at', 'DESC')->paginate(6);
            //dd($supervisor);
            return view('front' , compact ('leader', 'mark', 'supervisor'));
        }
        else {
            return view('front' , compact ('leader', 'supervisor'));
        }
        // dd($supervisor);
    }
}
