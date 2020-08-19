<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use Bulkly\User;
use Bulkly\BufferPosting;

class BufferPostingController extends Controller
{
    function newMenu()
    {
        $user = User::find(Auth::id());
        $bufferPostingData = BufferPosting::with('groupInfo')->with('accountInfo')->paginate(10);
        return view('newMenu')->with('user', $user)->with('bufferPostingData',$bufferPostingData);
    }
}
