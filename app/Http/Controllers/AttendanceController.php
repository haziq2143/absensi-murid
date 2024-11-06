<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Subject;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::query()->get();
        return view('attendance.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Kelas::query()->get();
        $subjects = Subject::where('teacher_id', Auth::user()->id)->get();
        return view('attendance.create', compact('classes', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject_id' => 'required',
            'class_id' => 'required',
            'attendance_date' => 'required'
        ]);

        $validated['attendance_code'] = str()->random(6);

        Attendance::create($validated);

        return redirect('/attendances');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $attendance = Attendance::where('id', $id)->first();
        $qr = QrCode::generate($attendance->attendance_code);
        return view('attendance.show', compact('attendance', 'qr'));
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
