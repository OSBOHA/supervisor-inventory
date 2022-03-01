<?php

namespace App\Http\Controllers;

use App\Models\LeaderDuty;
use Illuminate\Http\Request;

class LeaderDutyController extends Controller
{

    public function index()
    {
        return view('LeaderDuty');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(leaderduty $leaderduty)
    {
        //
    }


    public function edit(leaderduty $leaderduty)
    {
        //
    }


    public function update(Request $request, leaderduty $leaderduty)
    {
        //
    }


    public function destroy(leaderduty $leaderduty)
    {
        //
    }
}
