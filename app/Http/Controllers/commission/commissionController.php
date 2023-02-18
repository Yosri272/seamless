<?php

namespace App\Http\Controllers\commission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Captains;
use App\Models\commission;

class commissionController extends Controller
{
    public function create($id ,$captain)
    {
        $id=$id;
        $captain=$captain;


        return view('commission.co_register',compact('captain','id'));

    }
    public function stort(Request $request)
    {
        $commission = new commission();
        $Rate=$request->number_trips*$request->amount_commission/100;
        $commission->captain_name = $request->captain_name;
        $commission->number_trips = $request->number_trips;
        $commission->amount_commission = $Rate;
        $commission->save();
        return redirect()->route('commission')->with('success','Added successfully');
    

    }
    public function edit($id)
    {

                $edit = commission::where('id','=',$id)->first();
               return view('commission.co_editview',compact('edit'));

    }
    public function update(Request $request, $id){





        $update = commission::where('id','=',$id)->first();
        $update->captain_name = $request->captain_name;

if($update->number_trips == $request->number_trips)
{
    $Rate=$update->number_trips*$request->Rate/100;

            $update->number_trips = $request->number_trips;
            $update->amount_commission = $Rate;
            $update->save();
            return redirect()->route('commission')->with('success','Modified successfully');
} else{
    $Rate=$request->number_trips*$request->Rate/100;

    $update->number_trips = $request->number_trips;
    $update->amount_commission = $Rate;
    $update->save();
    return redirect()->route('commission')->with('success','Modified successfully');

}



    }
    public function distory($id)
{

            $commission = commission::find($id);
            $commission->delete();
            return back()->with('error','Successfully deleted');


}
}
