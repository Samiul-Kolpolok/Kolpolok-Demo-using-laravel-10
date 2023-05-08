<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SubscriberController;


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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/testimonial', [TestimonialController::class, 'testshow'])->name('testimonial');
Route::post('/add-subscriber', [SubscriberController::class, 'add'])->name('add.subscriber');
Route::get('/show-subscriber', [SubscriberController::class, 'showSubscriber'])->name('show.subscriber');
Route::get('/edit-subscriber/{id}', [SubscriberController::class, 'editSubscriber'])->name('edit.subscriber');
Route::post('/update-subscriber/{id}', [SubscriberController::class, 'updateSubscriber'])->name('update.subscriber');
Route::get('/delete-subscriber/{id}', [SubscriberController::class, 'deleteSubscriber'])->name('delete.subscriber');
