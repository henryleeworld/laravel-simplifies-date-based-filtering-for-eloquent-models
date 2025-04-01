<?php

use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Route;

Route::get('date/manipulate/', [DateController::class, 'manipulate']);
