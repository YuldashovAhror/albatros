<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('newscategories')->orderBy('id')->get();
        return view('dashboard.news.index',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
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
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'discription_en' => 'required|string',
            'discription_ru' => 'required|string',
            'discription_uz' => 'required|string',
        ]);
        
        $news = new News();

        if($request->file('photo')){
            $news['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }

        $slug = str_replace(' ', '_', strtolower($request->title_uz)) . '-' . Str::random(5);
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->discription_uz = $request->discription_uz;
        $news->discription_ru = $request->discription_ru;
        $news->discription_en = $request->discription_en;
        $news->link = $request->link;
        $news->new_cat_id = $request->newscategories;
        $news->date = $request->date;
        $news->year = date_format(date_create($request->date), 'Y');
        $news['slug'] = $slug;
        if($request->file('photo_2')){
            $news['photo_2'] = $this->photoSave($request->file('photo_2'), 'image/news');
        }
        $news->save();
        return redirect()->route('dashboard.news.index');
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
        $new = News::where('slug', $slug)->first();
        return view('dashboard.news.edit',[
            'new'=>$new
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
        $news = News::where('slug', $slug)->first();

        if($request->file('photo')){
            if(is_file(public_path($news->photo))){
                unlink(public_path($news->photo));
            }
            $news['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }

        $new_slug = str_replace(' ', '_', strtolower($request->title_uz)) . '-' . Str::random(5);
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->discription_uz = $request->discription_uz;
        $news->discription_ru = $request->discription_ru;
        $news->discription_en = $request->discription_en;
        $news->link = $request->link;
        $news->new_cat_id = $request->newscategories;
        $news->date = $request->date;
        $news->year = date_format(date_create($request->date), 'Y');
        $news['slug'] = $new_slug;
        if($request->file('photo_2')){
            if(is_file(public_path($news->photo_2))){
                unlink(public_path($news->photo_2));
            }
            $news['photo_2'] = $this->photoSave($request->file('photo_2'), 'image/news');
        }
        $news->save();
        return redirect()->route('dashboard.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $new = News::find($id);
        if(is_file(public_path($new->photo))){
            unlink(public_path($new->photo));
        }
        if(is_file(public_path($new->photo_2))){
            unlink(public_path($new->photo_2));
        }

        $new->delete();

        return redirect()->back();
    }
}
