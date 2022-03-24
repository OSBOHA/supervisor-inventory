<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepeatedNote;
use Auth;
class repeatedNoteController extends Controller
{  
    public function index()
    {
        $data = RepeatedNote::all()->toArray();
         return view('RepeatedNote.index', compact('data'));  
    }
 
    public function create()
    {
        return view('RepeatedNote.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //   'didnt_publish_news'=>'required',
        //   'post_late'=>'required',
        //   'elementary_marks_late'=>'required',
        //   'deputized_for'=>'required',
        //   'light_week'=>'required',
        // ]);

        $data['didnt_publish_news'] = $request->didnt_publish_news;
        $data['elementary_marks_late'] = $request->elementary_marks_late;
        $data['post_late'] = $request->post_late;
        $data['deputized_for'] = $request->deputized_for;
        $data['light_week'] = $request->light_week;
        $data['supervisor_id'] = Supervisor()->id;
        $data['week_id'] = Week()->id;
        RepeatedNote::create($data);

        return redirect()->route('RepeatedNote.index')
        ->with('success', 'leader added successfully');       
    }

    
    public function show($id)
    {
        $data = RepeatedNote::where('id', $id);
        return view('RepeatedNote.show', compact('data'));
    }

    
    public function edit( $id)
    {
        $data = RepeatedNote::find( $id);
        return view('RepeatedNote.edit', compact('data'));

    }

    public function update(Request $request, $id)

    {
        $data = RepeatedNote::find( $id);
        $request->validate([
          'didnt_publish_news'=>'required',
          'post_late'=>'required',
          'elementary_marks_late'=>'required',
          'deputized_for'=>'required',
          'light_week'=>'required',
        ]);
        $data->didnt_publish_news    = $request->didnt_publish_news;
        $data->elementary_marks_late = $request->elementary_marks_late;
        $data->post_late             = $request->post_late;
        $data->deputized_for         = $request->deputized_for;
        $data->light_week            = $request->light_week;
        $data->save;

        return redirect()->route('RepeatedNote.index')
        ->with('success', 'leader update successfully');
    }

    public function destroy($id)
    {
        $data = RepeatedNote::find( $id);
        $data->delete();
        return redirect()->back()->with('success', 'leader delete successfully');
    }
}
