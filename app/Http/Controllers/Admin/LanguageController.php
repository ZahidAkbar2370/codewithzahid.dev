<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use Auth;

class LanguageController extends Controller
{
    public function create()
    {
        return view('Admin.Language.add_language');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'language_name' => ['required', 'string', 'max:255'],
        ]);

        $user_id = Auth::user()->id ?? 1;

        $insertLanguage = Language::create([
            "user_id" => $user_id,
            "language_name" => $request->language_name,
        ]);

        return redirect("view-languages");
    }

    public function index()
    {
        $languages = Language::all();

        return view('Admin.Language.view_languages')
        ->with("languages",$languages);
    }

    public function edit($id)
    {
        $editLanguage = Language::find($id);

        return view('Admin.Language.edit_language')
        ->with("editLanguage",$editLanguage);
    }

    public function update(Request $request, $id)
    {
        $updateLanguage = Language::find($id);

        $updateLanguage->language_name = $request->language_name;
        $updateLanguage->update();

        return redirect("view-languages");
    }

    public function destroy($id)
    {
        $deleteLanguage = Language::find($id)->delete();

        return redirect("view-languages");
    }


}
