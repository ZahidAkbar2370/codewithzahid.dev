<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Language;
use App\Models\InterView;

class HomeController extends Controller
{
    public function homePage()
    {
        $lectures = Lecture::with(["user", "language"])->orderBy('id', 'DESC')->paginate(4);
        $interviews = InterView::orderBy('id', 'DESC')->paginate(3);

        return view('App.Page.home')
        ->with("lectures",$lectures)
        ->with("interviews",$interviews);
    }

}
