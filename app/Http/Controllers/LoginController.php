<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(): View{
        return view('index');
    }
    public function shows(): View{
        return view('login');
    }
    public function signup(Request $REQUEST){
        $username = $REQUEST ->username;
        $passwords = $REQUEST ->passwords;
        $repasswords = $REQUEST ->repasswords;
        
        $mangcheckuser = DB::select("select * from Loginuser where username=?",[$username]);
        $mangcheckre = DB::select("select * from Loginuser where passwords=?",[$repasswords]);
        if(count($mangcheckuser)){
            return redirect('login');
        }else{
            if(count($mangcheckre)){
                DB::table('Loginuser')->insert([
                    'username' => $username,
                    'passwords' => bcrypt($passwords)
                ]);
                return redirect('index');
            }else{
                return redirect('login');
            }
            
        }
        
    }
    public function signin(Request $REQUEST){
        $tb="";
        $usernamesignin = $REQUEST ->usernamesignin;
        $passwordssigin = $REQUEST ->passwordssignin;
        $manguser = DB::select("select * from Loginuser where username=?",[$usernamesignin]);
        $mangpassword = DB::select("select * from Loginuser where passwords=?",[$passwordssigin]);
        if(count($manguser)){
            if(count($mangpassword)){
                return redirect('index');
            }else{
                return redirect('login');
            }
        }else{
            return redirect('login');
        }
    }
}
