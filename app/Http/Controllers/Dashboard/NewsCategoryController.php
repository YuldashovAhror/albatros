<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newscats = NewsCategory::all();
        return view('dashboard.newscat.index',[
            'newscats'=>$newscats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newscat = new NewsCategory();
        
        $newscat->name_uz = $request->name_uz;
        $newscat->name_ru = $request->name_ru;
        $newscat->name_en = $request->name_en;

        $newscat->save();

        return redirect()->back();
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
    public function edit($id)
    {
        $newscat = NewsCategory::find($id);
        return view('dashboard.newscat.edit', [
            'newscat'=>$newscat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newscat = NewsCategory::find($id);
        
        $newscat->name_uz = $request->name_uz;
        $newscat->name_ru = $request->name_ru;
        $newscat->name_en = $request->name_en;

        $newscat->save();

        return redirect()->route('dashboard.newcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newscat = NewsCategory::find($id);
        $newscat->delete();
        return redirect()->back();
    }
}
