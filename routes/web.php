<?php

use App\Http\Controllers\Page;
use Illuminate\Support\Facades\Route;


Route::get("/", [Page::class, 'home'])->name('index');
