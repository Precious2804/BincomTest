<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function welcome()
    {
        //select all the lgas in the table
        $all_lga = ['all_lga' => DB::table('lga')->get()];

        return view('welcome')->with($all_lga);
    }

    public function wards($lga_id)
    {
        //selects all the wards under an lga
        $wards = ['wards' => DB::table('ward')->where('lga_id', $lga_id)->get()];

        //fetch lga_details
        $lga_details = ['lga_details' => DB::table('lga')->where('lga_id', $lga_id)->first()];

        return view('wards')->with($wards)
            ->with($lga_details);
    }

    public function poll_units($ward_id)
    {
        //select all the polling units under a particular ward

        $poll_units = ['poll_units' => DB::table('polling_unit')->where('ward_id', $ward_id)->get()];

        //fetch ward details
        $ward_details = ['ward_details' => DB::table('ward')->where('ward_id', $ward_id)->first()];

        return view('poll_units')->with($poll_units)
            ->with($ward_details);
    }

    public function polling_results($uniqueid)
    {
        //display all the results of a particular polling unit
        $polling_results = ['polling_results' => DB::table('announced_pu_results')->where('polling_unit_uniqueid', $uniqueid)->get()];

        //fetch polling unit details
        $unit_details = ['unit_details' => DB::table('polling_unit')->where('uniqueid', $uniqueid)->first()];

        $all_party = ['all_party' => DB::table('party')->get()];

        return view('polling_results')->with($polling_results)->with($unit_details)->with($all_party);
    }

    public function lga_results()
    {
        $all_lga = ['all_lga' => DB::table('lga')->get()];
        return view('lga_results')->with($all_lga);
    }

    public function fetch_results(Request $request)
    {
        $lga_in_poll_unit = DB::table('polling_unit')->select()->where('lga_id', $request->lga_id)->get();
        return $lga_in_poll_unit;

        foreach ($lga_in_poll_unit as $item) {
            // return $item;
            // $get_results = DB::table('announced_pu_results')->select()->where('polling_unit_uniqueid', $item->uniqueid)->get();
            // return $get_results;
        }
    }
    public function new_poll($ward_id)
    {
        $ward_details = ['ward_details' => DB::table('ward')->where('ward_id', $ward_id)->first()];
        return view('new_poll')->with($ward_details);
    }

    // public function new_result($ward_id)
    // {
    //     $ward = ['ward' => DB::table('ward')->where('ward_id', $ward_id)->first()];
    //     $all_party = ['all_party' => DB::table('party')->get()];
    //     return view('new_result')->with($ward)->with($all_party);
    // }

    public function add_unit(Request $request)
    {
        DB::table('polling_unit')->insert([
            'polling_unit_id' => rand(1, 20),
            'ward_id' => $request->ward_id,
            'lga_id' => $request->lga_id,
            'uniquewardid' => rand(100, 300),
            'polling_unit_number' => "DT" . rand(1000000, 9999999),
            'polling_unit_name' => $request->polling_unit_name,
            'polling_unit_description' => $request->polling_unit_description,
            'long' => $request->long,
            'lat' => $request->lat
        ]);

        return back()->with('done', "New Polling Unit was added Successfully");
    }

    public function add_result(Request $request)
    {
        DB::table('announced_pu_results')->insert([
            'result_id'=>rand(100, 999),
            'polling_unit_uniqueid'=>$request->polling_unit_id,
            'party_abbreviation'=>$request->party_abbreviation,
            'party_score'=>$request->party_score,
            'entered_by_user'=>"Precious Ani",
            'date_entered'=>Carbon::now(),
            'user_ip_address'=>"192.168.1.101"
        ]);

        return back()->with('done', "Party Results has been Uploaded Successfully for this Unit");
    }
}
