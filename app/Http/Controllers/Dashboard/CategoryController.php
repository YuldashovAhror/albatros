<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('brends')->orderBy('id')->get();
        return view('dashboard.category.index', [
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();

        if($request->file('photo')){
            $category['photo'] = $this->photoSave($request->file('photo'), 'image/category');
        }
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $category->brend_id = $request->brends;
        $category->name_uz = $request->name_uz;
        $category->name_ru = $request->name_ru;
        $category->name_en = $request->name_en;
        $category['slug'] = $slug;
        $category->save();
        return redirect()->route('dashboard.category.index');
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
        $category = Category::where('slug', $slug)->first();
        return view('dashboard.category.edit', [
            'category'=>$category
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
        $category = Category::where('slug', $slug)->first();
        if($request->file('photo')){
            if(is_file(public_path($category->photo))){
                unlink(public_path($category->photo));
            }
            $category['photo'] = $this->photoSave($request->file('photo'), 'image/category');
        }
        $new_slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $category->brend_id = $request->brends;
        $category->name_uz = $request->name_uz;
        $category->name_ru = $request->name_ru;
        $category->name_en = $request->name_en;
        $category['slug'] = $new_slug;
        $category->save();
        return redirect()->route('dashboard.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if(is_file(public_path($category->photo))){
            unlink(public_path($category->photo));
        }
        $category->delete();
        return redirect()->back();
    }
}
