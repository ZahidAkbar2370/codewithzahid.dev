<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;

class EmailController extends Controller
{
    public function create()
    {
        return view("Admin.Email.compose_email");
    }

    public function store(Request $request)
    {
        
        if(asset($request->email)){
            
            $details = [

                'title' => 'WELCOME TO CODE WITH ZAHID',
                'name' => 'Aslam o Alaikum',
                'body' => $request->message,
                'action' => 'www.codewithzahid.dev',
                'youtube' => 'https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ',
            ];

            \Mail::to($request->email)->send(new \App\Mail\AdminSendMail($details));
        }else{

            $users = Registration::all();

            foreach ($users as $key => $user) {

                $details = [

                    'title' => 'WELCOME TO CODE WITH ZAHID',
                    'name' => 'Aslam o Alaikum '. $user->name,
                    'body' => $request->message,
                    'action' => 'www.codewithzahid.dev',
                    'youtube' => 'https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ',
                ];

                \Mail::to($user->email)->send(new \App\Mail\AdminSendMail($details));
            }
        }

        return redirect("composer-email");
    }

}
