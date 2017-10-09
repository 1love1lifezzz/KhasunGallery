<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;

use Cookie;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $c_admin_id = Cookie::get('c_admin_id');
        $s_admin_id = session()->get('s_admin_id');
        if(empty($s_admin_id) && empty($c_admin_id)) {
            return redirect()->to(config()->get('constants.BO_NAME').'/login');
        }
        if(empty($s_admin_id) && !empty($c_admin_id) ){
            $data = Admin::find($c_admin_id);
            if(empty($data)){
                return redirect()->to(config()->get('constants.BO_NAME').'/login');
            } else {
                session()->put('s_admin_id',$data->admin_id);
                session()->put('s_admin_name',$data->firstname.' '.$data->lastname);
                session()->put('s_admin_username',$data->username);
            }
        }
        return $next($request);
    }
}
