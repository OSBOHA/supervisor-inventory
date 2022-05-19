<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listAllMessages(){
       
        $data = DB::table('messages')
          ->select('title','body','created_at')
          ->where('sender_id', Auth::id())
          ->orWhere('receiver_id', Auth::id())
          ->orderBy('created_at', 'DESC')->get('title','body','created_at');
        //dd($data);
        
       
        return view('message', compact('data'));

    }

    


}
