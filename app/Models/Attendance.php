<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'subject_id',
        'class_id',
        'attendance_date',
        'attendance_code'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function class()
    {
        return $this->belongsTo(Kelas::class, 'class_id');
    }

    public function attendance_record()
    {
        return $this->hasMany(Attendance_Record::class);
    }
}
