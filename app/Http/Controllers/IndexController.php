<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;
class IndexController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(Request $REQUEST): View{
        $username = $REQUEST-> session () -> get ('username1');
        $avt = "";
        $avatar = DB::select("select avatar from Loginuser where username =?",[$username]);
        foreach($avatar as $check){
            $avt = $check -> avatar;
        }
        $product =  "";
        $sale = "";
        $cc = "layouts.index";
        if($REQUEST->Path() == 'home'){
            $product =  "";
            $sale = "";
            $cc = "layouts.index";
        }else if($REQUEST->Path() == 'product'){
            $product =  DB::table("Furniture")->Paginate(9);
            $sale = DB::select("select * from Furniture where id < 3250000");
            $cc = "layouts.store";
        }else if($REQUEST->Path() == 'funiture-set'){
            $product =  "";
            $sale = "";
            $cc = "layouts.funiture";
        }else if($REQUEST->Path() == 'policy'){
            $product =  "";
            $sale = "";
            $cc = "layouts.policy";
        }else if($REQUEST->Path() == 'contact'){
            $product =  "";
            $sale = "";
            $cc = "layouts.contact";
        }
        return view('menu',['cc' => $cc,'products'=>$product,'avt'=>$avt, 'sale' => $sale]);
    }
}
