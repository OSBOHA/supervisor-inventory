<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Leader;

class LeaderController extends Controller
{
    public function create()
    {
        if (Auth::user()->supervisor->current_advisor_info->id) {
            return view('leaders.create');
        } else {
            return view('errors.unauthorized');
        }
    }


    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'team' => 'required',
            'type' => 'required',
        ]);

        $leader = $request->all();
        $leader['supervisor_id'] = Auth::id();
        $leader['advisor_id'] = Auth::user()->supervisor->current_advisor_info->id;
        Leader::create($leader);
        return redirect()->route('leaders.my_leaders')->with('message', 'Your Entry saved');
    }

    public function listAllLeaders()
    {
        if (Auth::user()->can('list_leaders')) {
            $leaders = Leader::all();
            return view('leaders.all_leaders', compact('leaders'));
        } else {
            return view('errors.unauthorized');
        }
    }

    public function listMyLeaders()
    {
        if (Auth::user()->hasRole('advisor')) {
            $leaders = Leader::where('advisor_id',  Auth::id())->get();
        } else {
            $leaders = Leader::where('supervisor_id',  Auth::id())->get();
        }
        if ($leaders) {
            return view('leaders.my_leaders', compact('leaders'));
        } else {
            return view('errors.not_found');
        }
    }

    public function edit($id)
    {

        $leader = Leader::find($id);
        if ($leader) {
            return view('leaders.update_leader', compact('leader'));
        } else {
            return view('errors.not_found');
        }
    }


    public function update(Request $request, $id)
    {
        $leader = Leader::find($id);
        if (Auth::id() == $leader->supervisor_id || Auth::id() == $leader->advisor_id) {
                $leader->update($request->all());
                return redirect()->route('leaders.my_leaders' , ['messages' => 'Leader Updated']);
            }
            else {
                return view('errors.unauthorized');
            }
    }


    public function delete($id)
    {
        $leader = Leader::find($id);
        if (Auth::id() == $leader->supervisor_id || Auth::id() == $leader->advisor_id) {
                $leader->delete();
                return redirect()->route('leaders.my_leaders' , ['messages' => 'Leader deleted']);
            }
            else {
                return view('errors.unauthorized');
            }

    }

    public function relocate($id)
    {
        //
    }
}
