<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PdfCourse;

class PdfCourseController extends Controller
{
    
    public function index()
    {
        $pdfCourses = PdfCourse::with("language")->orderBy('id', 'DESC')->paginate(10);

        return view('App.Page.pdf_courses')
        ->with("pdfCourses",$pdfCourses);
    }

}
