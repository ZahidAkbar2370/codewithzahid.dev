<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfCourse extends Model
{
    use HasFactory;

    protected $table = "pdf_courses";

    protected $fillable = [
        "user_id",
        "language_id",
        "book_name",
        "author_name",
        "publisher_name",
        "edition",
        "book_url",
        "thumbnail",
        "publication_status",
    ];

    public function language()
    {
        return $this->belongsTo("App\Models\Language", "language_id", "id");
    }
}
