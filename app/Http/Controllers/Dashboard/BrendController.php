<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brend;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrendController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brends = Brend::all();
        return view('dashboard.brend.index', [
            'brends'=>$brends
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.brend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_en' => 'required|string',
            'discription_ru' => 'required|string',
            'discription_uz' => 'required|string',
            'brend_number' => 'integer',
        ]);
        $brend = new Brend();

        if($request->file('photo')){
            $brend['photo'] = $this->photoSave($request->file('photo'), 'image/brend');
        }

        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $brend->name_uz = $request->name_uz;
        $brend->name_ru = $request->name_ru;
        $brend->name_en = $request->name_en;
        $brend->discription_uz = $request->discription_uz;
        $brend->discription_ru = $request->discription_ru;
        $brend->discription_en = $request->discription_en;
        $brend->link = $request->link;
        $brend->brend_number = $request->brend_number;
        $brend['slug'] = $slug;
        $brend->save();
        return redirect()->route('dashboard.brend.index');
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
        $brend = Brend::where('slug', $slug)->first();

        return view('dashboard.brend.edit', [
            'brend'=>$brend
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
        $brend = Brend::where('slug', $slug)->first();

        if($request->file('photo')){
            if(is_file(public_path($brend->photo))){
                unlink(public_path($brend->photo));
            }
            $brend['photo'] = $this->photoSave($request->file('photo'), 'image/brend');
        }

        $new_slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $brend->name_uz = $request->name_uz;
        $brend->name_ru = $request->name_ru;
        $brend->name_en = $request->name_en;
        $brend->discription_uz = $request->discription_uz;
        $brend->discription_ru = $request->discription_ru;
        $brend->discription_en = $request->discription_en;
        $brend->link = $request->link;
        $brend->brend_number = $request->brend_number;
        $brend['slug'] = $new_slug;
        $brend->save();
        return redirect()->route('dashboard.brend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brend = Brend::find($id);
        if(is_file(public_path($brend->photo))){
            unlink(public_path($brend->photo));
        }
        $brend->delete();
        return redirect()->back();
    }
}
