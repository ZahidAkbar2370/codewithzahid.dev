<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Notification;

class ContactUsController extends Controller
{
    
    public function create()
    {
        return view('App.Page.contact_us');
    }

    public function store(Request $request)
    {
        $insertMessage = Message::create([
            "name" => $request->name,
            "email" => $request->email,
            "mobile_no" => $request->mobile_no,
            "message" => $request->message,
        ]);

        Notification::create([
            "name" => $request->name,
            "message" => $request->message,
            "type" => "message",
        ]);

        return redirect("contact-us");
    }

}
