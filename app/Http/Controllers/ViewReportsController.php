<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\reports;

class ViewReportsController extends Controller
{
    
   
    /**
     * Display a listing of the resource.
     *@param  string  $reportname
     * @return \Illuminate\Http\Response
     */
    public function getReport($reportname)
    {
        $reports = Reports::where('type', $reportname)->get();

        if($reportname == 'Annual') {
            return view('annualreport', compact('reports'));
        }

        if($reportname == 'Quarterly') {
            return view('quarterly', compact('reports'));
        }

        if($reportname == 'Shareholding') {
            return view('shareholding', compact('reports'));
        }

        if($reportname == 'Policies') {
            return view('policies', compact('reports'));
        }

        if($reportname == 'bod') {
            return view('bod', compact('reports'));
        }

    }
}
