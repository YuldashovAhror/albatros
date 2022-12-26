<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\InfoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InfoCategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infocats = InfoCategory::all();
        return view('dashboard.infocat.index',[
            'infocats'=>$infocats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.infocat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infocat = new InfoCategory();

        if($request->file('photo')){
            $infocat['photo'] = $this->photoSave($request->file('photo'), 'image/infocat');
        }
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $infocat->name_uz = $request->name_uz;
        $infocat->name_ru = $request->name_ru;
        $infocat->name_en = $request->name_en;
        $infocat['slug'] = $slug;
        $infocat->save();
        return redirect()->route('dashboard.infocat.index');
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
        $infocat = InfoCategory::where('slug', $slug)->first();

        return view('dashboard.infocat.edit',[
            'infocat'=>$infocat
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
        $infocat = InfoCategory::where('slug', $slug)->first();
        if($request->file('photo')){
            if(is_file(public_path($infocat->photo))){
                unlink(public_path($infocat->photo));
            }
            $infocat['photo'] = $this->photoSave($request->file('photo'), 'image/infocat');
        }
        $new_slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $infocat->name_uz = $request->name_uz;
        $infocat->name_ru = $request->name_ru;
        $infocat->name_en = $request->name_en;
        $infocat['slug'] = $new_slug;
        $infocat->save();
        return redirect()->route('dashboard.infocat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infocat = InfoCategory::find($id);
        if(is_file(public_path($infocat->photo))){
            unlink(public_path($infocat->photo));
        }
        $infocat->delete();
        return redirect()->back();
    }
}
