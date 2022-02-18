<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        $registeredStudents = Registration::orderBy("id", "DESC")->paginate(4);

        return view('Admin.Registration.view_registrations')
        ->with("registeredStudents",$registeredStudents);
    }
}
