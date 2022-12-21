<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::with('products')->orderBy('id')->get();
        return view('dashboard.banner.index', [
            'banners'=>$banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();

        if($request->file('photo')){
            $banner['photo'] = $this->photoSave($request->file('photo'), 'image/banner');
        }

        $banner->product_id = $request->products;

        if($request->file('mobile_photo')){
            $banner['mobile_photo'] = $this->photoSave($request->file('mobile_photo'), 'image/banner');
        }
        $banner->save();
        return redirect()->route('dashboard.banner.index');
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
        $banner = Banner::find($id);
        return view('dashboard.banner.edit', [
            'banner'=>$banner
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
        $banner = Banner::find($id);

        if($request->file('photo')){
            if(is_file(public_path($banner->photo))){
                unlink(public_path($banner->photo));
            }
            $banner['photo'] = $this->photoSave($request->file('photo'), 'image/banner');
        }

        $banner->product_id = $request->products;

        if($request->file('mobile_photo')){
            if(is_file(public_path($banner->mobile_photo))){
                unlink(public_path($banner->mobile_photo));
            }
            $banner['mobile_photo'] = $this->photoSave($request->file('mobile_photo'), 'image/banner');
        }
        $banner->save();
        return redirect()->route('dashboard.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if(is_file(public_path($banner->photo))){
            unlink(public_path($banner->photo));
        }
        if(is_file(public_path($banner->mobile_photo))){
            unlink(public_path($banner->mobile_photo));
        }
        $banner->delete();
        return redirect()->back();
    }
}
