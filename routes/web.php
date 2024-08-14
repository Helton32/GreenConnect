<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\VisitorDashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;


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

});



Route::get('/acceuil', function () {
    return view('home');
});
 
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/contact', function () {
      return view ('contact');
});
//Creation de rdv*/
Route::get('rdv', [Homecontroller::class, 'index','store'])->name('rdvcreate') ;
Route::post('store', [Homecontroller::class, 'store'])->name('rdvstore');
//Documents a fournir*/
Route::get('/doc', [Homecontroller::class, 'index'])->name('doccreate') ;
Route::post('/docstore', [Homecontroller::class, 'store'])->name('docstore');

/*Creation de message*/
Route::get('/contact', [MessagesController::class, 'index'])->name('msgcreate') ;
Route::post('/msg', [MessagesController::class, 'store'])->name('msgstore');

Route::get('/nous', function () {
    return view('nous');

});    
Route::get('/services', function () {
        return view('services');

    
});

Route::get('/rdvlister', [HomeController::class, 'show'])->name('rdvlister');



require __DIR__.'/auth.php';
