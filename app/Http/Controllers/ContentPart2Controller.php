<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ContentPart2Controller extends Controller
{
        public function index()
           {
            $indicator = DB::table('indicator')
            ->rightjoin('indicator_year', 'indicator.indicator_id', '=', 'indicator_year.indicator_id')
            ->get();
            $indicator2 = DB::table('indicator')
            ->rightjoin('indicator_month', 'indicator.indicator_id', '=', 'indicator_month.indicator_id')
            ->get();

            return view('promote.contentPart2',compact('indicator','indicator2'));
           }

           public function update(Request $request)
           {
               DB::table('indicator_month')
               ->where('indicator_month_id', $request->key)
               ->update(['result' => $request->result]);
                
               DB::table('indicator_month')
               ->where('indicator_month_id', $request->key)
               ->update(['percent' => $request->percent]);

               return redirect()->back()->with('sucess','บันทึกข้อมูลเรียบร้อย');            
           }
           public function update2(Request $request)
           {
               DB::table('indicator_year')
               ->where('indicator_year_id', $request->key)
               ->update(['result' => $request->result]);
                
               DB::table('indicator_year')
               ->where('indicator_year_id', $request->key)
               ->update(['percent' => $request->percent]);

               return redirect()->back()->with('sucess','บันทึกข้อมูลเรียบร้อย');            
           }
    }