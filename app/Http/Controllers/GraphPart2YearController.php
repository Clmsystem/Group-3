<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;



class GraphPart2YearController extends Controller
{

    public function index()
    {
        // $indicator_id = $_GET['id'];
        $year = $_GET['years'];
        $data = DB::table('indicator_year')

            ->join('year', 'indicator_year.year_id', '=', 'year.year_id')
            ->join('indicator', 'indicator_year.indicator_id', '=', 'indicator.indicator_id')
            ->where('indicator_year.year_id', '=', $year)
            ->select('year.year', 'indicator.full_score', 'indicator_year.score', 'indicator.indicator_name')

            // ->where('indicator_year.indicator_id', '=', $indicator_id)
            ->get();

        $temp = [];
        $score = [];
        $full_score = [];

        for ($i = 0; $i < count($data); $i++) {
            $temp[$i] = $data[$i]->indicator_name;
            $score[$i] = $data[$i]->score;
            $full_score[$i] = $data[$i]->full_score;
        }

        // dd($temp,  $score,  $full_score);
        // $year = $data[0]->year;

        // $m0 = $data[0]->full_score;

        // $s0 = $data[0]->score;

        // for ($i = 0; $i < count($data); $i++) {
        //     # code...$name =
        //     $data[$i]->indicator_name;
        //     $year[$i] = $data[$i]->year;
        //     $m[$i] = $data[$i]->full_score;
        //     $s[$i] = $data[$i]->score;
        //     dd($data[$i]);
        // }


        return view('graphPart2Year', compact('temp', 'year', 'temp', 'score', 'full_score'));
    }
};