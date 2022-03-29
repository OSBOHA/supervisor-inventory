<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;
use App\Models\Leadre;
use App\Models\LeaderDuty;

class SupervisorController extends Controller
{
    public function index() {
        $supervisors = Supervisor::get();
        $leader_duties = LeaderDuty::get();
        $leadres = leadre::get();
        return view('Supervisor.supervisorHome')
        ->with('supervisors', $supervisors)
        ->with('leadres', $leadres)
        ->with('leader_duties', $leader_duties);
    }
}
