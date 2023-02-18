<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function c_index()
    {
        return view('admin.user');
    }
    public function c_records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $User = User::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $User = User::latest()->get();
                }
            } else {
                $User = User::latest()->get();
            }

            return response()->json([
                'User' => $User
            ]);
        } else {
            abort(403);
        }
    }
}
