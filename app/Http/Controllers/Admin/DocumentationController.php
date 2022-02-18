<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentation;
use App\Models\Language;

class DocumentationController extends Controller
{
    public function create()
    {
        $languages = Language::all();

        return view('Admin.Documentation.add_documentation')
        ->with("languages",$languages);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
        ]);

        $insertDocumentation = Documentation::create([
            "language_id" => $request->language,
            "title" => $request->title,
            "content" => $request->content,
            "video_url" => $request->video_link,
        ]);

        return redirect("view-documentations");
    }

    public function index()
    {
        $documentations = Documentation::with(["language"])->get();

        return view('Admin.Documentation.view_documentations')
        ->with("documentations",$documentations);
    }

    public function edit($id)
    {
        $editDocumentation = Documentation::with(["language"])->find($id);
        $languages = Language::all();

        return view('Admin.Lecture.edit_lecture')
        ->with("editDocumentation",$editDocumentation);
        // ->with("languages",$languages);
    }

    public function update(Request $request, $id)
    {
        $updateDocumentation = Documentation::find($id);

        $updateDocumentation->title = $request->title;
        $updateDocumentation->content = $request->content;
        $updateDocumentation->language_id = $request->language;
        $updateDocumentation->video_url = $request->video_url;
        $updateDocumentation->update();

        return redirect("view-documentations");
    }

    public function destroy($id)
    {
        $deleteDocumentation = Documentation::find($id)->delete();

        return redirect("view-documentations");
    }

    public function active($id)
    {
        $updateDocumentation = Documentation::find($id);

        $updateDocumentation->publication_status = "1";

        $updateDocumentation->update();

        return redirect("view-documentations");
    }

    public function inactive($id)
    {
        $updateDocumentation = Documentation::find($id);

        $updateDocumentation->publication_status = "0";

        $updateDocumentation->update();

        return redirect("view-documentations");
    }
}
