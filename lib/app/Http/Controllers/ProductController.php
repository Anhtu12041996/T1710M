<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function getProduct()
    {   
        $data['productList'] = DB::table('vp_products')
            ->orderBy('prod_id','desc')
            ->get();
    	return view('backend.product',$data);


        // $students = DB::table('student')
        //     ->orderBy('id', 'desc')
        //     ->get();

        // return view('student')->with([
        //         'students' => $students
        //     ]);
    }

    public function getAddProduct()
    {
    	return view('backend.addproduct');
    }

    public function postAddProduct(AddProductRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
    	$product = new Product;
        $product -> prod_name = $request->name;
        $product -> prod_slug = str_slug($request->name);
        $product -> prod_price = $request->price;
        $product -> prod_img = $filename;
        $product -> prod_description = $request->description;
        $product -> save();
        $request -> img -> storeAs('avatar', $filename);

        return back();
    }

    public function getEditProduct($id)
    {   
        $data['product'] = Product::find($id);
    	return view('backend.editproduct', $data);
    }

    public function postEditProduct(Request $request, $id)
    {
        $product = new Product;
    	$arr['prod_name'] = $request->name;
        $arr['prod_slug'] = str_slug($request->name);
        $arr['prod_price'] = $request->price;
        $arr['prod_description'] = $request->description;

        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['prod_img'] = $img;
            $request -> img -> storeAs('avatar', $img);
        }

        $product::where('prod_id', $id)->update($arr);
        return redirect('/product');
    }

    public function getDeleteProduct($id)
    {
    	Product::destroy($id);
        return back();  
    }
}
