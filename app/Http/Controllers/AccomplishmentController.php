<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomplishment;

class AccomplishmentController extends Controller
{
    public function index(){
        $accomplishments = Accomplishment::all();

        return $accomplishments;
    }   

    public function show ($id){
        $accomplishment = Accomplishment::find($id);

        return $accomplishment;
    }

    public function create(){

    }

    public function store(Request $request){
        $validated = $request->validate([
            'accomplishment' => 'required'
        ]);

        $accomplishment = Accomplishment::create($validated);

        return $accomplishment;

    }

    public function edit($id){
        $accomplishment = Accomplishment::find($id);

        return $accomplishment;
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'accomplishment' => 'required'
        ]);

        $accomplishment = Accomplishment::where('id', $id)->update($validated);

        return $accomplishment;
    }

    public function destroy($id){
        $accomplishment = Accomplishment::where('id', $id)->delete();

        return $accomplishment;
    }
}
