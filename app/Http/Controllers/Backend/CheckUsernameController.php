<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Library\MainFunction;

use App\Models\Admin;

use Input;
use Hash;

class CheckUsernameController extends Controller
{
    public function checkUser(Request $request)
    {
        $data = Admin::where('username',$request->username)->first();
        if(empty($data))
        {
            return response()->json(['status'=>'OK', 'message' => 'Available']);
        }
        else
        {
            return response()->json(['status'=>'ERROR', 'message' => 'Not Available']);
        }
    }

}
