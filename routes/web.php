<?php

use App\Http\Controllers\admin\BarangController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\EkspedisiController;
use App\Models\Barang;
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
    return view('welcome');
});

// Route::resource('dashboard', DashboardController::class);
// Route::resource('barang', BarangController::class);
Route::resources([
    'dashboard' => DashboardController::class,
    'barang' => BarangController::class,
    'ekspedisi' => EkspedisiController::class,
]);
