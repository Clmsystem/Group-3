<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;



class CreatePart2Controller extends Controller
{
    public function index(){
        $shindicator_year = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
        ->select('employee.*', 'assign.*', 'indicator.*', 'indicator_year.*')
        ->get();

        $shindicator_month = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->join('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
        ->select('employee.*', 'assign.*', 'indicator.*', 'indicator_month.*')
        ->get();
        //dd($shindicator_year);
         //dd($showindicator_month);
        return view('createPart2',compact('shindicator_year','shindicator_month'));

        
       
    }
}
