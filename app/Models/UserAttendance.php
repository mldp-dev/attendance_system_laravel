<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAttendance extends Model
{
    use HasFactory;
    protected $table = 'users_attendances';

    public function user()
    {
        $this->belongsTo(User::class, 'user_id')->withDefault;
    }
    public function attendance()
    {
        $this->belongsTo(Attendance::class, 'attendance_id')->withDefault;
    }
    
}
