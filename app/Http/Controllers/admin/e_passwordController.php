<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
class e_passwordController extends Controller
{
    public function index()
    {

        return view('admin/e_password');


    }
    public function Stort( Request $request,$id)
   {
   $ver= $request->o_password;
   $post = User::where('id','=',$id)->first();
   $post->password =Hash::make($request->input('n_password'));
   $post->save();
   return back()->with('success', 'Password has been modified successfully');

   }
}
