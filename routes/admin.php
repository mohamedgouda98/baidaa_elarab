<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\EraController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PoetController;
use App\Http\Controllers\Admin\PoeticTypeController;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function (){
   /*---Home Dashboard Route---*/
   Route::get('/index', [HomeController::class, 'index'])->name('dashboard');

   /*---Countries Route---*/
    Route::group(['prefix' => 'country', 'as' => 'country.'], function (){
       Route::get('/index', [CountryController::class, 'index'])->name('index');
       Route::get('/create', [CountryController::class, 'create'])->name('create');
       Route::post('/store', [CountryController::class, 'store'])->name('store');
       Route::get('/edit/{country}', [CountryController::class, 'edit'])->name('edit');
       Route::put('/update/{country}', [CountryController::class, 'update'])->name('update');
       Route::delete('/delete/{country}', [CountryController::class, 'destroy'])->name('destroy');
    });

    /*---Poet Route---*/
    Route::group(['prefix' => 'poet', 'as' => 'poet.'], function (){
        Route::get('/index', [PoetController::class, 'index'])->name('index');
        Route::get('/create', [PoetController::class, 'create'])->name('create');
        Route::post('/store', [PoetController::class, 'store'])->name('store');
        Route::get('/edit/{poet}', [PoetController::class, 'edit'])->name('edit');
        Route::put('/update/{poet}', [PoetController::class, 'update'])->name('update');
        Route::delete('/delete/{poet}', [PoetController::class, 'destroy'])->name('destroy');
    });
    /*--- era Route---*/
    Route::group(['prefix' => 'era', 'as' => 'era.'], function (){
        Route::get('/index',[EraController::class,'index'])->name('index');
        Route::get('/create',[EraController::class,'create'])->name('create');
        Route::post('/store', [EraController::class, 'store'])->name('store');
        Route::get('/edit/{era}', [EraController::class, 'edit'])->name('edit');
        Route::put('/update/{era}', [EraController::class, 'update'])->name('update');
        Route::delete('/delete/{era}', [EraController::class, 'destroy'])->name('destroy');

    });

    /*--- poeticType Route---*/
    Route::group(['prefix' => 'poeticType', 'as' => 'poeticType.'], function (){
        Route::get('/index',[PoeticTypeController::class,'index'])->name('index');
        Route::get('/create',[PoeticTypeController::class,'create'])->name('create');
        Route::post('/store', [PoeticTypeController::class, 'store'])->name('store');
        Route::get('/edit/{poeticType}', [PoeticTypeController::class, 'edit'])->name('edit');
        Route::put('/update/{poeticType}', [PoeticTypeController::class, 'update'])->name('update');
        Route::delete('/delete/{poeticType}', [PoeticTypeController::class, 'destroy'])->name('destroy');

    });


   /*---LogOut Route---*/
   Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'login', 'as' => 'admin.'], function () {
    /*---Login Route---*/
    Route::get('/', [AuthController::class, 'loginPage'])->name('auth');
    Route::post('/signin', [AuthController::class, 'login'])->name('login');
});
