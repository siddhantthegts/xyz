<?php

use App\Http\Controllers\LandingPageController;

Route::view('/', 'lp.sop')->name('lp.sop');
Route::view('/mail', 'mails.cust-sop-mail');
// Route::view('/lp/sop', 'lp.sop')->name('lp.sop');

Route::view('/thank-you','lp.thanks')->name('thank-you');

Route::post('enquiry-submit', [LandingPageController::class, 'enquiry_submit'])->name('enquiry-submit');
