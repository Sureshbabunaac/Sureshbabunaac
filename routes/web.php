<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InterviewViewController;
use Illuminate\Http\Request;
use app\Http\Controller;

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
    return view('welcome',['users'=>App\Models\User::all()]);
});


Route::match(array('get','post'),'view-answer1',[InterviewViewController::class, 'answer1details']);
Route::get('view-answer2',[InterviewViewController::class, 'answer2details']);
Route::get('view-answer3',[InterviewViewController::class, 'answer3details']);
Route::get('view-answer4',[InterviewViewController::class, 'answer4details']);
Route::get('view-answer5',[InterviewViewController::class, 'answer5details']);

