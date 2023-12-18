<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomplishment;

class AccomplishmentController extends Controller
{
    public function index(){
        $accomplishments = Accomplishment::get();

        return $accomplishments;
    }   

    public function addAccomplishment(){
        return view('add-accomplishment');
    }

    public function saveAccomplishment(Request $request){
        $request->validate([
            'accomplishment' => 'required'
        ]);
        
        $new_task = $request->new_task;

        $newAccomplishment = new Accomplishment();
        $newAccomplishment->new_task = $new_task;
        $newAccomplishment->save();

        return redirect()->back()->with('success','Accomplishment Added Successfully');
    }

    public function editStudent($id){
        $data = Accomplishment::where('id', '=', $id)->first();
        return view('edit-accomplishment', compact('data'));
    }

    public function updateAccomplishment(Request $request){
        $request->validate([
            'accomplishment' => 'required'
        ]);

        $id = $request->id;
        $accomplishment = $request->accomplishment;

        Accomplishment::where('id','=',$id)->update([
            'accomplishment' => $accomplishment
            
        ]);

        return redirect()->back()->with('success','Student Updated Successfully');



    
    // public function show ($id){
    //     $accomplishment = Accomplishment::find($id);

    //     return $accomplishment;
    // }

    // public function create(){

    // }

    // public function store(Request $request){
    //     $validated = $request->validate([
    //         'accomplishment' => 'required'
    //     ]);

    //     $accomplishment = Accomplishment::create($validated);

    //     return $accomplishment;

    // }

    // public function edit($id){
    //     $accomplishment = Accomplishment::find($id);

    //     return $accomplishment;
    // }

    // public function update(Request $request, $id){
    //     $validated = $request->validate([
    //         'accomplishment' => 'required'
    //     ]);

    //     $accomplishment = Accomplishment::where('id', $id)->update($validated);

    //     return $accomplishment;
    // }

    // public function destroy($id){
    //     $accomplishment = Accomplishment::where('id', $id)->delete();

    //     return $accomplishment;
    // }
}
}