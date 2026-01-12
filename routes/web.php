<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/integrated-circuits', [ProductsController::class, 'integratedCircuits'])->name('products.integrated-circuits');
Route::get('/products/power-amplifiers', [ProductsController::class, 'powerAmplifiers'])->name('products.power-amplifiers');
Route::get('/products/pulse-interference-generators', [ProductsController::class, 'pulseInterferenceGenerators'])->name('products.pulse-interference-generators');
Route::get('/products/circulators', [ProductsController::class, 'circulators'])->name('products.circulators');
Route::get('/products/quartz-resonators', [ProductsController::class, 'quartzResonators'])->name('products.quartz-resonators');
Route::get('/products/quartz-generators', [ProductsController::class, 'quartzGenerators'])->name('products.quartz-generators');
Route::get('/products/{category}/{device}', [ProductsController::class, 'deviceDetail'])->name('products.device');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::post('/contacts', [ContactsController::class, 'submit'])->name('contacts.submit');

