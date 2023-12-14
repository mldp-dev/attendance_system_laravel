<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    // create method for controller
    public function show(): View
    {
        //gets current logged in user object   
        $user = Auth::user();

        //get all attendances
        $attendances = DB::table('attendances')->get();
        $accomplishments = DB::table('accomplishments')->get();


        //pass data to view_name.blade.php with data using '->with('key',$value)'
        return view('dashboard')->with('user',$user)->with('attendances',$attendances)->with('accomplishments',$accomplishments);
    }
}
