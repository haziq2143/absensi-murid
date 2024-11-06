<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'classes';


    protected $fillable = [
        'teacher_id',
        'class',
    ];


    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
    public function students()
    {
        return $this->hasMany(User::class);
    }
    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
