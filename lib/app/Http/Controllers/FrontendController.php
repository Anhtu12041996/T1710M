<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class FrontendController extends Controller
{
    public function getHome()
    {
    	$data['featured'] = DB::table('vp_products')
    		->orderBy('prod_id','desc')
    		->take(12)
    		->get();
    	// dd($data['featured']);
    	return view('frontend.home', $data);
    }
}
