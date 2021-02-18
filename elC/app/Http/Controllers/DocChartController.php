<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rdv;
Use DB;
use Carbon\Carbon;
class DocChartController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('rdvs')
           ->select(
            DB::raw('medecin as medecin'),
            DB::raw('count(*) as number')
                   )->groupBy('medecin')->whereMonth('date_debut','02')->get();


           
        $array[] = ['Medecin', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->medecin, $value->number];
        }
        return view('statics.google-pie-chart')->with('medecin', json_encode($array));
    }

    /*
        $data = DB::table('rdvs')
           ->select(\DB::raw("COUNT(*) as number"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
    ->where('created_at', '>', Carbon::today()->subDay(6))
    ->groupBy('day_name','day')
    ->orderBy('day')
    ->get();;
        $array[] = ['day_name', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->day_name, $value->number];
        }
        return view('google-pie-chart')->with('day_name', json_encode($array));

    }*/
}
