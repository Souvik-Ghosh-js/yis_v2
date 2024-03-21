<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AssistedPurchaseController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//purchase route
Route::middleware(['web' , 'auth'])->group(function () {

Route::post('/purchase/plans' ,[ApiController::class , 'purchase-plans']);
Route::post('/PAR' , [ProductController::class , 'PAR']);
Route::put('/change-status/{id}' , [ProductController::class , 'changestatus']);
Route::post('add/address' ,[ProductController::class , 'addAddress']);
Route::post('/get-notifications' ,[NotificationController::class , 'getNotifications']);
Route::post('/user/status' ,[ProductController::class , 'updateStatus']);
Route::post('/user/status1' ,[ProductController::class , 'updateStatus1']);
Route::post('/shipcalc' ,[ApiController::class , 'calculate']);
Route::post('/user-add-product' ,[AssistedPurchaseController::class , 'addProduct']);
Route::post('/added-products' ,[AssistedPurchaseController::class , 'addedProducts']);
Route::post('/add/coupons' ,[ApiController::class , 'addcoupons']);
Route::post('/clear_user_not', [NotificationController::class , 'clear_user']);
Route::post('/clear_wm_not', [NotificationController::class , 'clear_wm']);
Route::post('/add_to_cart', [CartController::class , 'addtoCart']);

});
Route::post('/add-warehouse' , [WarehouseController::class , 'addwarehouse']);
