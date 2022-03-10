<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use Auth;

class AttendanceController extends Controller
{
    public function create()
    {
        $user_id = Auth::user()->id ?? 1;
        $todayDate = date('Y-m-d');

        $todayAttendance = Attendance::where("attendance_date",$todayDate)->where("user_id", $user_id)->get();

        return view("User.Attendance.mark_attendance")->with("todayAttendance", $todayAttendance);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;
        $todayDate = date('Y-m-d');

        $todayAttendance = Attendance::where("attendance_date",$todayDate)->where("user_id", $user_id)->get();

        if(count($todayAttendance) > 0){
            echo "<script>alert('Attendance Already Marked')</script>";
        }
        else{
            $markTodayAttendance = Attendance::create([
                "user_id" => $user_id,
                "status" => "present",
                "attendance_date" => $todayDate,
            ]);
        }

        return view("User.Attendance.mark_attendance");
    }
}
