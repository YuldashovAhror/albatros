<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InformationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Information::with('infocategories')->orderBy('id')->get();
        return view('dashboard.info.index',[
            'infos'=>$infos

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new Information();

        if($request->file('info_photo')){
            $info['info_photo'] = $this->photoSave($request->file('info_photo'), 'image/info');
        }
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $info->info_cat_id = $request->infocategories;
        $info->name_uz = $request->name_uz;
        $info->name_ru = $request->name_ru;
        $info->name_en = $request->name_en;
        $info->link = $request->link;
        $info['slug'] = $slug;
        if($request->file('presentation_photo')){
            $info['presentation_photo'] = $this->photoSave($request->file('presentation_photo'), 'image/info');
        }
        $info->save();
        return redirect()->route('dashboard.info.index');
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
        $info = Information::where('slug', $slug)->first();
        return view('dashboard.info.edit',[
            'info'=>$info
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
        $info = Information::where('slug', $slug)->first();
        if($request->file('info_photo')){
            if(is_file(public_path($info->info_photo))){
                unlink(public_path($info->info_photo));
            }
            $info['info_photo'] = $this->photoSave($request->file('info_photo'), 'image/info');
        }
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $info->info_cat_id = $request->infocategories;
        $info->name_uz = $request->name_uz;
        $info->name_ru = $request->name_ru;
        $info->name_en = $request->name_en;
        $info->link = $request->link;
        $info['slug'] = $slug;
        if($request->file('presentation_photo')){
            if(is_file(public_path($info->presentation_photo))){
                unlink(public_path($info->presentation_photo));
            }
            $info['presentation_photo'] = $this->photoSave($request->file('presentation_photo'), 'image/info');
        }
        $info->save();
        return redirect()->route('dashboard.info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Information::find($id);
        if(is_file(public_path($info->info_photo))){
            unlink(public_path($info->info_photo));
        }
        if(is_file(public_path($info->presentation_photo))){
            unlink(public_path($info->presentation_photo));
        }
        $info->delete();
        return redirect()->back();
    }
}
