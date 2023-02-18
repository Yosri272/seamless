<?php

namespace App\Imports;

use App\Models\Tripe;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportTripe implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Tripe([
          //  'date_id'=> $this->transformDate($row[0]),

           // 'date_id'=>$row[0]->format('DD-MM-YYYY')??'',
          //  'date_id'=>!empty($row[0])?Carbon::createFromFormat("yy-mm-dd",$row[0])->format("dd/mm/yy"):null,
            'date_id'=>$row[0]??'',
            'captain_id'=>$row[1]??'',
            'captain_name'=>$row[2]??'',
            'phone_number'=>$row[3]??'',
            't_id'=>$row[4]??'',
            'captain_action'=>$row[5]??'',
            'trip_status'=>$row[6]??'',
            'total_fare'=>$row[7]??'',
             'eta'=>$row[8]??'',
            'pickup_to_dropoff_distance'=>$row[9]??'',
        ]);
    }
}
