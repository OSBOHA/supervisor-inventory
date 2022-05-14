<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RepeatedNote;
use App\Models\Week;
use App\Models\Leader;

class repeatedNoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {       
        $data = RepeatedNote::all();
        $Leaders = Leader::where('supervisor_id', Auth::id());
        $week_id = Week::latest('id')->first()->id;
        return view('repeatNotes.index', compact('data', 'Leaders', 'week_id'));
    }

   
    public function create()
    {
        $Leaders = Leader::all();
        return view('repeatNotes.create' , compact('Leaders'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            
            'didnt_publish_news'   =>'required',
            'elementary_marks_late'=>'required',
            'post_late'            =>'required',
            'deputized_for'        =>'required',
            'light_week'           =>'required',
        ]);

        $data = RepeatedNote::create([
         
            'supervisor_id'        => Auth::id(),
            'week_id'              => '2',
            'post_late'            =>implode(',' , $request->post_late),
            'light_week'           =>implode(',' , $request->light_week),
            'didnt_publish_news'   =>implode(',' , $request->didnt_publish_news),
            'deputized_for'        =>implode(',' , $request->deputized_for),
            'elementary_marks_late'=>implode(',' , $request->elementary_marks_late),
        ]);
         return redirect()->route('notes.index')->with('success', 'Your Entry Saved');    
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
