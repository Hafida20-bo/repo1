<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perscription; 
use DB;
use Carbon\Carbon;
class PerscriptionChartController extends Controller
{
    //
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $year = ['january','february','marsh','april','may','juin','july','august','september','october','november','december'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = Perscription::where(\DB::raw("DATE_FORMAT(created_at, '%M')"),$value)->count();
        }

    	return view('statics.Pbar-chart')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }
}
