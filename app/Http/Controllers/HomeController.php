<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Product;

class HomeController extends Controller
{
/*-----------------------------------------------------AddProduct------------------------------------------------------------*/
    public function postAddProduct(Request $request)
    {
        $response=unserialize($request);
        
    }
}
