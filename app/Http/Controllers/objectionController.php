<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaderDuty;
use App\Models\Objection ;
use App\Traits\MediaTraits;
use Illuminate\Support\Facades\Auth;

class objectionController extends Controller
{
    use MediaTraits;

    public function index()
    {
        $Objection=Objection::where('objector_id',Auth::id())->paginate(4);
        return view('objection.index',compact('Objection'));
           
    }

    public function listAllObjections(Objection $Objection)
    {
        
           $Objection=Objection::where('objector_id',Auth::id())->paginate(4);
            if($Objection){
                if(Auth::user()->can('objection_audit')){
                    $Objection=Objection::all();
                    return view('objection.listAll',compact('Objection'));
                } 
                    return redirect()->route('index');
            }
    }

   
    public function create()
    {
        return view('objection.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $Objection=Objection::create([
            'objector_id'=>Auth::id(),
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return redirect()->route('index');
    }

    
   

    
    public function edit($id)
    {
        //if(Auth::user()->can('objection_audit')){
            $Objection=Objection::find($id);
        return view('objection.update',compact('Objection'));
      // }else{
           //return redirect()->route('index');

       // }
    }

   
    public function update(Request $request,$id )
    {
      
            $Objection = Objection::find($request->id);
            $Objection->reviewer_id = Auth::id();
             $Objection->status = 1;
             $Objection->reviewer_note = $request->reviewer_note;
             $Objection->save();
             
             return redirect()->route('listAllObjections');
    }

    public function destroy($id)
    {
        //
    }
}
