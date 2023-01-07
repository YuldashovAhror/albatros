<?php

namespace App\Http\Controllers\Front;

use App\Models\Banner;
use App\Models\Brend;
use App\Models\Category;
use App\Models\Information;
use App\Models\Partner;

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

        $banners = Banner::with('products')->orderBy('id')->get();
        $brends = Brend::paginate(10);
        $categories = Category::paginate(8);
        $partners = Partner::paginate(15);
        $informations = Information::paginate(3);
        return view('front.welcome', [
            'brends' =>$brends,
            'banners' =>$banners,
            'categories' =>$categories,
            'partners' =>$partners,
            'informations' =>$informations,
        ]);
        // return view('front.welcome', compact('lang','brends',$categories));
    }
    
}
