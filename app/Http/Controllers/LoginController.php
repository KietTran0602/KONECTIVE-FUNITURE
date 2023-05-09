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
class LoginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(): View{
        return view('menu');
    }
    public function shows(): View{
        return view('login');
    }
    public function signup(Request $REQUEST){
        $username = $REQUEST ->username;
        $passwords = $REQUEST ->passwords;
        $repasswords = $REQUEST ->repasswords;   
        $mangcheckuser = DB::select("select * from Loginuser where username=?",[$username]);
        if(count($mangcheckuser)){
            $tb = "Username đã tồn tại";
            return redirect('login')->with('tbs',$tb);
        }else{
            if(!preg_match("/^(?=.{8,20})(?=.*[A-Z])(?=.*[0-9])/i",$passwords)){
                return redirect('login');
            }else{
                if($passwords == $repasswords){
                    DB::table('Loginuser')->insert([
                        'username' => $username,
                        'passwords' => HASH::make($passwords)
                    ]);
                    return redirect('home');
                }else{
                    return redirect('login');
                }
            }
        }
        
    }
    public function signin(Request $REQUEST){
        $usernamesignin = $REQUEST ->usernamesignin;
        $passwordssigin = $REQUEST ->passwordssignin;
        $manguser = DB::select("select * from Loginuser where username=?",[$usernamesignin]);
        $mangpassword = DB::select("select * from Loginuser where passwords=?",[$passwordssigin]);
        if(count($manguser)){
            if(count($mangpassword)){
                $r=$REQUEST->session()->put('username1',$usernamesignin);
                return redirect('home');
            }else{
                $tb = 'Password không đúng';
                return redirect('login')->with('tb',$tb);
            }
        }else{
            $tb = 'Email không đúng';
            return redirect('login')->with('tb',$tb);
        }
    }
    public function signout(Request $REQUEST){
        $r = $REQUEST->session()->flush();
        return redirect('home');
    }
}
    