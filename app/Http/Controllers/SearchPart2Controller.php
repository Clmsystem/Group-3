<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;



class SearchPart2Controller extends Controller
{
    public function index(){

        $year = (int)date('Y')+543;
        $month = (int)date('m');
       
        $showindicator = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
        ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
        ->leftJoin('year','indicator_year.year_id','=','year.year_id')
        // ->where('year.year', '=', $year)
        ->where('indicator.year_id', '=', $year )
        ->orwhere('indicator_month.month', '=', $month )
        ->get();

        $showyear = DB::table('indicator')
        ->where('indicator.year_id', '=', $year )
        ->get();

        $year=0;
        $month=0;
       
        return view('searchPart2',compact('showindicator','month','year'));
      
               
    } 
    public function search(Request $request)
    {
        $year = (int)date('Y')+543;
        $month= $request->month;
        
        if($request->year==0 && $request->month==0){

            $showindicator = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->leftJoin('year','indicator_year.year_id','=','year.year_id')
           // ->where('year.year', '=', $year)
            ->get();
          
        }
        else if($request->year==0){
            $showindicator = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->leftJoin('year','indicator_year.year_id','=','year.year_id')
            ->orwhere('indicator_month.month', '=', $month )
            //->where('year.year', '=', $year)
            ->get();
        
        }else if($request->month==0){
            $showindicator = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->leftJoin('year','indicator_year.year_id','=','year.year_id')
            //->where('year.year', '=', $year)
            ->orwhere('indicator.year_id', '=', $year )
            ->get();
       
           // query ปี
        }else

        $showindicator = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
        ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
        ->leftJoin('year','indicator_year.year_id','=','year.year_id')
        ->where('indicator.year_id', '=', $year )
        ->orwhere('indicator_month.month', '=', $month )
        ->get();

        
        $showyear = DB::table('indicator')
        ->where('indicator.year_id', '=', $year )
        ->get();
        
        return view('searchPart2',compact('showindicator','month','year','showyear'));

    }
}




