<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index(){
        $attendances = Attendance::all();

        return $attendances;
    }   

    public function show ($id){
        $attendance = Attendance::find($id);

        return $attendance;
    }

    public function create(){

    }

    public function store(Request $request){
        $validated = $request->validate([
            'attendance' => 'required'
        ]);

        $attendance = Attendance::create($validated);

        return $attendance;

    }

    public function edit($id){
        $attendance = Attendance::find($id);

        return $attendance;
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'attendance' => 'required'
        ]);

        $attendance = Attendance::where('id', $id)->update($validated);

        return $attendance;

    }

    public function destroy($id){
        $attendance = Attendance::where('id', $id)->delete();

        return $attendance;
    }
}
