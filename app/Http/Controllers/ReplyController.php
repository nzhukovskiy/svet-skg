<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        $reply = new Reply($request->all());
        $reply->subscription = $request->subscription == "on";
        $reply->save();
    }
}
