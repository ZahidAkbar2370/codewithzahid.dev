<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InterView;
use Auth;

class InterviewController extends Controller
{
    public function create()
    {
        return view('Admin.Interview.add_interview');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'guest_name' => ['required', 'string', 'max:255'],
            'pation' => ['required', 'string', 'max:255'],
            'video_url' => ['required', 'string','max:255'],
            'short_introduction' => ['required', 'string'],
        ]);

        $user_id = Auth::user()->id ?? "1";

        $insertInterview = Interview::create([
            "user_id" => $user_id,
            "guest_name" => $request->guest_name,
            "pation" => $request->pation,
            "video_url" => $request->video_url,
            "short_introduction" => $request->short_introduction,
        ]);

        return redirect("view-interviews");
    }

    public function index()
    {
        $interviews = Interview::with("user")->get();

        return view('Admin.Interview.view_interviews')
        ->with("interviews",$interviews);
    }

    public function edit($id)
    {
        $editInterview = Interview::find($id);

        return view('Admin.Interview.edit_interview')
        ->with("editInterview",$editInterview);
    }

    public function update(Request $request, $id)
    {
        $updateInterview = Interview::find($id);

        $updateInterview->guest_name = $request->guest_name;
        $updateInterview->pation = $request->pation;
        $updateInterview->video_url = $request->video_url;
        $updateInterview->short_introduction = $request->short_introduction;
        $updateInterview->update();

        return redirect("view-interviews");
    }

    public function destroy($id)
    {
        $deleteInterview = Interview::find($id)->delete();

        return redirect("view-interviews");
    }

    public function active($id)
    {
        $updateInterview = Interview::find($id);

        $updateInterview->publication_status = "1";

        $updateInterview->update();

        return redirect("view-interviews");
    }

    public function inactive($id)
    {
        $updateInterview = Interview::find($id);

        $updateInterview->publication_status = "0";

        $updateInterview->update();

        return redirect("view-interviews");
    }
}
