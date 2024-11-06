<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance_Record extends Model
{
    protected $table = 'attendance_records';
    protected $fillable = [
        'student_id',
        'attendance_id',
        'description'
    ];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
