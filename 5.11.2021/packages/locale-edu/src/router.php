<?php

use Illuminate\Support\Facades\Route;
use \LocaleEdu\LocaleController;

Route::get('locale/{code}', [LocaleController::class, 'setLocale'])->name('locale');
