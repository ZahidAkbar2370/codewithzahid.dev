<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use Http;

class SMSController extends Controller
{
    public function create()
    {
        return view("Admin.SMS.send_sms");
    }


    public function sendSMS(Request $request)
    {
        $all_registration = Registration::all();
        
        if(empty($request->mobile_no)){
            foreach($all_registration as $key => $registration)
            {
                $phone_no = substr($registration->mobile_no,1);
                
                // Confedential Configuration Variables / Mandatory Variables
                $email = "codewithzahid.dev@gmail.com";
                $key = "018f6792cb54571aa851f77bcbb1bdb83c";
                $mask = "ALERTIFY";
                $to = "92". $phone_no;
                
                $message = $request->message;

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
            }
        }else{

            // Confedential Configuration Variables / Mandatory Variables
            $email = "codewithzahid.dev@gmail.com";
            $key = "018f6792cb54571aa851f77bcbb1bdb83c";
            $mask = "ALERTIFY";
            $to = $request->mobile_no;
                
            $message = $request->message;

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
        }

        return redirect("send-sms");
        
    }

}
