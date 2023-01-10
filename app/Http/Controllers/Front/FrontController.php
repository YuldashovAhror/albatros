<?php

namespace App\Http\Controllers\Front;

use App\Models\Banner;
use App\Models\Brend;
use App\Models\Category;
use App\Models\Information;
use App\Models\News;
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
        $news = News::orderBy('year')->get();
        $years = [];
        foreach ($news as $new)
        {
            if (in_array($new->year, $years))
            {
                array_push($years[$new->year], $new);
            }else{
                $years[$new->year][] = $new;
            }
        }
        return view('front.welcome', [
            'brends' =>$brends,
            'banners' =>$banners,
            'categories' =>$categories,
            'partners' =>$partners,
            'informations' =>$informations,
            'years' =>$years,
            'products'=>$products
        ]);
        // return view('front.welcome', compact('lang','brends',$categories));
    }
    
}
