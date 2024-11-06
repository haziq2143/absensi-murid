<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Attendance_Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::join('classes', 'attendances.class_id', '=', 'classes.id')
            ->join('users', 'users.class_id', '=', 'classes.id')
            ->where('users.id', Auth::id())
            ->select('attendances.*')
            ->latest()
            ->get();
        $attendanceIds = $attendances->pluck('id');
        $record = Attendance_Record::whereIn('attendance_id', $attendanceIds)
            ->get();
        return view('record.index', compact('attendances', 'record'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('record.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $attendance = Attendance::where('attendance_code', $request->attendance_code)->first();
        if ($attendance) {
            $validated = [
                'student_id' => Auth::user()->id,
                'attendance_id' => $attendance->id,
                'description' => 'Hadir'
            ];

            Attendance_Record::create($validated);

            return redirect('/home');
        } else {
            return abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
