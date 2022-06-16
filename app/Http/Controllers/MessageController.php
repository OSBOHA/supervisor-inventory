<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function listMessage()
    {
        $id = Auth::id();
        $messages = DB::table('messages')
            ->select('body', 'sender_id', 'receiver_id', 'status')
            ->where('sender_id' , 1)
            ->orWhere('receiver_id' , 1)
            ->get('body', 'sender_id', 'receiver_id', 'status');
        return view('chatbox', compact(['messages']));

    }

    public function addMessage(Request $req)
    {
        //$id = Auth::id();
        $id=1;
        $supervisor = Supervisor::
            select('current_advisor') ->where('user_id', $id)
            ->value('current_advisor');
        $message = new Message;
        // $message->title=$req->name;
        $message->body=$req->body;
        $message->title ='';
        $message->sender_id=$id;
        $message->receiver_id=$supervisor;
        $message->status=0;
        $message->save();
        return redirect('chatbox');

    }

}
