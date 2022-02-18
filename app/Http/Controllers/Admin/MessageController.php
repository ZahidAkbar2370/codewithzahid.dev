<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        return view("Admin.Message.view_messages")
        ->with("messages",$messages);
    }

    public function destroy($id)
    {
        $deleteMessage = Message::find($id)->delete();

        return redirect("view-messages");
    }
}
