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
        return view('ExtraWork', compact('leader'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'leaders_didnt_enter_withdraw_img'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'communicate_with_leaders_img'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'activity_img_1'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'activity_img_2'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'activity_img_3'=>'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('leaders_didnt_enter_withdraw_img')){
            $leaders_didnt_enter_withdraw_img = $this->createMedia($request->file('leaders_didnt_enter_withdraw_img'));
        } else {$leaders_didnt_enter_withdraw_img= "null";}

        if ($request->hasFile('communicate_with_leaders_img')){
            $communicate_with_leaders_img = $this->createMedia($request->file('communicate_with_leaders_img'));
        } else {$communicate_with_leaders_img= "null";}

        if ($request->hasFile('activity_img_0')){
            $activity_img_0 = $this->createMedia($request->file('activity_img_0'));
        } else {$activity_img_0= "null";}

        if ($request->hasFile('activity_img_1')){
            $activity_img_1 = $this->createMedia($request->file('activity_img_1'));
        } else {$activity_img_1= "null";}

        if ($request->hasFile('activity_img_2')){
            $activity_img_2 = $this->createMedia($request->file('activity_img_2'));
        } else {$activity_img_2= "null";}

        $array['leaders_didnt_enter_withdraw_id'] = $request->input('leaders_didnt_enter_withdraw_id');
        $array['communicate_with_leaders_id'] = $request->input('communicate_with_leaders_id');
        $array['activity_description'] = $request->input('activity_description');

        $leaders_didnt_enter_withdraw_array = serialize(array([
            'leaders_didnt_enter_withdraw_id' => $array['leaders_didnt_enter_withdraw_id'],
            'leaders_didnt_enter_withdraw_img'=> $leaders_didnt_enter_withdraw_img,
        ]));

        $communicate_with_leaders_array = serialize(array([
            'communicate_with_leaders_id' => $array['communicate_with_leaders_id'],
            'communicate_with_leaders_img' => $communicate_with_leaders_img,
        ]));

        $activities_array = serialize(array([
            'activity_description' => $array['activity_description'],
            'activity_img_0' => $activity_img_0,
            'activity_img_1' => $activity_img_1,
            'activity_img_2' => $activity_img_2,
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
        return redirect()->route('extra-work')->with('message', 'Your Entry saved');
    }


    public function show(extrawork $extraWork,Request $request)
    {
        $week=Week::latest()->first();
       $extraWork=ExtraWork::where('week_id',$week->id)->where('supervisor_id',Auth::id())->get();
       //dd($extraWork);
        foreach( $extraWork as $item){
            $item->leaders_didnt_enter_withdraw= unserialize($item->leaders_didnt_enter_withdraw);
            $item->communicate_with_leaders=unserialize($item->communicate_with_leaders);
            $item->activities=unserialize($item->activities);
        }
        //$id= array(($item->leaders_didnt_enter_withdraw[0]['leaders_didnt_enter_withdraw_id']));
       //print_r($id); die;
       //dd($item->communicate_with_leaders[0]['communicate_with_leaders_id']);
       //dd( $item->activities[0]['activity_description']);

        return view('ExtraWorkResult',compact('extraWork', $extraWork));
    }


    public function edit($id)
    {
        //
    }

}
