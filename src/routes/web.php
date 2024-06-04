<?php

use tomaszkordas\RandomCat\Http\Controllers\RandomCatController;

Route::namespace('tomaszkordas\RandomCat\Http\Controllers')->get('cat', [RandomCatController::class, 'show'])->name('randomCat');
