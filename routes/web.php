<?php
use App\Http\Controllers\HomeController;
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
/* Route trang chu */
Route::get('/', [HomeController::class, 'index']);
Route::get('/ve-chung-toi', [HomeController::class, 'vechungtoi']);
/* Route tin tuc */
Route::get('/tintuc', [HomeController::class, 'tintuc']);
Route::get('/tintuc/tintuc1', [HomeController::class, 'tintuc1']);
Route::get('/tintuc/tintuc2', [HomeController::class, 'tintuc2']);
Route::get('/tintuc/tintuc3', [HomeController::class, 'tintuc3']);
/* Route dich vu phun theu */
Route::get('/dichvu/phuntheu/phunmay', [HomeController::class, 'phunmay']);
Route::get('/dichvu/phuntheu/phunmoi', [HomeController::class, 'phunmoi']);
/* Route dich vu xong hoi */
Route::get('/dichvu/xonghoigiammo/xonghoi', [HomeController::class, 'xonghoi']);
Route::get('/dichvu/xonghoigiammo/xongchanthaidoc', [HomeController::class, 'xongchanthaidoc']);
/* Route dich vu chuyen ve da */
Route::get('/dichvu/da/mun', [HomeController::class, 'mun']);
Route::get('/dichvu/da/namtannhan', [HomeController::class, 'namtannhan']);
Route::get('/dichvu/da/trietlong', [HomeController::class, 'trietlong']);
Route::get('/dichvu/da/tamtrang', [HomeController::class, 'tamtrang']);
/* Route dich vu chuyen ve duong sinh */
Route::get('/dichvu/duongsinh/dau', [HomeController::class, 'dau']);
Route::get('/dichvu/duongsinh/covaigay', [HomeController::class, 'covaigay']);
Route::get('/dichvu/duongsinh/gan', [HomeController::class, 'gan']);
Route::get('/dichvu/duongsinh/phonghan', [HomeController::class, 'phonghan']);
Route::get('/dichvu/duongsinh/than', [HomeController::class, 'than']);
Route::get('/dichvu/duongsinh/tyvi', [HomeController::class, 'tyvi']);

