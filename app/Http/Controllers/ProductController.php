<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Product;
use Auth;
use Illuminate\Contracts\Encryption\DecryptException;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(9);
        return view('product.index', compact('products'));
    }

    public function checkout($id){
        try {
            $id = Crypt::decryptString($id);
            $productData = Product::find($id);    
        } catch (DecryptException $e) {
            return redirect()->route('product-list')->with('error','Invalid Product.');
        }
        
        return view('product.checkout', compact('productData'));
    }

    public function success(){
        return view('product.success');
    }
}
