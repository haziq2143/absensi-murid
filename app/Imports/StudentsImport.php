<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'name' => $row[1],
            'email' => $row[2],
            'role' => 'student',
            'password' => '123456789',
            'class_id' => Kelas::where('class', 'LIKE', $row[3])->pluck('id')->first()
        ]);
    }
}
