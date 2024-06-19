<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/info', [IndexController::class, 'infoHome'])->name('infoHome');
Route::get('/rutas', [IndexController::class, 'getRoutes'])->name('getRoutes');
Route::get('/noticias', [IndexController::class, 'NoticiasProcedure']);
Route::get('/cordilleras-cuencas', [IndexController::class, 'tooCordillera'])->name('seccion.cordilleras-cuencas');
Route::get('/servicios', [IndexController::class, 'tooServicios'])->name('seccion.servicios');
Route::get('/productos', [IndexController::class, 'tooProductos'])->name('seccion.productos');
Route::get('/regenera', [IndexController::class, 'tooRegenera'])->name('seccion.regenera');