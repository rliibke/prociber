<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;
class DashboardController extends Controller
{
      public function index()
    {
        $visitors = Visitor::select('date', DB::raw('count(*) as total'))->where('date', '>', today()->subMonth())->groupBy('date')->get();
        $chart_data = array();
        foreach ($visitors as $data)
        {
            $chart_dataarray[]= array('data'=> $data->date->format('d/m/Y'), 'total'=> $data->total);
        }

        return view('dashboard', array('dados' => $chart_dataarray));
    }
}
