<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
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
    public function listAllMessages(){
        
        
        $data = DB::table('messages')
          ->select('sender_id','body','created_at')->groupBy('sender_id')
          ->where('sender_id', Auth::id())
          ->orWhere('receiver_id', Auth::id())
          ->orderBy('created_at', 'DESC')->get('sender_id','body','created_at');
        
        return view('message', compact('data'));

    }

}
