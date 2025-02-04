<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $user = auth()->user();
        $message = $request->message;
        broadcast(new MessageSent($user, $message));

        return response()->json(['status' => 'Message sent']);
    }
}
