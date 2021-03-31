<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ContentPart2Controller extends Controller
{
    public function index()
    {
        $month = (int)date("m");
        $year = (int)date("Y") + 543;
        $indicator_month = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            // ->where('assign.Employee_id_employee', '=', $assign)
            ->where('indicator_month.month', '=', $month)
            ->get();
        // dd($indicator_month);
        $indicator_year = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->join('year', 'indicator_year.year_id', '=', 'year.year_id')
            // ->where('assign.Employee_id_employee', '=', $assign)
            ->get();
        // dd($indicator_year);
        $showyear = DB::table('indicator_year')
            ->where('indicator_year.year_id', '=', $year)
            ->get();

        // dd($indicator_month, $indicator_year, $year, $month);
        return view('promote.contentPart2', compact('indicator_year', 'indicator_month', 'month'));
    }

    public function update(Request $request)
    {
        DB::table('indicator_month')
            ->where('indicator_month_id', $request->key)
            ->update(['result' => $request->result]);

        DB::table('indicator_month')
            ->where('indicator_month_id', $request->key)
            ->update(['percent' => $request->percent]);

        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
    public function update2(Request $request)
    {
        DB::table('indicator_year')
            ->where('indicator_year_id', $request->key)
            ->update(['result' => $request->result]);

        DB::table('indicator_year')
            ->where('indicator_year_id', $request->key)
            ->update(['percent' => $request->percent]);

        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function search(Request $request)
    {
        $month = $request->month;
        $year = (int)date("Y") + 543;
        $indicator_month = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_month', 'indicator_month.month', '=', 'indicator_month.month')
            // ->where('assign.Employee_id_employee', '=', $assign)
            ->where('indicator_month.month', '=', $month)
            ->get();

        $indicator_year = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_year', 'indicator.year_id', '=', 'indicator_year.year_id')
            ->join('year', 'indicator_year.year_id', '=', 'year.year_id')
            // ->where('assign.Employee_id_employee', '=', $assign)
            ->where('indicator_year.year_id', '=', $year)
            ->get();

        // dd($indicator_month, $indicator_year, $year, $month);
        return view('promote.contentPart2', compact('indicator_year', 'indicator_month', 'month'));
    }
}
