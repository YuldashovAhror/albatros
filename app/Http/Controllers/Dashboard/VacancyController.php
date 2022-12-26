<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class VacancyController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacansies = Vacancy::all();
        return view('dashboard.vacancy.index', [
            'vacansies'=>$vacansies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.vacancy.create');
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
            'discription_en' => 'required|string',
            'discription_ru' => 'required|string',
            'discription_uz' => 'required|string',
        ]);

        $vacancy = new Vacancy();
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $vacancy->name_uz = $request->name_uz;
        $vacancy->name_ru = $request->name_ru;
        $vacancy->name_en = $request->name_en;
        $vacancy->discription_uz = $request->discription_uz;
        $vacancy->discription_ru = $request->discription_ru;
        $vacancy->discription_en = $request->discription_en;
        $vacancy['slug'] = $slug;
        $vacancy->save();

        return redirect()->route('dashboard.vacancy.index');
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
        $vacancy = Vacancy::where('slug', $slug)->first();
        return view('dashboard.vacancy.edit',compact('vacancy'));
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
            'discription_en' => 'required|string',
            'discription_ru' => 'required|string',
            'discription_uz' => 'required|string',
        ]);
        $vacancy = Vacancy::where('slug', $slug)->first();
        $new_slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $vacancy->name_uz = $request->name_uz;
        $vacancy->name_ru = $request->name_ru;
        $vacancy->name_en = $request->name_en;
        $vacancy->discription_uz = $request->discription_uz;
        $vacancy->discription_ru = $request->discription_ru;
        $vacancy->discription_en = $request->discription_en;
        $vacancy['slug'] = $new_slug;
        $vacancy->save();

        return redirect()->route('dashboard.vacancy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();
        return redirect()->back();
    }
}
