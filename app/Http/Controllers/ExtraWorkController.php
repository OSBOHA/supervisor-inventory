<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExtraWork;
use App\Models\Leader;
use App\Models\Week;
use App\Traits\MediaTraits;
use Illuminate\Support\Facades\Auth;
class ExtraWorkController extends Controller
{
    use MediaTraits;
    public function index()
    {
        $leader= Leader::where('supervisor_id' ,Auth::id())->latest()->orderBy('created_at', 'DESC')->paginate(6);
        return view('supervisor', compact('leader'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([

            'leaders_didnt_enter_withdraw_id'=>'required',
            'leaders_didnt_enter_withdraw_img'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'Leader_communicat_status' => 'required',
        ]);

        if ($request->hasFile('leaders_didnt_enter_withdraw_img')){
            $leaders_didnt_enter_withdraw_img = $this->createMedia($request->file('leaders_didnt_enter_withdraw_img'));
        } else {$leaders_didnt_enter_withdraw_img= "null";}

        if ($request->hasFile('communicate_with_leaders_img')){
            $communicate_with_leaders_img = $this->createMedia($request->file('communicate_with_leaders_img'));
        } else {$communicate_with_leaders_img= "null";}

        if ($request->hasFile('activity_img_1')){
            $activity_img_1 = $this->createMedia($request->file('activity_img_1'));
        } else {$activity_img_1= "null";}

        if ($request->hasFile('activity_img_2')){
            $activity_img_2 = $this->createMedia($request->file('activity_img_2'));
        } else {$activity_img_2= "null";}

        if ($request->hasFile('activity_img_3')){
            $activity_img_3 = $this->createMedia($request->file('activity_img_3'));
        } else {$activity_img_3= "null";}

        $array['leaders_didnt_enter_withdraw_id'] = $request->input('leaders_didnt_enter_withdraw_id');
        $array['communicate_with_leaders_id'] = $request->input('communicate_with_leaders_id');
        $array['activity_description'] = $request->input('activity_description');

        $leaders_didnt_enter_withdraw_array = serialize(array([
            'leaders_didnt_enter_withdraw_id' => $array['leaders_didnt_enter_withdraw_id'],
            'leaders_didnt_enter_withdraw_img'=> $leaders_didnt_enter_withdraw_img,
        ]));

        $communicate_with_leaders_array = serialize(array([
            'Leader_communicat_status' => $request->Leader_communicat_status,
            'communicate_with_leaders_id' => $array['communicate_with_leaders_id'],
            'communicate_with_leaders_img' => $communicate_with_leaders_img,
        ]));

        $activities_array = serialize(array([
            'activity_description' => $array['activity_description'],
            'activity_img_1' => $activity_img_1,
            'activity_img_2' => $activity_img_2,
            'activity_img_3' => $activity_img_3,
        ]));

        $week_id =Week::latest('id')->first()->id;

        $extrawork= ExtraWork::updateOrCreate([
            'supervisor_id'=>Auth::id(),
             'week_id'=> $week_id,
            ],
            [
             'leaders_didnt_enter_withdraw'=>$leaders_didnt_enter_withdraw_array,
             'communicate_with_leaders'=> $communicate_with_leaders_array,
             'activities' => $activities_array,
            ]);

           //dd($extrawork);
        return redirect()->route('index')->with('message', 'Your Entry saved');
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
