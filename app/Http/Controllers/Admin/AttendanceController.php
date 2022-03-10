<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;


class AttendanceController extends Controller
{
    public function index()
    {
        $viewAttendances = Attendance::all();
        $users = User::all();
            return view('Admin.Attendance.view_attendance')
                ->with('viewAttendances', $viewAttendances)->with('users', $users);
    }

    public function edit($id)

    {
        $editAttendance = Attendance::find($id);
        return view('Admin.Attendance.edit_attendance')
            ->with('editAttendance' , $editAttendance);
    }

    public function update(Request $request, $id)

    {
        $updateAttendance = Attendance::find($id);
        $updateAttendance->status = $request->status;
        $updateAttendance->update();

        return redirect('view-attendances');

    }


    public function destroy($id)

    {
        $destroyAttendance = Attendance::find($id)->delete();

        return redirect()->back();
    }

}
