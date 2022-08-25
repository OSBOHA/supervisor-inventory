<?php

namespace App\Http\Controllers;

use App\Models\Leader as Leader;
use App\Models\LeaderDuty;
use App\Models\Supervisor;
use App\Models\Advisor;
use App\Models\Message;
use App\Models\Week as Week;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole('supervisor')) {
            $supervisor = Supervisor::with('current_advisor_info')->where('user_id', Auth::id())->first();
            $leaderDuties = LeaderDuty::select('team_final_mark')->where('supervisor_id', Auth::id())
                ->where('week_id', Week::latest('id')->first()->id)
                ->orderBy('created_at', 'DESC')->get();
            return view('home', compact('leaderDuties', 'supervisor'));
        } else if (Auth::user()->hasRole('advisor')) {
            $advisor = Advisor::with('current_supervisors.user')->where('user_id', Auth::id())->withCount('current_supervisors')->withCount('leaders')->first();
            $messages= Message::where('receiver_id',Auth::id())->where('status',0)->get();
            $supervisorsIDs = [];
            if ($advisor->current_supervisors) {
                foreach ($advisor->current_supervisors as $supervisor) {
                    array_push($supervisorsIDs, $supervisor->user->id);
                }

                $leaderDuties = LeaderDuty::with('leader', 'supervisor')->WhereIn('supervisor_id', $supervisorsIDs)
                    ->where('week_id', Week::latest('id')->first()->id)
                    ->orderBy('created_at', 'DESC')->get();
                $missigSupport = [];
                $missigReading = [];
                $missigNews = [];
                $missigFinalMark = [];
                $summary = array();


                foreach ($leaderDuties as $duty) {
                    $duty->follow_up_post = unserialize($duty->follow_up_post);
                    $duty->support_post = unserialize($duty->support_post);
                    $duty->news = unserialize($duty->news);
                    $duty->elementary_mark = unserialize($duty->elementary_mark);
                    $duty->audit_final_mark = unserialize($duty->audit_final_mark);
                    $duty->withdrawn_ambassadors = unserialize($duty->withdrawn_ambassadors);
                    if ($duty->leader_reading != "قرأ") {
                        $temp_array = [
                            'leader_name' => $duty->leader->name,
                            'supervisor_name' => $duty->supervisor->name,
                            'missing' =>  $duty->leader_reading
                        ];
                        array_push($missigReading, $temp_array);
                    }
                    if ($duty->support_post[0]['support_post'] != "تم النشر") {
                        $temp_array = [
                            'leader_name' => $duty->leader->name,
                            'supervisor_name' => $duty->supervisor->name,
                            'missing' =>  $duty->support_post
                        ];
                        array_push($missigSupport, $temp_array);
                    }
                    if ($duty->final_mark != "تم النشر") {
                        $temp_array = [
                            'leader_name' => $duty->leader->name,
                            'supervisor_name' => $duty->supervisor->name,
                            'missing' =>  $duty->final_mark
                        ];
                        array_push($missigFinalMark, $temp_array);
                    }
                    //Still           
                    //  if(!in_array("تم النشر", $duty->news)){
                    //             $temp_array =[
                    //                 'leader_name' => $duty->leader->name,
                    //                 'supervisor_name' => $duty->supervisor->name,
                    //                 'missing' =>  $duty->news
                    //             ];
                    //             array_push($missigNews,$temp_array);
                    //         }

                    //         dd($missigNews);
                    //     }



                    if (!array_key_exists($duty->supervisor->name, $summary)) {
                        $summary[$duty->supervisor->name] = array(
                            'freezed' => 0,
                            'fullMark' => 0,
                            'withdrawn_ambassadors' =>  0
                        );
                    } else {

                        if ($duty->team_final_mark == 100.00) {
                            $summary[$duty->supervisor->name]['fullMark'] += 1;
                        }

                        if ($duty->withdrawn_ambassadors['defective_num'] == "") {
                            $summary[$duty->supervisor->name]['withdrawn_ambassadors'] += 0;
                        } else {
                            $summary[$duty->supervisor->name]['withdrawn_ambassadors'] += $duty->withdrawn_ambassadors['defective_num'];
                            
                        }
                    }
                }
                return view('advisorHome')->with([
                    'advisor' => $advisor,
                    'summary' => $summary,
                    'messages'=>$messages,
                    'missigReading' => $missigReading,
                    'missigSupport' => $missigSupport,
                    'missigFinalMark' => $missigFinalMark
                ]);
            }
        }
    }
}
