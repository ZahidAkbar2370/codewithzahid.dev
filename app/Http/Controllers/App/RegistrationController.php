<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Notification;

class RegistrationController extends Controller
{
    
    public function create()
    {
        return view('App.Page.registration');
    }

    public function store(Request $request)
    {
        $checkAlreadyRegister = Registration::where("email", $request->email)->get();

        if(count($checkAlreadyRegister) > 0)
        {
             echo "<script>alert('You are Already Registered. Please Contact With Admin. Thanks');</script>";
                
                return view("App.Page.course_registration");
        }
        else{

        $insertMessage = Registration::create([
            "name" => $request->name,
            "email" => $request->email,
            "mobile_no" => $request->mobile_no,
            "address" => $request->address,
            "courses_name" => $request->course_name,
            "degree_name" => $request->degree_name,
            "status" => $request->degree_status,
        ]);

// Send Notification TO Admin

        Notification::create([
            "name" => $request->name,
            "message" => $request->name ." is Fill Form For ". $request->course_name . " Course.",
            "type" => "new_registration",
        ]);

// Send SMS  

        $studentName = $request->name;
        $phone_no = substr($request->mobile_no,1);
            
        // Confedential Configuration Variables / Mandatory Variables
        $email = "codewithzahid.dev@gmail.com";
        $key = "018f6792cb54571aa851f77bcbb1bdb83c";
        $mask = "ALERTIFY";
        $to = "92".$$phone_no;
            
        $message = "AOA ".$studentName." Welcome To CWZ.I Want to Congratulate You That You Have Been Qualified For Online Free Wordpress Course.For More Detail Contact Us: +92 308 1312527 or Visit Website: www.codewithzahid.dev.";

        // Preparing Data to POST Request / DO NOT TOUCH BELOW
        $mask = urlencode($mask);
        $message = urlencode($message);
        $data = "email=".$email."&key=".$key."&mask=".$mask."&to=".$to."&message=".$message;

        // Sending the POST Request with cURL to Branded SMS Pakistan Server
        $ch = curl_init('https://secure.h3techs.com/sms/api/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch); // Result from Branded SMS Pakistan including Return ID
        curl_close($ch);

//Send Gmail
        $details = [

        'title' => 'WELCOME TO CODE WITH ZAHID',
        'name' => 'Congratulation! '. $request->name,
        'body' => 'You are Registered for' .$request->course_name.' Online Free Course. Thank You For Joning. We Hope You will Learn More From CWZ.',
        'action' => 'www.codewithzahid.dev',
        ];
   
        \Mail::to($request->email)->send(new \App\Mail\NewRegisterMail($details));
   

        echo "<script>alert('Thanks For Registration.Confirmation Email Sent to Your Given Mail.');</script>";
            
        return view("App.Page.course_registration");
        }
    }

}
