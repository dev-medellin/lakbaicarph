<?php

use App\Http\Livewire\{
    AboutUs,
    CarList,
    ContactUs,
    Home,
    Reviews
};
use App\Http\Livewire\Booking\Payment;
use App\Http\Livewire\List\Details;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', Home::class);
Route::get('/why-us', AboutUs::class);
Route::get('/car-list', CarList::class);
Route::get('/reviews', Reviews::class);
Route::get('/contact-us', ContactUs::class);
Route::get('/list/details/{id}', Details::class);
Route::get('/booking/payment', Payment::class);
