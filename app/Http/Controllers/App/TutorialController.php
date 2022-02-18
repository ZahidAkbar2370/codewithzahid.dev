<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentation;
use App\Models\Language;
use App\Models\Test;

class TutorialController extends Controller
{
    public function byLanguage($language_id)
    {
      $documentations = Documentation::where("language_id",$language_id)->with("language")->get();

       return view('App.Tutorial.tutorials')
       ->with("documentations",$documentations);
    }

    public function byTutorial($id)
    {
      $documentation = Documentation::with("language")->find($id);
      $languages = Language::all();
      $test = Test::find($id);

       return view('App.Tutorial.tutorial_detail')
       ->with("documentation",$documentation)
       ->with("test",$test)
       ->with("languages",$languages);
    }
}
