<?php

namespace App\Http\Controllers\captains;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Motors;
use App\Models\Captains;
use App\Models\Tripe;
use PDF;

class captainsController extends Controller
{
    public function create()
    {
        $captain_name = Tripe::select('captain_name')
        ->groupBy('captain_name')
        ->get();
        $motor = Motors::select('motor')
        ->where('c_folg','=',0)
        ->groupBy('motor')
        ->get();
        return view('captains.c_register',compact('motor','captain_name'));


    }
    public function stort( Request $request)
{
    $val=Auth::user()->name;
    $Captains= new Captains;



    $Captains->account_type = $request->account_type;
     $Captains->type = $request->type;
    $Captains->name = $request->name;
    $Captains->phone = $request->phone;
    $Captains->status = $request->status;
    $Captains->pin_code = $request->pin_code;
    $Captains->c_user =$val;

    $Captains-> motor = $request->motor;

    //////////////
    $motors = Motors::where('motor','=',$request->motor)->first();
    $motors->c_folg=1;
    $motors->save();
    ///////////






    $Captains->license_number = $request->license_num;
   
    $Captains->Salary = $request->salary;
    $Captains->bonce = $request->bonce;
    $Captains->save();
   return back()->with('success','Added successfully');


}
public function display()
{

    $Captains=Captains::orderBy('id' , 'DESC')->paginate(5);



    return view('ofline.captains.view' ,compact('Captains'));
}


public function edit($id)
    {
                $motors = Motors::all();
                $edit = Captains::where('id','=',$id)->first();
               return view('captains.c_editview',compact('edit','motors'));

    }
public function update(Request $request, $id){


     $val=Auth::user()->name;
    $update = Captains::where('id','=',$id)->first();
    $update->account_type = $request->account_type;
    $update->name = $request->name;
    $update->phone = $request->phone;
    $update->status = $request->status;
    $update->type = $request->type;
    $update->pin_code = $request->pin_code;
    $update->motor = $request->motor;
    $update->license_number = $request->license_num;
    $update->end_date = $request->end_date;
    $update->Salary = $request->salary;
    $update->c_user =$val;
    $update->bonce = $request->bonce;
    $update->save();
    return redirect()->route('captains')->with('success','Modified successfully');


}

public function search(Request $request)
{

$input = $request->captains;
$for = $request->for;
$to = $request->to;


   $Captains=Captains::orderBy('id' , 'desc')->orWhere('name', '=', $input)->orWhere('created_at', '=', $for)->paginate(50);
   return view('captains.view' ,compact('Captains'));

}

public function getpdf()
{

    $Captains = Captains::all();
    $pdf= PDF::loadView('pdf.captains' ,['Captains' =>  $Captains]);
    //return $pdf ->stream('captains.pdf');
    return $pdf ->download('captains.pdf');

}
public function distory($id)
{
    
    $d_data="";
     $Captains = Captains::all()->where('id', '=', $id);
     foreach($Captains as $data)

                   {
                    $d_data=$data->motor;

                  }
     $motors = Motors::where('motor','=',$d_data)->first();
    
    
     $motors->c_folg=0;
     $motors->save();

            $Captains = Captains::find($id);
            $Captains->delete();
            return back()->with('error','Successfully deleted');


}
}
