<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/about', function () { 
    return view( 'about', [ 
        'name' => 'Antony Santos', 
        'email' => 'elgasing@gmail.com' 
    ]);
});

Route::get('/tugaspraktikum', function () { 
    return view( 'tugaspraktikum', [ 
        'nm' => 'King Mykhailo Mudryk',
        'alias' => 'El Dear God',
        'Deskripsi' => 'Mykhailo Mudryk adalah pemain sepak bola muda asal Ukraina, 
            lahir pada 5 Januari 2001. Dia bermain sebagai sayap, dikenal karena kecepatannya, 
            dribbling, dan kemampuan mencetak gol. Kariernya berkembang di Shakhtar Donetsk, 
            dan dia juga telah bermain untuk tim nasional Ukraina, dianggap sebagai salah satu 
            talenta muda paling menjanjikan di Eropa.',
        'foto' => '/FotoKing.jpeg'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);