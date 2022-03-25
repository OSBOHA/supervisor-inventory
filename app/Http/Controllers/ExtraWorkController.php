<?php

namespace App\Http\Controllers;
use App\Models\ExtraWork;
use App\Traits\MediaTraits;
use Illuminate\Http\Request;

class ExtraWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $idea = ExtraWork::all()->toArray();
         return view('supervisor.index',compact('idea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('media')){
            $media=$request->file('media');
            $imageName = time().'.'. $media->extension(); 
            $media->move(public_path('assets/images'), $imageName);
        

         $idea = new ExtraWork([

            'activities'=> $request->activities,
            'communicate_with_leaders'=> $request->communicate_with_leaders,
            'leaders_didnt_enter_withdraw'=> $request->leaders_didnt_enter_withdraw,
            'media'=>$imageName,
        ]);
        $idea= serialize(array('activities','communicate_with_leaders','leaders_didnt_enter_withdraw'));
        $idea->save ();
        
    }
      //$this -> createMedia($request -> media ,'assets/images');
        //if($request->hasfile('')){
            //use MediaTraits;
        
        return redirect()->route('supervisor.index')
        ->with ('success');

       
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'activities'=> 'required',
            'communicate_with_leaders'=> 'required',
            'leaders_didnt_enter_withdraw'=> 'required'
        ]);
        $idea =  ExtraWork::find($id); 

        $idea->activities = $request->activities;
        $idea->communicate_with_leaders = $request->communicate_with_leaders;
        $idea->leaders_didnt_enter_withdraw = $request->leaders_didnt_enter_withdraw;

        return redirect()->route('supervisor.index')
        ->with ('updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idea->delete($id);
            return redirect()->route('supervisor.index')
            ->with ('success',' deleted successfully');
    }
}
