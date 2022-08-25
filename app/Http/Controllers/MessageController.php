<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function listMessage($partnerId)
    {
        $partnerID = $partnerId;
        $partner = User::find($partnerID);
        //get and display all the messages between 2 users
        $messages = Message::where(function ($q) {
            $q->where('sender_id', Auth::id())
                ->orWhere('receiver_id', Auth::id());
        })
            ->where(function ($q) use ($partnerID) {
                $q->where('sender_id', $partnerID)
                    ->orWhere('receiver_id', $partnerID);
            })
            ->get();

        $supervisor = null;
        $advisor = null;
        if (Auth::user()->hasRole('advisor')) {
            $advisor = Advisor::with('current_supervisors.user')->where('user_id', Auth::id())->first();
        } else if (Auth::user()->hasRole('supervisor')) {
            $supervisor = Supervisor::with('current_advisor_info.user')->where('user_id', Auth::id())->first();
        }

        //update status
        Message::where('sender_id', $partnerId)->Where('receiver_id', Auth::id())->update(['status' => 1]);
        
        
        return view('messages.list_all')->with(
            [
                'messages' => $messages,
                'supervisor' => $supervisor,
                'advisor' => $advisor,
                'selected' => true,
                'partner' => $partner
            ]
        );
    }
    public function listAllMessages()
    {
        $supervisor = null;
        $advisor = null;
        if (Auth::user()->hasRole('advisor')) {
            $advisor = Advisor::with('current_supervisors.user')->where('user_id', Auth::id())->first();
        } else if (Auth::user()->hasRole('supervisor')) {
            $supervisor = Supervisor::with('current_advisor_info.user')->where('user_id', Auth::id())->first();
        }
        return view('messages.list_all')->with('supervisor', $supervisor)->with('advisor', $advisor)
            ->with('selected', false);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required',
            'body' => 'required',
        ]);

        $newMessage = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'body' => $request->body,
        ]);
        return response()->json($newMessage);
    }
}
