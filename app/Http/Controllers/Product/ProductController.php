<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductModel;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function createProduct(Request $request) {
        //  dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'name_ar' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'availability' => 'required',
        ]);
        $product = new ProductModel();
        $product->title = $request->name;
        $product->title_ar = $request->name_ar;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->availability = $request->availability;
        if($request->hasFile('image')) {
            \Image::make($request->image)->save(public_path('img/profile/').$request->image);
            // $filepath = Storage::putfile('public/img/product', $request->file('image'));
            $product->image = $request->image;
        }
       
        $product->save();
        return redirect()->route('home')->with('messages', 'Information successfully Saved.');
    }
}
