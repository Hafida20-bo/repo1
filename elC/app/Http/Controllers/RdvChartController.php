<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rdv; 
use App\Models\Perscription; 
use DB;
use Carbon\Carbon;
class RdvChartController extends Controller
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
            $user[] = Rdv::where(\DB::raw("DATE_FORMAT(date_debut, '%M')"),$value)->count();
        }
         $user1 = [];
        foreach ($year as $key => $value) {
            $user1[] = Perscription::where(\DB::raw("DATE_FORMAT(date, '%M')"),$value)->count();
        }
        
        $data = DB::table('rdvs')
           ->select(
            DB::raw('medecin as medecin'),
            DB::raw('count(*) as number')
                   )->groupBy('medecin')->whereMonth('date_debut','01')->get();


           
        $array[] = ['Medecin', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->medecin, $value->number];
        }






    	return view('statics.index')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK))->with('user1',json_encode($user1,JSON_NUMERIC_CHECK))->with('medecin', json_encode($array));
    }
}
