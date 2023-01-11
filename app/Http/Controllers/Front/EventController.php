<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = News::where('new_cat_id', 1)->orderBy('year')->get();
        $seminars = News::where('new_cat_id', 2)->orderBy('year')->get();

        $years_event = [];
        $years_seminar = [];
    
        foreach ($events as $event)
        {
            if (in_array($event->year, $years_event))
            {
                array_push($years_event[$event->year], $event);
            }else{
                $years_event[$event->year][] = $event;
            }
        }

        foreach ($seminars as $seminar)
        {
            if (in_array($seminar->year, $years_seminar))
            {
                array_push($years_seminar[$seminar->year], $seminar);
            }else{
                $years_seminar[$seminar->year][] = $seminar;
            }
        }
        return view('front.events', [
            'years_event' =>$years_event,
            'years_seminar' =>$years_seminar,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::all();
        $new = News::where('slug', $slug)->first();
        return view('front.events-single', [
            'new'=>$new,
            'news'=>$news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
