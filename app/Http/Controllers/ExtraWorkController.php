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
        //
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
        $request->validate([

            'activities'=> 'required',
            'communicate_with_leaders'=> 'required',
            'leaders_didnt_enter_withdraw'=> 'required'
        ]);

        if ($request->hasfile('media')){
            $imageName1 = $this -> createMedia($request ->$imageName1);

        }
        
        $activities_array = serialize(array(["$request->activities", $imageName1]));

        if ($request->hasfile('media')){
            $imageName2 = $this -> createMedia($request ->$imageName2);

        }

        $leaders_didnt_enter_withdraw_array = serialize(array([$imageName2]));

        if ($request->hasfile('media')){
            $imageName3 = $this -> createMedia($request ->$imageName3);

        }

        $communicate_with_leaders_array = serialize(array(["$request->communicate_with_leaders", "$request->communicate_with_leaders0",
        "$request->communicate_with_leaders1","$request->communicate_with_leaders2","$request->communicate_with_leaders3",
        "$request->communicate_with_leaders4", $imageName3]));


        $extrawork = ExtraWork::create([

            'activities'=> $activities_array,
            'leaders_didnt_enter_withdraw'=> $leaders_didnt_enter_withdraw_array ,
            'communicate_with_leaders'=> $communicate_with_leaders_array,
            
            
        ]);
      return redirect()->route('supervisor.index')-> with(['success'=> 'saved succefully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
