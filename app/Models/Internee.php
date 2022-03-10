<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internee extends Model
{
    use HasFactory;

    protected $table = "internees";

    protected $fillable = [

        'language_id','name','email','cnic_no','mobile_no','degree_name','start_date','end_date','start_time','end_time','password'

    ];

    public function users()

    {
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }

    public function languages()
    
    {
        return $this->belongsTo("App\Models\Language", "language_id", "id");
    }
}
