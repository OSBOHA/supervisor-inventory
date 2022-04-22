<?php

namespace App\Http\Controllers;

use App\Models\LeaderDuty;
use Illuminate\Http\Request;
use App\Traits\MediaTraits;

class LeaderDutyController extends Controller
{
    use MediaTraits;

    public function index()
    {
        return view('LeaderDuty');
    }


    public function create()
    {
       //
    }


    public function store(Request $request)
    {
        $request->validate([

            'team_final_mark'=>'required',
            'current_team_members'=>'required',
            'follow_up_post'=>'required',
            'support_post'=>'required',
            'leader_reading'=>'required',
            'elementary_mark'=>'required',
            'final_mark'=>'required',
            'audit_final_mark'=>'required',
            'withdrawn_ambassadors'=>'required',

        ]);

        if ($request->hasFile('leader_image_1')){
            $leader_image_1 = $this->createMedia($request->file('leader_image_1'));
        } else {$leader_image_1= "null";}

        if ($request->hasFile('leader_image_2')){
            $leader_image_2 = $this->createMedia($request->file('leader_image_2'));
        } else {$leader_image_2= "null";}

        if ($request->hasFile('leader_image_3')){
            $leader_image_3 = $this->createMedia($request->file('leader_image_3'));
        } else {$leader_image_3= "null";}

        if ($request->hasFile('leader_reply_image')){
            $leader_reply_image = $this->createMedia($request->file('leader_reply_image'));
        } else {$leader_reply_image= "null";}



         $follow_up_array = serialize(array(["$request->follow_up_post",
         "$request->follow_up_standard_1", "$request->follow_up_standard_2", "$request->follow_up_standard_3", "$request->follow_up_standard_4", "$request->follow_up_standard_5", "$request->follow_up_standard_6", "$request->follow_up_standard_7", "$request->follow_up_standard_8", "$request->follow_up_standard_9", "$request->follow_up_standard_10"]));

         $support_array = serialize(array(["$request->support_post", "$request->support_standard_1", "$request->support_standard_2", "$request->support_standard_3", "$request->support_standard_4", "$request->support_standard_5", "$request->support_standard_6", "$request->support_standard_7"]));

         $news_array = serialize(array([" leader, $request->news_leader", "discussion, $request->news_discussion", "writing, $request->news_writing" ]));

         $elementary_mark_array = serialize(array(["$request->elementary_mark", "$request->elementary_standard_1", "$request->elementary_standard_2", "$request->elementary_standard_3", "$request->elementary_standard_4", "$request->elementary_standard_5"]));

         $audit_final_mark_array = serialize(array([ $request->audit_final_mark, $leader_image_1, $leader_image_2, $leader_image_3, $leader_reply_image ]));

         $withdrawn_ambassadors_array = serialize(array($request->withdrawn_ambassadors, $request->num_defective));

          $leaderduty= LeaderDuty::create([
            'leader_id'=> '1',
            'week_id'=>'2',
            'team_final_mark' =>$request->team_final_mark,
            'current_team_members' =>$request->current_team_members,
            'follow_up_post'=>$follow_up_array,
            'support_post' =>$support_array,
            'news' =>$news_array,
            'leader_reading' =>$request->leader_reading,
            'elementary_mark' =>$elementary_mark_array,
            'final_mark' =>$request->final_mark,
            'audit_final_mark' =>$audit_final_mark_array,
            'withdrawn_ambassadors' =>$withdrawn_ambassadors_array

        ]);

        return redirect()->route('index')->with('success', 'Your Entry Saved');
    }


    public function show( leaderduty $leaderduty )
    {
        //$support_post=unserialize($support_post);
        //$leaderduty= LeaderDuty::create([
          //  'support_post'=>$support_post,
    //]);
       // $leaderduty=LeaderDuty::all([
         //   'support_post'=>unserialize($support_post),
        //]);

        $leaderduty=LeaderDuty::all();
        return view('result',compact('leaderduty'));

    }


    public function edit(leaderduty $leaderduty)
    {
        //
    }


    public function update(Request $request, leaderduty $leaderduty)
    {
        //
    }


    public function destroy(leaderduty $leaderduty)
    {
        //
    }
}
