<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Motors;
use App\Models\Captains;
use App\Models\Tripe;
use App\Models\Expenses;
use App\Models\User;

class a_missionController extends Controller
{
    public function a_mission()
    {

 /////// display Expenses

 $Expenses=Expenses::orderBy('id' , 'DESC')->paginate(5);

         $d_data1=0;
         $d_data2=0;
         $d_data3=0;
         $d_data=0;
  
        $motors = Motors::all();
         foreach($motors as $data)

         {
          $d_data++;

         }
         $Captains = Captains::all();
         foreach($Captains as $data)

         {
          $d_data1++;

         }
         $Tripe = Tripe::all();
         foreach($Tripe as $data)

         {
          $d_data2++;

         }
         $User = User::all();
         foreach($User as $data)

         {
          $d_data3++;

         }





            return view('admin/index' ,compact('d_data','d_data1','d_data2','d_data3','Expenses'));
    }

}
