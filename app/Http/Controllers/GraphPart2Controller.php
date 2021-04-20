<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Charts;




class GraphPart2Controller extends Controller
{

    public function index()
    {
        // $list_item = DB::table('list_item')->get();

        $month = (int)date("m");
        $year = (int)date("Y") + 543;
        $indicator_month = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->join('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->where('indicator_month.month', '=', $month)
            ->get();

        return view('graphPart2', compact('indicator_month', 'month'));
    }

   
};