<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;
class ProfileController extends BaseController
{

    use AuthorizesRequests, ValidatesRequests;
    public function showavatar(Request $request): View{
        $username = $request-> session () -> get ('username1');
        $avatar = DB::select("select avatar from Loginuser where username =?",[$username]);
        foreach($avatar as $check){
            $avt = $check -> avatar;
        }
        return view('profile',['avt'=>$avt]);
    }
    public function avatar(Request $request){
        $file = $request->file('avatar');
        $fileName = $file->getClientOriginalName();

        $file -> storeAs('avatar1',$fileName);
        $file -> move(public_path('avatar1'), $fileName); 
        $username = $request-> session () -> get ('username1');
        $avtpath = "avatar1/" . $fileName;
        DB::update(
            'update Loginuser set avatar = ? where username = ?',[$avtpath,$username]
        );

        return redirect('profile');
    }
}
    