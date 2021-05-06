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
        // $yeared = (int)date('Y')+543;
       
        $showindicator = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
        ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
        ->join('year','indicator.year_id','=','year.year_id')
        ->where('year.year', '=', $year)
        //->where('indicator.year_id', '=', $year )
       // ->where('indicator_month.year_id', '=', $year )
        ->where('indicator_month.month', '=', $month )
        ->get();

        $showyear = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
        ->join('year','indicator_year.year_id','=','year.year_id')
        ->where('year.year', '=', $year)
        // ->where('indicator_year.year_id', '=', $yeared )
        ->get();


        $year=3;
        // $month=10;
       //dd( $showindicator,$year, $month,$showyear );
        return view('searchPart2',compact('showindicator','month','year','showyear'));
      
               
    } 
    public function search(Request $request)
    {
        $year = (int)date('Y')+543;
        $month = (int)date('m');
        // $yeared = (int)date('Y')+543;

        $month= $request->month;
        $year= $request->year;
        // $yeared= $request->year;
        
      // dd($request->year, $request->month);
        
          $showindicator = DB::table('employee')
          ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
          ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
          ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
          ->leftJoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
          ->join('year','indicator.year_id','=','year.year_id')
          //->where('year.year', '=', $year)
          ->where('indicator_month.year_id', '=', $year )
          ->where('indicator_month.month', '=', $month )
          ->get();

          $showyear = DB::table('employee')
        ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
        ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
        ->leftJoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
        ->join('year','indicator_year.year_id','=','year.year_id')
        //->where('year.year', '=', $year)
        ->where('indicator_year.year_id', '=', $year)
        ->get();
    
        
        return view('searchPart2',compact('showindicator','month','year','showyear'));

    }
}




