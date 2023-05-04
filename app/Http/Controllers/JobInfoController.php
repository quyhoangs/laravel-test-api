<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobInfoController extends Controller
{
    public function index()
    {
        $jobInfo = Job::tableId('44271');

        dd($jobInfo);

    }
}
