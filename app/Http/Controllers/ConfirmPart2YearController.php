<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ConfirmPart2YearController extends Controller
{
    public function index()
    {
        $month = (int)date("m");
        $year = (int)date("Y") + 543;
        
        
        // dd($indicator_month);
        $indicator_year = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
        ->join('year','indicator_year.year_id','=','year.year_id')
        ->where('year.year', '=', $year)
        ->get();

        $year=3;
        // dd( $indicator_year, $year);
         return view('confirmPart2Year', compact('indicator_year','year'));


        $year = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->select('employee.*', 'assign.*', 'indicator.*', 'indicator_year.*')
            ->get();

        return view('confirmPart2Year', compact('year'));
    }
    public function confirm_year(Request $request)
    {
        $year = $request->input('year');
        $year = $request->year;

        // $year = (int)date("Y") + 543;
        // dd($request->year);

        if ($request->year == 0) {
            $indicator_year = DB::table('employee')
                ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
                ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
                ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
                ->get();
        } else
            $indicator_year = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->join('year','indicator_year.year_id','=','year.year_id')
            //->where('year.year', '=', $year)
            ->where('indicator_year.year_id', '=', $year)
            ->get();
        // dd($indicator_year);
        return view('confirmPart2Year', compact('indicator_year', 'year'));
    }
}