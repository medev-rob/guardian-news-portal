<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data['coronaUpdate'] = Http::get('https://content.guardianapis.com/search?q=corona&api-key=test&show-tags=contributor&show-fields=headline,trailText,thumbnail&page-size=1')->json();

    $data['wordNews'] = Http::get('https://content.guardianapis.com/search?section=world&pageSize=3&api-key=test&show-fields=starRating,shortUrl,trailText,headline,thumbnail&page-size=3')->json();

    $data['latestNews'] = Http::get('https://content.guardianapis.com/search?section=world&api-key=test&show-fields=trailText,headline,thumbnail&page-size=3')->json();

    $data['politics'] = Http::get('https://content.guardianapis.com/search?section=politics&api-key=test&show-fields=trailText,headline,thumbnail&page-size=5')->json();

    $data['sportsNews'] = Http::get('https://content.guardianapis.com/search?section=football&api-key=test&show-fields=trailText,headline,thumbnail&page-size=2')->json();

    $data['fashion'] = Http::get('https://content.guardianapis.com/search?section=fashion&api-key=test&show-fields=trailText,headline,thumbnail&page-size=5')->json();

    return view('home', $data);

})->name('home');

Route::get('api', function () {

    $data['test'] = Http::get('https://content.guardianapis.com/search?q=celebrity&api-key=test&show-fields=trailText,headline,thumbnail')->json();

    return view('news_list', $data);
});
