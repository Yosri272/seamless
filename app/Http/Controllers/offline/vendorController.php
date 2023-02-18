<?php

namespace App\Http\Controllers\offline;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vendor;

class vendorController extends Controller
{
     public function create()
    {
        return view('ofline.vendor.v_register');


    }
    public function stort( Request $request)
    {

        $vendor= new vendor;
        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->address = $request->address;
        $vendor->products = $request->products;
        $vendor->save();
       return back()->with('success','Added successfully');


    }
   
public function edit($id)
    {
                $edit = vendor::where('id','=',$id)->first();
               return view('ofline.vendor.v_editview',compact('edit'));

    }
    public function update(Request $request, $id){




        $update = vendor::where('id','=',$id)->first();
        $update->name = $request->name;
        $update->phone = $request->phone;
        $update->address = $request->address;
        $update->products = $request->products;
        $update->save();
        return redirect()->route('vender')->with('success','Modified successfully');


    }
    public function distory($id)
{

            $vendor = vendor::find($id);
            $vendor->delete();
            return back()->with('error','Successfully deleted');


}

}
