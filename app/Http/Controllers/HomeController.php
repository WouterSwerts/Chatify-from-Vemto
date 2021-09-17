<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user = Auth::user(); //data of the current user

        $chatHistory = DB::table('ch_messages')
        ->join('users as fromuser', 'ch_messages.from_id', '=', 'fromuser.id')
        ->join('users as touser', 'ch_messages.to_id', '=', 'touser.id')
        ->select('fromuser.name as from_user', 'touser.name as to_user', 'body', 'ch_messages.created_at')
        ->where('from_id', '=', Auth::user()->id)
        ->orWhere('to_id', '=', Auth::user()->id)
        ->limit(10)
        ->get();
        
        //dd($user,$chatHistory);
        return view('home', compact('user', 'chatHistory'));
    }
}
