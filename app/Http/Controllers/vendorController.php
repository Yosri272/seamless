<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\vendor;

class vendorController extends Controller
{
   public function ve_index()
    {
        return view('ofline.vendor.vendor');
    }
    public function ve_records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $vendor = vendor::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $vendor = vendor::latest()->get();
                }
            } else {
                $vendor = vendor::latest()->get();
            }

            return response()->json([
                'vendor' => $vendor
            ]);
        } else {
            abort(403);
        }
    }
}
