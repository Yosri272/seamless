<?php

namespace App\Http\Controllers;
use App\Models\Tripe;
use Carbon\Carbon;

use Illuminate\Http\Request;

class tripeController extends Controller
{
    public function t_index()
    {
        $captain_name = Tripe::select('captain_name')
        ->groupBy('captain_name')
        ->get();
        $trip_status = Tripe::select('trip_status')
        ->groupBy('trip_status')
        ->get();
         $captain_action = Tripe::select('captain_action')
        ->groupBy('captain_action')
        ->get();

        return view('tripe.tripe', compact('captain_name','trip_status','captain_action'));
    }
    public function getcaptain (Request $request)
    {
        if ($request->ajax()) {

            $captain_name = Tripe::select('captain_name')
                ->groupBy('captain_name')
                ->get();

            return response()->json($captain_name);
        }
    }
    
      public function getaction (Request $request)
    {
        if ($request->ajax()) {

            $captain_action = Tripe::select('captain_action')
                ->groupBy('captain_action')
                ->get();

            return response()->json($captain_action);
        }
    }

    public function getstatus(Request $request)
    {
        if ($request->ajax()) {
            $trip_status = Tripe::select('trip_status')
                ->groupBy('trip_status')
                ->get();

            return response()->json($trip_status);
        }
    }

    public function t_records(Request $request)

    {

        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $tripe = Tripe::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $tripe = Tripe::latest()->get();
                }
            }

            else {

               $tripe = Tripe::latest()->get();

            }

            return response()->json([
                'tripe' => $tripe
            ]);
        } else {
            abort(403);
        }
    }
    public function records(Request $request)
    {

        if ($request->ajax()) {

            if ($request->input('std') && $request->input('res') && $request->input('action') &&  $request->input('start_date') && $request->input('end_date') ) {
               $std=$request->input('std');
               $res= $request->input('res');
               $action= $request->input('action');
                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));
                $tripe = Tripe::where('trip_status', '=', $std)
                  ->where('captain_name', '=', $res)
                  ->where('captain_action', '=', $action)
                  ->whereBetween('created_at', [$start_date, $end_date])
                  ->latest()
                  ->get();
                  
            } else if($request->input('std') && $request->input('start_date') && $request->input('end_date')) {
                 $std=$request->input('std');
                  $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));
                  $tripe = Tripe::where('trip_status', '=', $std)
                  ->whereBetween('created_at', [$start_date, $end_date])
                  ->latest()
                  ->get();

               
                
            }
            else if($request->input('res') && $request->input('start_date') && $request->input('end_date')){
                
                $res= $request->input('res');
                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));
                  $tripe = Tripe::where('captain_name', '=', $res)
                  ->whereBetween('created_at', [$start_date, $end_date])
                  ->latest()
                  ->get();  
                
            } 
            else if($request->input('action') && $request->input('start_date') && $request->input('end_date')){
                
                $action= $request->input('action');
                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));
                  $tripe = Tripe::where('captain_action', '=', $action)
                  ->whereBetween('created_at', [$start_date, $end_date])
                  ->latest()
                  ->get();
                
                
                
            }
            else {

               $tripe = Tripe::latest()->get();

            }
            
            
            

            return response()->json([
                 'tripe' => $tripe
            ]);
        } else {
            abort(403);
        }
    }

}
