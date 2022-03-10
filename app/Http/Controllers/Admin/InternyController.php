<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internee;
use App\Models\User;
use App\Models\Language;
use Illuminate\Support\Facades\Validator;
use Hash;

class InternyController extends Controller
{
    public function create()
    {

        $users = User::all();
        $languages = Language::all();
        return view('Admin.Internee.add_internee')->with('users', $users)->with('languages', $languages);

    }
    public function store(Request $request)

    {

        $validate = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $insertUser = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        $insertInterny = Internee::create([
            "user_id" => $insertUser->id,
            "name" => $request->name,
            "email" => $request->email,
            "cnic_no" => $request->cnic_no,
            "mobile_no" => $request->mobile_no,
            "degree_name" => $request->degree_name,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "start_time" => $request->start_time,
            "end_time" => $request->end_time,
            "language_id" => $request->language,
            "password" => Hash::make($request->password),
        ]);
        return redirect("view-internees");
    }

    public function index()
    {
        $internees = Internee::With("languages")->get();

        return view('Admin.Internee.view_internees')
            ->with("internees",$internees);
    }

    public function edit($id)
    {
        $editInternee = Internee::find($id);
        $languages = Language::all();
        return view('Admin.Internee.edit_internee')
        ->with("editInternee",$editInternee)->with('languages' , $languages);
    }

     public function update(Request $request, $id)
    {
        $updateInternee = Internee::find($id);
        $updateInternee->name = $request->name;
        $updateInternee->email = $request->email;
        $updateInternee->cnic_no = $request->cnic_no;
        $updateInternee->mobile_no = $request->mobile_no;
        $updateInternee->degree_name = $request->degree_name;
        $updateInternee->start_date = $request->start_date;
        $updateInternee->end_date = $request->end_date;
        $updateInternee->start_time = $request->start_time;
        $updateInternee->end_time = $request->end_time;
        $updateInternee->language_id = $request->language;

        $updateInternee->update();

        return redirect("view-internees");
    }

    public function destroy($id)
    {
        $deleteInternee = Internee::find($id)->delete();

        return redirect()->back();
    }
}
