<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $partners = Partner::all();
        return view('dashboard.partners.index', [
            'partners' =>$partners
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
        $partners = new Partner;

        if($request->file('photo')){
            $partners['photo'] = $this->photoSave($request->file('photo'), 'image/partners');
        }
        $partners->save();
        return redirect()->route('dashboard.partners.index');
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
        $partner = Partner::find($id); 
        return view('dashboard.partners.edit', [
            'partner' =>$partner
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
        $partner = Partner::find($id); 
        if($request->file('photo')){
            if(is_file(public_path($partner->photo))){
                unlink(public_path($partner->photo));
            }
            $partner['photo'] = $this->photoSave($request->file('photo'), 'image/partners');
        }
        $partner->save();
        return redirect()->route('dashboard.partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        if(is_file(public_path($partner->photo))){
            unlink(public_path($partner->photo));
        }

        $partner->delete();

        return redirect()->back();
    }
}
