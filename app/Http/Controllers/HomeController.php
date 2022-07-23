<?php

namespace App\Http\Controllers;
use App\Models\Leader as Leader;
use App\Models\LeaderDuty;
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
        $leader= Leader::where('supervisor_id' ,Auth::id())->latest()->orderBy('created_at', 'DESC')->paginate(6);
        $leader_id = Leader::where('supervisor_id' ,Auth::id())->latest()->first()->id;
        $mark= LeaderDuty::where('supervisor_id' ,Auth::id())->where('leader_id', $leader_id)
        ->orderBy('created_at', 'DESC')->paginate(6);

        // print_r($data);
        return view('front' , compact ('leader', 'mark'));
    }
}
