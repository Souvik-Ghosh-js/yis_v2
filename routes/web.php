<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiController;

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


//pages routes
Route::get('/' , [HomeController::class , 'index']);
Route::get('/about' , [HomeController::class , 'about']);
Route::get('/contact' , [HomeController::class , 'contact']);
Route::get('/portfolio' , [HomeController::class , 'portfolio']);
Route::get('/faq' , [HomeController::class , 'faq']);
Route::get('/pricing' , [HomeController::class , 'pricing']);
Route::get('/shipping' , [HomeController::class , 'shipping']);

Route::middleware(['web'])->group(function () {

Route::post('/signup',[ApiController::class , 'signup']);
Route::get('/signup-page' , [HomeController::class , 'signup']);
Route::get('/login-page' , [HomeController::class , 'login'])->name('login-page');
Route::post('/login' , [ApiController::class , 'login']);
Route::get('/verify-email/{token}', [ApiController::class , 'verifyEmail']);
});


Route::middleware(['auth:web'])->group(function () {
Route::get('/user-dashboard' , [HomeController::class , 'userdashboard']);
Route::get('/warehouse-dashboard' , [HomeController::class , 'warehousedashboard']);
Route::get('/edit-product/{product_id}' , [HomeController::class , 'editproduct']);
Route::get('/purchase-report' , [HomeController::class , 'purchasereport']);
Route::get('/user-profile' , [HomeController::class , 'userprofile']);
Route::get('/product/detail' , [HomeController::class , 'product_detail']);
Route::get('/product' , [HomeController::class , 'product']);
Route::post('/logout', [ApiController::class, 'logout']);
Route::get('/user-add-product' , [HomeController::class , 'useraddproduct']);

//admin-routes
Route::get('/add-customer' , [HomeController::class , 'addcustomer']);
Route::get('/add-product' , [HomeController::class , 'addproduct']);
Route::get('/add-purchase' , [HomeController::class , 'addpurchase']);
Route::get('/add-user' , [HomeController::class , 'adduser']);
Route::get('/admin-pricing' , [HomeController::class , 'adminpricing']);
Route::get('/countrieslist' , [HomeController::class , 'countrieslist']);
Route::get('/coupon' , [HomeController::class , 'coupon']);
Route::get('/cust-product-acceptance' , [HomeController::class , 'custproductaccept']);
Route::get('/cust-transaction' , [HomeController::class , 'custtransaction']);
Route::get('/customer' , [HomeController::class , 'customer']);
Route::get('/edit-country' , [HomeController::class , 'editcountry']);
Route::get('/edit-purchase' , [HomeController::class , 'editpurchase']);
Route::get('/admin-dashboard' , [HomeController::class , 'admindashboard']);
Route::get('/product-acceptance' , [HomeController::class , 'productaccept']);
Route::get('/admin-products' , [HomeController::class , 'adminproducts']);
Route::get('/purchaselist' , [HomeController::class , 'purchaselist']);
Route::get('/transaction' , [HomeController::class , 'transaction']);
});


Route::middleware('auth:web')->group(function () {
    Route::get('user', function () {
        return auth()->user();
    });

});
