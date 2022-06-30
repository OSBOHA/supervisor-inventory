<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RepeatedNote;
use App\Models\Week as Week;
use App\Models\Leader as Leader;

class repeatedNoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {       
        $data = RepeatedNote::all();
        $leaders = Leader::where('supervisor_id' ,Auth::id())->latest()->orderBy('created_at', 'DESC')->paginate(6);
        $week_id = Week::latest('id')->first()->id;
        return view('repeatNotes.index', compact('data', 'leaders', 'week_id'));
    }

   
    public function create()
    {
        $leaders = Leader::all();
        return view('repeatNotes.create' , compact('leaders'));
    }

    
    public function store(Request $request)
    {   
        $data = RepeatedNote::create([     
            'supervisor_id'        =>Auth::id(),
            'week_id'              =>Week::latest('id')->first()->id,
            'post_late'            =>implode(' ، ' , $request->post_late),
            'light_week'           =>implode(' ، ' , $request->light_week),
            'didnt_publish_news'   =>implode(' ، ' , $request->didnt_publish_news),
            'deputized_for'        =>implode(' ، ' , $request->deputized_for),
            'elementary_marks_late'=>implode(' ، ' , $request->elementary_marks_late),
        ]);
         return redirect()->route('index');    
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
