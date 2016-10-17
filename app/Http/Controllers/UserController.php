<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function getForm()
    {
        return view('user.form');
    }

    public function postUpload(Request $request)
    {
        if ($request->hasFile('pic')) {
            do{
                $pic = date('Ymd H:i:s') + rand(111111, 999999);
                $ext = $request->file('pic')->getClientOriginalExtension();
                $path = './upload/'.$pic.'.'.$ext;
            }while(file_exists($path));
            $request->file('pic')->move('./upload/',$pic.'.'.$ext);
        }
    }
    public function getCookie(){
        Cookie::queue('uname','zhangsan',10);
        echo Cookie::get('uname');
    }
}