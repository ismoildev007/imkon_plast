<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SertificateController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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
        Route::resource('/about', AboutController::class);
        Route::resource('/partner', PartnerController::class);
        Route::resource('/service', ServiceController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/information', InformationController::class);
        Route::resource('/portfolio', PortfolioController::class);
        Route::resource('/team', TeamController::class);
        Route::resource('/price', PriceController::class);
        Route::resource('/logo', LogoController::class);
        Route::resource('/order', OrderController::class);
        Route::get('/profile', [UserController::class, 'index'])->name('user-index');
        Route::resource('/profile', UserController::class);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::resource('contact', ContactController::class);
        Route::resource('sertificate', SertificateController::class);
    });
});


/*
|--------------------------------------------------------------------------
| Barcha foydalanuvshilar ko'raoladigan qism
|-------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/catolog', [MainController::class, 'catolog'])->name('catolog');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/customers', [MainController::class, 'customers'])->name('customers');
Route::get('/cooperation', [MainController::class, 'cooperation'])->name('cooperation');
Route::get('/singleCooperation', [MainController::class, 'singleCooperation'])->name('singleCooperation');
Route::get('/singleDetailCooperation', [MainController::class, 'singleDetailCooperation'])->name('singleDetailCooperation');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/calc', [MainController::class, 'calc'])->name('calc');
Route::get('/news/{news}', [MainController::class, 'singleBlog'])->name('singleBlog');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{portfolio}', [MainController::class, 'singlePortfolio'])->name('singlePortfolio');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/{lang}', function ($lang){

    session(['lang' => $lang]);

    return back();
})->where('lang', '(ru|uz|en)');
