<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RepeatedNote;
use App\Models\Leader;
use App\Models\Week;

class repeatedNoteController extends Controller
{
    
    public function index()
    {
        // $Leader = Leader::where('supervisor_id', Auth::id());
        // $week_id = Week::latest('id')->first()->id;
        $data = RepeatedNote::get();
        return view('repeatNotes.index', compact('data'));
    }

   
    public function create()
    {
        return view('repeatNotes.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            
            'supervisor_id'=>'required',
            'week_id'=>'required',
            'didnt_publish_news'=>'required',
            'elementary_marks_late'=>'required',
            'post_late'=>'required',
            'deputized_for'=>'required',
            'light_week'=>'required',
        ]);

        $data = RepeatedNote::create([
         
            // 'supervisor_id'        =>'2',
            // 'week_id'              =>'2',
            'post_late'            =>implode(',' , $request->post_late),
            'light_week'           =>implode(',' , $request->light_week),
            'didnt_publish_news'   =>implode(',' , $request->didnt_publish_news),
            'deputized_for'        =>implode(',' , $request->deputized_for),
            'elementary_marks_late'=>implode(',' , $request->elementary_marks_late),
        ]);
         return redirect()->route('index')->with('success', 'Your Entry Saved');    
        // var_dump($data);
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
