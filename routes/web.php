<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Products;

Route::get('/',Home::class)->name('home');
Route::get('/products',Products::class)->name('products');
