<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


// Rota nomeada
Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

// Rota com parâmetro opcional
Route::get('user/{name?}', function ($name = null) {
    if ($name) {
        return 'Olá, ' . $name . '!';
    } else {
        return 'Olá, visitante!';
    }
});

// Rota com parâmetro obrigatório
Route::get('product/{id}', function ($id) {
    return 'Exibindo o produto ' .

$id;
});

// Exemplo de binding
Route::get('order/{order}', function (App\Models\Order $order) {
return $order;
});

// Rota de resource
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);

Route::get('/', function () {
    return view('login.index');
});
