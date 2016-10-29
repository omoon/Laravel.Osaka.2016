<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MessageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getMessages()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('messages', ['messages' => $messages]);
    }

    public function saySomething(Request $request)
    {
        $rules = ['message' => 'required'];
        $this->validate($request, $rules);

        $message = new Message();
        $message->message = $request->get('message');
        $message->save();
        return \Redirect::back();

    }
}
