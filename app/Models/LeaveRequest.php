<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $table = "leave_requests";

    protected $fillable = [
        "user_id",
        "message",
        "leave_date",
        "status",
    ];

    public function users()
    {
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }
}
