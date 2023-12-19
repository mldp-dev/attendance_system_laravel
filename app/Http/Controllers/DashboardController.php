<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;



class DashboardController extends Controller
{
    // create method for controller
    public function show(): View
    {
        //gets current logged in user object   
        $user = Auth::user();

        //get all attendances
        $attendances = DB::table('attendances')->get();
        //get all attendances
        $accomplishments = DB::table('accomplishments')->get();

        $currentPunchIn =  DB::table('attendances')->whereDate('created_at', '=', date('Y-m-d'));


        //pass data to view_name.blade.php with data using '->with('key',$value)'
        return view('dashboard')->with('user',$user)->with('attendances',$attendances)->with('accomplishments',$accomplishments)->with('currentPunchIn',$currentPunchIn);
    }

        // create method for controller
        public function punchIn()
        {
            DB::table('attendances')->insert([
                'time_in' => date('Y-m-d H:i:s'),
                'time_out' => null,
                'date' => date('Y-m-d H:i:s'),
                'location' => 'Home',
                'created_at' => date('Y-m-d H:i:s') 
            ]);

            return back()->withInput();
        }
}
