<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $table = "lectures";

    protected $fillable = [
        "user_id",
        "language_id",
        "title",
        "video_link",
        "document_id",
        "thumbnail",
        "publication_status",
    ];


    public function user()
    {
        return $this->belongsTo("App\Models\User", "user_id" , "id");
    }

    public function language()
    {
        return $this->belongsTo("App\Models\Language", "language_id" , "id");
    }
}
