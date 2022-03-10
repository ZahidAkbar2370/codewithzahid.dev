<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LeaveRequest;
use App\Models\User;
use DB;

class LeaveRequestController extends Controller
{
    public function index()
    {
        $viewRequests = LeaveRequest::all();
        $users = User::all();
            return view('Admin.LeaveRequest.view_leaverequests')
                ->with('viewRequests', $viewRequests)->with('users', $users);
    }

    public function approved($id)

    {

    DB::update("update leave_requests SET status='approved' where id='$id'");
    return redirect()->back();
   
    }

    public function canceled($id)

    {
        DB::update("update leave_requests SET status='canceled' where id='$id'");
        return redirect()->back();
    }

    public function destroy($id)

    {
        $destroy = LeaveRequest::find($id)->delete();
        return redirect()->back();
    }
}
