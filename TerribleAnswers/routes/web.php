<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
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
    return view('welcome');
})->name('index');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactPost']);

Route::resource('questions', QuestionController::class);
Route::resource('answers', AnswerController::class, ['except' => ['index', 'create', 'show']]);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile/{user}', [PageController::class, 'profile'])->name('profile');
Route::get('/questions', [QuestionController::class, 'index'])->name('questions');


Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendContact']);

Route::get('/hellowill', [PageController::class, 'MTC'])->name('php-name');

Route::get('/github', [App\Http\Controllers\PageController::class, 'github'])->name('github');
Route::post('/github', [App\Http\Controllers\ApiController::class, 'getGitInfo']);

Route::get('/weather', [App\Http\Controllers\ApiController::class, 'getWeather'])->name('weather');
Route::post('/weather', [App\Http\Controllers\ApiController::class, 'postWeather'])->name('weather');
