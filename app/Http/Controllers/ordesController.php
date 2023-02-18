<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\ofline;

class ordesController extends Controller
{
    public function of_index()
    {
        $captain_name = ofline::select('captain_name')
        ->groupBy('captain_name')
        ->get();
        $status = ofline::select('status')
        ->groupBy('status')
        ->get();
         $payment = ofline::select('payment')
        ->groupBy('payment')
        ->get();

        return view('ofline.show', compact('captain_name','status','payment'));
    }
    public function getcaptain (Request $request)
    {
        if ($request->ajax()) {

            $captain_name = ofline::select('captain_name')
                ->groupBy('captain_name')
                ->get();

            return response()->json($captain_name);
        }
    }

    public function getstatus(Request $request)
    {
        if ($request->ajax()) {
            $status = ofline::select('status')
                ->groupBy('status')
                ->get();

            return response()->json($status);
        }
    }
    
     public function getpayment(Request $request)
    {
        if ($request->ajax()) {
            $payment = ofline::select('payment')
                ->groupBy('payment')
                ->get();

            return response()->json($payment);
        }
    }

    public function t_records(Request $request)

    {

        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $ofline = ofline::whereBetween('order_date', [$start_date, $end_date])->get();
                } else {
                    $ofline = ofline::latest()->get();
                }
            }

            else {

               $ofline = ofline::latest()->get();

            }

            return response()->json([
                'ofline' => $ofline
            ]);
        } else {
            abort(403);
        }
    }

        public function records(Request $request)
        {
            if ($request->ajax()) {

                if (request('std') && request('res') && $request->input('start_date') && $request->input('end_date')) {
                     $std=$request->input('std');
                     $res= $request->input('res');
                     $start_date = Carbon::parse($request->input('start_date'));
                     $end_date = Carbon::parse($request->input('end_date'));
                    $ofline = ofline::where('status', '=',  $std )
                                     ->where('captain_name', '=',$res)
                                     ->whereBetween('order_date', [$start_date, $end_date])
                                     ->latest()
                                     ->get();
                } else if(request('std') && $request->input('start_date') && $request->input('end_date')) {
                     $std=$request->input('std');
                     $start_date = Carbon::parse($request->input('start_date'));
                     $end_date = Carbon::parse($request->input('end_date'));
                     $ofline = ofline::where('status', '=',  $std )
                                     ->whereBetween('order_date', [$start_date, $end_date])
                                     ->latest()
                                     ->get();
                } else if(request('res') && $request->input('start_date') && $request->input('end_date')) {
                    
                      $res= $request->input('res');
                      $start_date = Carbon::parse($request->input('start_date'));
                      $end_date = Carbon::parse($request->input('end_date'));
                      $ofline = ofline::where('captain_name', '=',$res)
                                     ->whereBetween('order_date', [$start_date, $end_date])
                                     ->latest()
                                     ->get();
                } else if(request('action') && $request->input('start_date') && $request->input('end_date')) {
                    
                      $action= $request->input('action');
                      $start_date = Carbon::parse($request->input('start_date'));
                      $end_date = Carbon::parse($request->input('end_date'));
                      $ofline = ofline::where('payment', '=',$action)
                                     ->whereBetween('order_date', [$start_date, $end_date])
                                     ->latest()
                                     ->get();
                }
                else{
                    
                    $ofline = ofline::latest()->get(); 
                    
                }

                return response()->json([
                    'ofline' => $ofline
                ]);
            } else {
                abort(403);
            }
        }
}
