<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;



class GraphPart2Controller extends Controller
{

    public function index()
    {
        $list_item = DB::table('list_item')->get();
        return view('graphPart2', compact('list_item'));
    }

   
};