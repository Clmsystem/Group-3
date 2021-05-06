<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ContentPart2YearController extends Controller
{
    public function index()
    {
        $month = (int)date("m");
        $year = (int)date("Y") + 543;

        // dd($indicator_month);
        $indicator_year = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->join('year', 'indicator_year.year_id', '=', 'year.year_id')
            ->where('indicator_year.year_id', '=', $year)

            ->get();
        // dd($indicator_year,$year);

        // $year = 0;

        // dd($indicator_month, $indicator_year, $year, $month);
        return view('contentPart2Year', compact('indicator_year', 'year'));
    }

    public function update(Request $request)
    {
        DB::table('indicator_year')
            ->where('indicator_year_id', $request->key)
            ->update([
                'result' => $request->result,
                'percent' => $request->percent
            ]);

        // DB::table('indicator_month')
        //     ->where('indicator_month_id', $request->key)
        //     ->update(['percent' => $request->percent]);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }



    public function search_year(Request $request)
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
                ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
                ->join('year', 'indicator_year.year_id', '=', 'year.year_id')
                ->where('indicator_year.year_id', '=', $year)
                ->get();
        // dd($indicator_year);


        return view('contentPart2Year', compact('indicator_year', 'year'));
    }
}