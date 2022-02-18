<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $table = "interviews";

    protected $fillable = [
        "user_id",
        "guest_name",
        "pation",
        "video_url",
        "short_introduction",
        "publication_status",
    ];

    public function user()
    {
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }
}
