<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    use HasFactory;

    protected $table = "documentations";

    protected $fillable = ["language_id", "title", "video_url", "content" ,"publication_status"];

    public function language()
    {
        return $this->belongsTo("App\Models\Language", "language_id", "id");
    }
}
