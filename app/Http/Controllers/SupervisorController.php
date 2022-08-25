<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Supervisor;

class SupervisorController extends Controller
{
    public function listAll()
    {
        if (Auth::user()->hasRole('admin')) {
            $supervisors = Supervisor::withCount('leaders')->with('current_advisor_info.user')->with('user')->get();
        return view('supervisors.list_supervisors')->with('supervisors',$supervisors)->with('title','كل المراقبين');
        }else {
            return view('errors.unauthorized');
        }


    }

    public function mySupervisors()
    {
        $advisor = Advisor::where('user_id',Auth::id())->first();
        $supervisors = Supervisor::withCount('leaders')->with('current_advisor_info.user')->with('user')->where('current_advisor', $advisor->id)->get();
        return view('supervisors.list_supervisors')->with('supervisors',$supervisors)->with('title','المراقبين في فريقي');

    }

    public function upgradeSupervisor()
    {
        //asignRole -> Advisor
    }


    public function assignToAdvisor(Request $request, $id)
    {
        //super-id
        //advisor id
    }

    public function assignleaders(Request $request, $id)
    {
        //leader_id
        //super_id
    }


    public function show($id)
    {
        /*
            shiw supervisor [info + inventory]
        */
    }

    public function delete($id)
    {
        /*
            when delete 
            delete all associated records
            leaders will be with super =0
        */
    }

}
