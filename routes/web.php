
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/logout-user', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout.user');


Route::get('/krs/print', [KrsController::class, 'print'])
    ->name('krs.print');
/*
|--------------------------------------------------------------------------
| Welcome
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    if (auth()->user()->role == 'admin') {
        return view('admin.dashboard');
    }

    return view('mahasiswa.dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Auth User
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin'])->group(function () {

        Route::resource('dosen', DosenController::class);

        Route::resource('mahasiswa', MahasiswaController::class);

        Route::resource('matakuliah', MatakuliahController::class);

        Route::resource('jadwal', JadwalController::class);

    });

    /*
    |--------------------------------------------------------------------------
    | MAHASISWA
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:mahasiswa'])->group(function () {

        Route::resource('krs', KrsController::class);

        Route::get('/jadwal-mahasiswa',
            [JadwalController::class, 'jadwalMahasiswa'])
            ->name('jadwal.mahasiswa');

    });

});

require __DIR__.'/auth.php';

