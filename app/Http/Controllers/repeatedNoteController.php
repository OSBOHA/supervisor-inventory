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
        $leaders = Leader::where('supervisor_id' ,Auth::id())->latest()->orderBy('created_at', 'DESC')->paginate(6);
        return view('repeatNotes.create' , compact('leaders'));
    }

    
    public function store(Request $request)
    {   
        if ($request->post_late){
           $post_late = implode(' ، ' , $request->post_late);
        } 
        else {$post_late= "لا يوجد";}

        if ($request->light_week){
            $light_week = implode(' ، ' , $request->light_week);
        } 
        else {$light_week= "لا يوجد";}

        if ($request->didnt_publish_news){
            $didnt_publish_news = implode(' ، ' , $request->didnt_publish_news);
        } 
        else {$didnt_publish_news= "لا يوجد";}

        if ($request->deputized_for){
            $deputized_for = implode(' ، ' , $request->deputized_for);
        } 
        else {$deputized_for= "لا يوجد";}

        if ($request->elementary_marks_late){
            $elementary_marks_late = implode(' ، ' , $request->elementary_marks_late);
        } 
        else {$elementary_marks_late= "لا يوجد";}

        $week_id =Week::latest('id')->first()->id;
        $supervisor_id =Auth::id();

        $data = RepeatedNote::updateOrCreate(
            [ 'supervisor_id' => $supervisor_id,
              'week_id' =>$week_id
            ],
            [ 'post_late'            =>$post_late,
              'light_week'           =>$light_week,
              'didnt_publish_news'   =>$didnt_publish_news,
              'deputized_for'        =>$deputized_for,
              'elementary_marks_late'=>$elementary_marks_late,

             ]);

         return redirect()->route('listNotes')->with('message', 'Your Entry Saved');
         
       
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
