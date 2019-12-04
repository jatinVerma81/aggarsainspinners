<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\reports;

class ReportsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Reports::all();

        return view('reports.index', compact('reports'));
    }

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
            return view('annualreport', compact('reports'));
        }

        if($reportname == 'Shareholding') {
            return view('annualreport', compact('reports'));
        }

        if($reportname == 'Policies') {
            return view('annualreport', compact('reports'));
        }

        if($reportname == 'bod') {
            return view('annualreport', compact('reports'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'path'=>'required',
            'type'=>'required'
        ]);

        $path = $request->file('path')->store('reports');
        // $file = $request->file('path') ;
        // $path = $file->getClientOriginalName() ;

        $report = new Reports([
            'title' => $request->get('title'),
            'path' => $path,
            'type' => $request->get('type')
        ]);

        $report->save();
        return redirect('/reports')->with('success', $path);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Reports::find($id);
        return view('reports.edit', compact('report'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'type'=>'required',
            'path'=>'required'
        ]);

        $report = Reports::find($id);
        $report->title =  $request->get('title');
        $report->type = $request->get('type');
        $report->path = $request->get('path');
        $report->save();

        return redirect('/reports')->with('success', 'Report updated!');
    }

    /**
     * Remove the specified resource from storage.
     *     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Reports::find($id);
        $report->delete();
        // Storage::delete($id[1]);
        return redirect('/reports')->with('success', 'Report deleted!');
    }
}
