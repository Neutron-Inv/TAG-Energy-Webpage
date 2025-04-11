<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Job};
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function getJobs()
    {        
        // $users = DB::connection('foo')->select(...);
        $jobs = DB::connection('mysql2')->select("SELECT * FROM `job_adverts` WHERE `company_name` = 'TAG Energy Limited' AND approved=1 ORDER BY created_on DESC");
        return view('jobs')->with(compact('jobs'));	
    }
}
