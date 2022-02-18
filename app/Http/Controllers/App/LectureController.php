<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Language;


class LectureController extends Controller
{
    
    public function index()
    {
        $lectures = Lecture::with("user", "language")->paginate(10);

        return view('App.Page.lectures')
        ->with("lectures",$lectures);
    }

    public function lectureDetail($id)
    {
        $lecture = Lecture::where("id",$id)->with("language","user")->get();

        return view('App.Page.lecture-detail')
        ->with("lecture",$lecture[0]);
    }
}
