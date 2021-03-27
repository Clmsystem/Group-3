<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;



class CreatePart2Controller extends Controller
{
    public function index()
    {
        $shindicator_year = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            // ->join('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->select('employee.*', 'assign.*', 'indicator.*')
            ->get();

        $shindicator_month = DB::table('employee')
            ->join('assign', 'employee.id_employee', '=', 'assign.Employee_id_employee')
            ->join('indicator', 'assign.indicator_id', '=', 'indicator.indicator_id')
            // ->join('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->select('employee.*', 'assign.*', 'indicator.*')
            ->get();

        //dd($shindicator_year);
        //dd($showindicator_month);
        // return view('createPart2',compact('shindicator_year','shindicator_month'));

        $getEmployee = DB::table('employee')
            ->select('employee.*')
            ->where('id_department', '!=', 1)
            ->where('id_department', '!=', 2)
            ->get();
        return view('createPart2', compact('shindicator_year', 'shindicator_month', 'getEmployee'));
    }
    public function insert_indicator(Request $request)
    {

        $checktype =  $request->input('type');

        $data = array();
        $data["indicator_name"] = $request->indtcator_name;
        $data["year_id"] = 1;
        $data["year1_year_id"] = 0;
        $data["indicator_type"] = $request->type;
        $data["full_score"] = $request->fullscore;
        DB::table('indicator')->insert($data);
        $max = DB::table('indicator')->max('indicator_id');

        $asign = array();
        // $data["assign_id"] = ;
        $asign["indicator_id"] = $max;
        $asign["Employee_id_employee"] = $request->input('employ');;
        DB::table('assign')->insert($asign);

        if ($checktype == 1) {
            $data = array();
            $max = DB::table('indicator')->max('indicator_id');
            for ($i = 1; $i <= 12; $i++) {
                $data["result"] = 0;
                // $data["fullscore"] = $request->fullscore;
                $data["score"] = 0;
                $data["percent"] = 0;
                $data["indicator_id"] = $max;
                $data["year_year_id"] = 0;
                $data["month"] = $i;
                $data["status"] = 0;
                // $data["id_employee"] = $request->input('employ');
                DB::table('indicator_month')->insert($data);
            }
        } else if ($checktype == 0) {
            $data = array();
            $max = DB::table('indicator')->max('indicator_id');
            $data["indicator_id"] = $max;
            $data["year_id"] = 1;
            $data["result"] = 0;
            // $data["fullscore"] = $request->fullscore;
            $data["score"] = 0;
            $data["percent"] = 0;
            $data["status"] = 0;
            // $data["id_employee"] = $request->input('employ');

            DB::table('indicator_year')->insert($data);
        }
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');

    }
    public function updateCreate(Request $request){
        
        // var_dump($request);
        // die();

        DB::table('indicator')
            ->where('indicator_id', $request->key)
            ->update(['indicator_name' => $request->indicator_name]);

        DB::table('indicator')
            ->where('indicator_id', $request->key)
            ->update(['indicator_type' => $request->indicator_type]);

        DB::table('indicator_month')
            ->where('indicator_month_id', $request->key)
            ->update(['fullscore' => $request->fullscore]);

        DB::table('indicator_month')
            ->where('indicator_month_id', $request->key)
            ->update(['fullscore' => $request->fullscore]);

        DB::table('assign')
            ->where('assign_id', $request->key)
            ->update(['Employee_id_employee' => $request->Employee_id_employee]);
        
            
        return redirect()->back()->with('sucess','บันทึกข้อมูลเรียบร้อย');   
    }
}