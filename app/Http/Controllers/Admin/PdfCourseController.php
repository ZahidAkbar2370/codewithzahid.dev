<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PdfCourse;

class PdfCourseController extends Controller
{
    public function create()
    {
        $languages = Language::all();

        return view('Admin.Lecture.add_lecture')
        ->with("languages",$languages);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'video_link' => ['required', 'string','max:255'],
            'thumbnail' => ['required', 'file'],
        ]);

        $user_id = Auth::user()->id ?? "1";

        $thumbnail = 'lecture_thumbnail.png';

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('theme/img/LectureThumbnail/', $filename);
            $thumbnail = $filename;
        }

        $insertLecture = PdfCourse::create([
            "user_id" => $user_id,
            "language_id" => $request->language,
            "title" => $request->title,
            "video_link" => $request->video_link,
            "document_url" => $request->document_url,
            "thumbnail" => $thumbnail,
        ]);

        return redirect("view-lectures");
    }

    public function index()
    {
        $lectures = PdfCourse::with(["user", "language"])->get();

        return view('Admin.Lecture.view_lectures')
        ->with("lectures",$lectures);
    }

    public function edit($id)
    {
        $editLecture = PdfCourse::find($id);
        $languages = Language::all();

        return view('Admin.Lecture.edit_lecture')
        ->with("editLecture",$editLecture)
        ->with("languages",$languages);
    }

    public function update(Request $request, $id)
    {
        $updateLecture = PdfCourse::find($id);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('theme/img/LectureThumbnail/', $filename);
            $updateLecture->thumbnail = $filename;
        }

        $updateLecture->title = $request->title;
        $updateLecture->language_id = $request->language;
        $updateLecture->video_link = $request->video_link;
        $updateLecture->document_id = $request->document_url;
        $updateLecture->update();

        return redirect("view-lectures");
    }

    public function destroy($id)
    {
        $deleteLecture = PdfCourse::find($id)->delete();

        return redirect("view-lectures");
    }

    public function active($id)
    {
        $updateLecture = PdfCourse::find($id);

        $updateLecture->publication_status = "1";

        $updateLecture->update();

        return redirect("view-lectures");
    }

    public function inactive($id)
    {
        $updateLecture = PdfCourse::find($id);

        $updateLecture->publication_status = "0";

        $updateLecture->update();

        return redirect("view-lectures");
    }
}
