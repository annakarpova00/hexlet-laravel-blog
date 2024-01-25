<?php

use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', [PageController::class, 'about']);

$topics = [ 'Pages', 'Blade', 'Others'];
Route::get ('/other', function() use ($topics){
    return (view('/other', ['topics'=>$topics]));
});

Route::get ('/articles', function() {
    $articles = Article::all();
    return view('articles', ['articles' => $articles]);
});

Route::get('/flights', function (){
    $flights = App\Models\Flight::all();
    return view('flights', ['flights'=> $flights]);
});
