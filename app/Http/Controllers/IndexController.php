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
        $cc = "layouts.index";
        if($REQUEST->Path() == 'home'){
            $cc = "layouts.index";
        }else if($REQUEST->Path() == 'store'){
            $cc = "layouts.store";
        }
        
        return view('menu', ['cc'=> $cc]);
    }
}
