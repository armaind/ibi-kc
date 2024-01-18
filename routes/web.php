<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/auth', function () {
    if (Auth::check()) {
        switch (Auth::user()->roles) {
            case 'BIDAN':
                return redirect(route('bidan'));
                break;
            case 'ADMIN':
                return redirect(route('admin'));
                break;
            case 'STAFF':
                return redirect(route('staff'));
                break;
            default:
                return view('welcome');
                break;
        }
    } else {
        return view('welcome');
    };
})->middleware(['auth']);

Route::get('/', function () {
    return view('welcome');
})->name('index')
    ->middleware(['guest']);

Route::get('/tentang-kami', function () {
    return view('/tentang-kami');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index')
            ->name('admin');
        Route::resource('data-bidan', 'App\Http\Controllers\Admin\BidanController');
        Route::resource('data-koordinator', 'App\Http\Controllers\Admin\StaffController');
        Route::resource('monitoring', 'App\Http\Controllers\Admin\MonitoringController');
        Route::resource('lokasi-puskesmas', 'App\Http\Controllers\Admin\LokasiPuskesmasController');
        Route::resource('berita', 'App\Http\Controllers\Admin\BeritaController');
        Route::resource('profile', 'App\Http\Controllers\Admin\ProfileController');
        Route::resource('lokasi-bidan', 'App\Http\Controllers\Admin\LokasiBidanController');
    });

Route::prefix('staff')
    ->middleware(['auth', 'staff'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Staff\DashboardController@index')
            ->name('staff');
        Route::resource('visitasi', 'App\Http\Controllers\Staff\BidanController');
        Route::resource('koordinator', 'App\Http\Controllers\Staff\StaffController');
        Route::resource('monitoring-koordinator', 'App\Http\Controllers\Staff\MonitoringController');
        Route::resource('puskesmas', 'App\Http\Controllers\Staff\LokasiPuskesmasController');
        Route::resource('berita-koordinator', 'App\Http\Controllers\Staff\BeritaController');
        Route::resource('profile', 'App\Http\Controllers\Staff\ProfileController');
        Route::resource('penempatan-bidann', 'App\Http\Controllers\Staff\LokasiBidanController');
    });

Route::prefix('bidan')
    ->middleware(['auth', 'bidan'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Bidan\DashboardController@index')
            ->name('bidan');
        Route::resource('data-bidann', 'App\Http\Controllers\Bidan\BidanController');
        Route::resource('datakoordinator', 'App\Http\Controllers\Bidan\StaffController');
        Route::resource('monitoring-bidan', 'App\Http\Controllers\Bidan\MonitoringController');
        Route::resource('lokasi-puskesmas-bidan', 'App\Http\Controllers\Bidan\LokasiPuskesmasController');
        Route::resource('berita-bidan', 'App\Http\Controllers\Bidan\BeritaController');
        Route::resource('profile', 'App\Http\Controllers\Bidan\ProfileController');
        Route::resource('penempatan-bidan', 'App\Http\Controllers\Bidan\LokasiBidanController');


    });

require __DIR__ . '/auth.php';
