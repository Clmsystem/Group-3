<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ConfirmPart2Controller extends Controller
{
    public function index()
    {
        $month = (int)date("m");
        $year = (int)date("Y") + 543;
        $indicator_month = DB::table('employee')

        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
        ->join('year','indicator.year_id','=','year.year_id')
        //->where('year.year', '=', $year)
        ->where('indicator_month.month', '=', $month )
        ->get();
        // dd($indicator_month);
    


        // dd($indicator_month, $indicator_year, $year, $month);
        return view('confirmPart2', compact('indicator_month', 'month'));


        $year = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->select('employee.*', 'assign.*', 'indicator.*', 'indicator_year.*')
            ->get();

        $month = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->select('employee.*', 'assign.*', 'indicator.*', 'indicator_month.*')
            ->get();

        return view('confirmPart2', compact('year', 'month'));
    }
    public function confirm_month(Request $request)
    {
        $month = $request->input('month');
        $month = $request->month;

        // $year = (int)date("Y") + 543;
        //    dd($request->month);

        if ($request->month == 0) {
            $indicator_month = DB::table('employee')
                ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
                ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
                ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
                ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
                ->leftJoin('year', 'indicator_year.year_id', '=', 'year.year_id')
                ->get();
        } else
            $indicator_month = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->where('indicator_month.month', '=', $month )
            ->get();

       
        return view('confirmPart2', compact('indicator_month', 'month'));
    }
}