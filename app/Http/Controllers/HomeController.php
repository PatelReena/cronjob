<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();

        $dbModel = new User();
        $dbModel->name = $data['name'];
        $dbModel->email = $data['email'];
        $dbModel->password = Hash::make($data['password']);
        $dbModel->birthdate = $data['birthdate'];
        $dbModel->save();
        return redirect()->back()->with('mes', 'Please fill all fields');

        // if ($data['name'] != "" &&  $data['email'] != "" &&  $data['password'] != "") {
        //     $ans = DB::table('users')->insertGetId(["name" => $data['name'], "email" => $data['email'], "password" => Hash::make($data['password'])]);
        //     return redirect()->back()->with('message', ' Register User Sucessfully!');
        // } else {
        //     return redirect()->back()->with('error', 'Please fill all fields');
        // }
    }
}
