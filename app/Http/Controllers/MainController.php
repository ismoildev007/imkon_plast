<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Logo;
use App\Models\News;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Price;
use App\Models\Sertificate;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Information::latest()->take(6)->get();
        $partners = Logo::latest()->take(5)->get();
        $sertificate = Sertificate::latest()->take(1)->get();
        $prices1 = Price::where('price_id',1)->get();
        $prices2 = Price::where('price_id',2)->get();
        $portfolios = Portfolio::all();
        return view('front.index', compact([
            'products',
            'partners',
            'sertificate',
            'prices1',
            'prices2',
            'portfolios',
        ]));
    }

    public function catolog()
    {
        $catologs = Information::all()->sortDesc();
        $category = Category::all();
        return view('front.catolog', compact([
            'catologs',
            'category',
        ]));
    }
    public function about()
    {
        $abouts = About::latest()->take(1)->get();
        $partners = Logo::latest()->take(5)->get();
        $portfolios = Portfolio::all();
        $teams = Team::latest()->take(8)->get();
        return view('front.about', compact([
            'abouts',
            'partners',
            'portfolios',
            'teams',
        ]));
    }
    public function customers()
    {
        $customers = Service::latest()->take(9)->get();
        return view('front.customers', compact([
            'customers'
        ]));
    }
    public function cooperation()
    {
        $partners = Partner::latest()->take(3)->get();
        return view('front.cooperation', compact([
                'partners',
            ]));
    }
    public function singleCooperation()
    {
        $partners = Partner::latest()->take(3)->get();
        return view('front.coperation.singleCooperation', compact([
                'partners',
            ]));
    }
    public function singleDetailCooperation()
    {
        $partners = Partner::latest()->take(3)->get();
        return view('front.coperation.singleDetailCooperation', compact([
                'partners',
            ]));
    }
    public function news()
    {
        $blogs = News::latest()->take(6)->get();
        return view('front.news.blog', compact([
            'blogs',
        ]));
    }
    public function portfolio()
    {
        $portfolios = Portfolio::latest()->take(10)->get();
        return view('front.portfolio', compact([
            'portfolios',
        ]));
    }
    public function contacts()
    {
        $contacts = Contact::latest()->take(1)->get();
        return view('front.contact', compact([
            'contacts'
        ]));
    }
    public function calc()
    {
        $contacts = Contact::latest()->take(1)->get();
        return view('front.calc', compact([
            'contacts'
        ]));
    }
    public function singleBlog($id)
    {
        $news = News::find($id);
        return view('front.news.singleBlog', compact([
            'news',
        ]));
    }
    public function singlePortfolio($id)
    {
        $portfolio = Portfolio::find($id);
        return view('front.singlePortfolio', compact([
            'portfolio',
        ]));
    }
}
