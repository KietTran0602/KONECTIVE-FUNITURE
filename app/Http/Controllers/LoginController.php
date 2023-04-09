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
    public function save(Request $REQUEST){
        $username = $REQUEST ->username;
        $passwords = $REQUEST ->passwords;
        DB::table('Loginuser')->insert([
            'username' => $username,
            'passwords' => $passwords
        ]);
        return view('index');
    }
}
