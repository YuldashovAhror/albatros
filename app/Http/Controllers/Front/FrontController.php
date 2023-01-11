<?php

namespace App\Http\Controllers\Front;

use App\Models\Banner;
use App\Models\Brend;
use App\Models\Category;
use App\Models\Information;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Partner;
use App\Models\Product;

class FrontController
{
    public function index()
    {
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $lang = session()->get('locale');
        $products = Product::with('categories')->orderBy('id')->get();
        $banners = Banner::with('products')->orderBy('id')->get();
        $brends = Brend::paginate(10);
        $categories = Category::paginate(8);
        $partners = Partner::paginate(15);
        $informations = Information::paginate(3);

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
    
        return view('front.welcome', [
            'brends' =>$brends,
            'banners' =>$banners,
            'categories' =>$categories,
            'partners' =>$partners,
            'informations' =>$informations,
            'years_event' =>$years_event,
            'years_seminar' =>$years_seminar,
            'products'=>$products
        ]);
        // return view('front.welcome', compact('lang','brends',$categories));
    }
    
}
