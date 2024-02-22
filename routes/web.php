<?php

use App\Http\Controllers\ProfileController;
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
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale',
], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // Test for Nofication Email sending 
        // author: lgbadluck
        // start
        Route::get('/send', [ProfileController::class, 'send'])->name('send');
        // end

        Route::get('/participant', function () {
            return view('conference.participant');
        })->name('participant');

        Route::get('/panels', function () {
            return view('conference.panels');
        })->name('panels');

        Route::get('/fees', function () {
            return view('conference.fees');
        })->name('fees');

        Route::get('/sponsorship', function () {
            return view('conference.sponsorship');
        })->name('sponsorship');

        Route::get('/accommodation', function () {
            return view('conference.accommodation');
        })->name('accommodation');

        Route::get('/contacts', function () {
            return view('conference.contacts');
        })->name('contacts');

    });

    require __DIR__ . '/auth.php';
});