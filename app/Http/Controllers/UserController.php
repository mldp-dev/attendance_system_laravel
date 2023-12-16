<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function store(){

    }
    //
    public function create(){
        //gets current logged in user object   
        $user = Auth::user();

        //pass data to view_name.blade.php with data using '->with('key',$value)'
        return view('users.create')->with('user',$user);

    }

    public function edit($id){

        //gets current logged in user object   
        $user = Auth::user();
        $user_data =  DB::table('users')->where('id', $id)->first();
        //pass data to view_name.blade.php with data using '->with('key',$value)'
        return view('users.edit')->with('user',$user)->with('user_data',$user_data);

    }

    public function show(){
        //gets current logged in user object   
        $user = Auth::user();

        //get all attendances
        $users = DB::table('users')->get();

        //pass data to view_name.blade.php with data using '->with('key',$value)'
        return view('users.index')->with('users',$users)->with('user',$user);

    }

    public function update(){

    }

    public function delete(){

    }
}
