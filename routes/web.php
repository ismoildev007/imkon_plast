<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\CompanyStructureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SystemTeamController;
use App\Http\Controllers\TaskMissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|-------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

/*
|----------------------------------------------------------
| Adminlar ko'raoladigan qism
|--------------------------------------------------------------------------
*/

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::resource('/home', HomeController::class);
        Route::resource('/about', AboutController::class);
        Route::resource('/partner', PartnerController::class);
        Route::resource('/license', LicenseController::class);
        Route::resource('/company_history', CompanyHistoryController::class);
        Route::resource('/service', ServiceController::class);
        Route::resource('/system_team', SystemTeamController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/company_structure', CompanyStructureController::class);
        Route::resource('/mission', TaskMissionController::class);
        Route::resource('/information', InformationController::class);
        Route::get('/profile', [UserController::class, 'index'])->name('user-index');
        Route::resource('/profile', UserController::class);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});


/*
|--------------------------------------------------------------------------
| Barcha foydalanuvshilar ko'raoladigan qism
|-------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/{lang}', function ($lang){

    session(['lang' => $lang]);

    return back();
});
