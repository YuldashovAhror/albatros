<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.index', [
            'products'=>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('asd');
        $this->validate($request, [
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_en' => 'required|string',
            'discription_ru' => 'required|string',
            'discription_uz' => 'required|string',
        ]);
        
        $product = new Product();

        if($request->file('photo')){
            $product['photo'] = $this->photoSave($request->file('photo'), 'image/product');
        }
        $product->cat_id = $request->categories;
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $product->name_uz = $request->name_uz;
        $product->name_ru = $request->name_ru;
        $product->name_en = $request->name_en;
        $product->discription_uz = $request->discription_uz;
        $product->discription_ru = $request->discription_ru;
        $product->discription_en = $request->discription_en;
        $product->charactiristic_uz = $request->charactiristic_uz;
        $product->charactiristic_ru = $request->charactiristic_ru;
        $product->charactiristic_en = $request->charactiristic_en;
        $product->link = $request->link;
        
        $product['slug'] = $slug;
        if($request->file('instruct_photo')){
            $product['instruct_photo'] = $this->photoSave($request->file('instruct_photo'), 'image/product');
        }
        $product->save();
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('dashboard.product.edit',[
            'product'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_en' => 'required|string',
            'discription_ru' => 'required|string',
            'discription_uz' => 'required|string',
        ]);
        
        $product = Product::where('slug', $slug)->first();

        if($request->file('photo')){
            if(is_file(public_path($product->photo))){
                unlink(public_path($product->photo));
            }
            $product['photo'] = $this->photoSave($request->file('photo'), 'image/product');
        }
        $product->cat_id = $request->categories;
        $new_slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $product->name_uz = $request->name_uz;
        $product->name_ru = $request->name_ru;
        $product->name_en = $request->name_en;
        $product->discription_uz = $request->discription_uz;
        $product->discription_ru = $request->discription_ru;
        $product->discription_en = $request->discription_en;
        $product->charactiristic_uz = $request->charactiristic_uz;
        $product->charactiristic_ru = $request->charactiristic_ru;
        $product->charactiristic_en = $request->charactiristic_en;
        $product->link = $request->link;
        
        $product['slug'] = $new_slug;
        if($request->file('instruct_photo')){
            if(is_file(public_path($product->instruct_photo))){
                unlink(public_path($product->instruct_photo));
            }
            $product['instruct_photo'] = $this->photoSave($request->file('instruct_photo'), 'image/product');
        }
        $product->save();
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(is_file(public_path($product->photo))){
            unlink(public_path($product->photo));
        }
        if(is_file(public_path($product->instruct_photo))){
            unlink(public_path($product->instruct_photo));
        }

        $product->delete();

        return redirect()->back();
    }
}
