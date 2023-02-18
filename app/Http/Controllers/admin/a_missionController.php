<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Motors;
use App\Models\Captains;
use App\Models\Tripe;
use App\Models\Expenses;
use App\Models\ofline;
use App\Models\vendor;

use App\Models\User;

class a_missionController extends Controller
{
    public function a_mission()
    {

         $val=Auth::user()->type;
        // dd($val);

            if($val == "go")
            {

                 /////// display Expenses
                $d_d=0;
               $Expenses=Expenses::orderBy('id' , 'DESC')->paginate(5);
               $mot = Expenses::all();
                foreach($mot as $data)

                   {
                    $d_d +=$data->price;

                   }

                     $d_data1=0;
                     $d_data2=0;
                     $d_data3=0;
                     $d_data=0;

                $motors = Motors::all();
                foreach($motors as $data)

                   {
                    $d_data++;

                  }
              $Captains = Captains::all()->where('type', '=', 'go');
              foreach($Captains as $data)

             {
               $d_data1++;

            }
            $Tripe = Tripe::all();
            foreach($Tripe as $data)

             {
              $d_data2++;

            }
           $User = User::all()->where('type','=',$val);;
           foreach($User as $data)

           {
           $d_data3++;

            }




              return view('admin.index' ,compact('d_data','d_data1','d_data2','d_data3','Expenses','d_d'));


          }
        else if($val == "ofline"){
            
            
            
             $d_d=0;
               $Expenses=Expenses::orderBy('id' , 'DESC')->paginate(5);
               $mot = Expenses::all();
                foreach($mot as $data)

                   {
                    $d_d +=$data->price;

                   }


                  /////// display Expenses

                  $Expenses=Expenses::orderBy('id' , 'DESC')->paginate(5);

                  $d_data1=0;
                  $d_data2=0;
                  $d_data3=0;
                  $d_data=0;

             $ofline = ofline::all();
             foreach($ofline as $data)

                {
                 $d_data++;

               }
           $Captains = Captains::all()->where('type', '=', 'ofline');
           foreach($Captains as $data)

          {
            $d_data1++;

         }
         $vendor = vendor::all();
         foreach($vendor as $data)

          {
           $d_data2++;

         }
        $User = User::all()->where('type','=',$val);
        foreach($User as $data)

        {
        $d_data3++;

         }




           return view('ofline.index' ,compact('d_data','d_data1','d_data2','d_data3','Expenses','d_d'));



        }

}


}
