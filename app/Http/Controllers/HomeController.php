<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Attendance_Record;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance_Record::where('student_id', Auth::user()->id)->get();
        return view('home.home', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {

        $users = User::join('attendances', 'users.class_id', '=', 'attendances.class_id')
            ->where('attendances.id', $id)
            ->select('users.*')
            ->get();

        return view('home.create', compact('users', 'id'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $validated = $request->validate([
            'students' => 'required',
            'descriptions' => 'required',
        ]);

        $records = [];
        foreach ($request->students as $index => $student_id) {
            $records[] = [
                'student_id' => $student_id,
                'description' => $request->descriptions[$index],
                'attendance_id' => $id
            ];
        }
        return redirect('/attendances');
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
