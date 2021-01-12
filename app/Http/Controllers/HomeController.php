<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data['title'] = __('Preneur Lab News');

        $data['coronaUpdate'] = Http::get('https://content.guardianapis.com/search?q=corona&api-key=test&show-tags=contributor&show-fields=headline,trailText,thumbnail&page-size=1')->json();

        $data['wordNews'] = Http::get('https://content.guardianapis.com/search?section=world&pageSize=3&api-key=test&show-fields=starRating,shortUrl,trailText,headline,thumbnail&page-size=3')->json();

        $data['latestNews'] = Http::get('https://content.guardianapis.com/search?section=world&api-key=test&show-fields=trailText,headline,thumbnail&page-size=3')->json();

        $data['politics'] = Http::get('https://content.guardianapis.com/search?section=politics&api-key=test&show-fields=trailText,headline,thumbnail&page-size=5')->json();

        $data['sportsNews'] = Http::get('https://content.guardianapis.com/search?section=football&api-key=test&show-fields=trailText,headline,thumbnail&page-size=2')->json();

        $data['fashion'] = Http::get('https://content.guardianapis.com/search?section=fashion&api-key=test&show-fields=trailText,headline,thumbnail&page-size=5')->json();

        $data['imagesGallery'] = Http::get('https://content.guardianapis.com/search?api-key=test&show-fields=trailText,headline,thumbnail&page-size=6')->json();

        return view('home', $data);
    }

}
