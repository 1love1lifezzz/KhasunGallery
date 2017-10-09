<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Library\MainFunction;

use App\Models\Admin;

use Hash;
use Cookie;

class LoginController extends Controller
{
    public function __construct()
    {

    }
    public function getIndex(){
        if(!session()->has('s_admin_id'))
            return view('backend.login');
        else
            return redirect()->to(config()->get('constants.BO_NAME'));
    }
    public function postForm(Request $request){
        $data = Admin::where('username',$request->username)->first();
        if(empty($data))
            return redirect()->back()->with(['error','ไม่มีชื่อผู้ใช้งานนี้ในระบบค่ะ']);
        if(!Hash::check($request->password,$data->password))
            return redirect()->back()->with(['error','ระหัสผ่านไม่ถูกต้องค่ะ']);

        $remember_me = $request->remember;
        session()->put('s_admin_id',$data->admin_id);
        session()->put('s_admin_name',$data->firstname.' '.$data->lastname);
        session()->put('s_admin_username',$data->username);
        if($remember_me == 1){
            Cookie::queue('c_admin_id',$data->admin_id,525600);
        }else{
            Cookie::queue(Cookie::forget('c_admin_id'));
        }
        return redirect()->to(config()->get('constants.BO_NAME'));
    }

    public function logout(){
        session()->flush();
        Cookie::queue(Cookie::forget('c_admin_id'));

        return redirect()->to(config()->get('constants.BO_NAME').'/login');
    }
}
