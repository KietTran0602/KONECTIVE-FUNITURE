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
        $product =  "";
        $cc = "layouts.index";
        if($REQUEST->Path() == 'home'){
            $product =  "";
            $cc = "layouts.index";
        }else if($REQUEST->Path() == 'product'){
            $product =  DB::table("Furniture")->Paginate(9);
            $cc = "layouts.store";
        }else if($REQUEST->Path() == 'funiture-set'){
            $product =  "";
            $cc = "layouts.funiture";
        }else if($REQUEST->Path() == 'policy'){
            $product =  "";
            $cc = "layouts.policy";
        }else if($REQUEST->Path() == 'contact'){
            $product =  "";
            $cc = "layouts.contact";
        }

        return view('menu',['cc' => $cc,'products'=>$product]);
    }
}
