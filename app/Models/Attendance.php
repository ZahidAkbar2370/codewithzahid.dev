<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = "attendances";

    protected $fillable = [
        "user_id",
        "status",
        "attendance_date",
    ];

    public function users()
    {
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }

}
