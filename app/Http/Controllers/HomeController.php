<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Product;
use App\Models\AddedProduct;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



use App\Models\UserAssistedPurchase;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function faq(){
        return view('faq');
    }
    public function pricing(){
        return view('pricing');
    }
    public function product_detail(){
        return view('product-detail');
    }
    public function products(){
        return view('products');
    }
    public function shipping(){
        return view('shippingcal' ,['value' => '230.89']);
    }
    public function signup(){
        return view('sign-up');
    }
    public function login(){
        return view('sign-in');
    }

public function userdashboard()
{
    $warehouses = Warehouse::all();
    $userProducts = Product::where('user_id', auth()->id())->get();

    // Sort products based on status
    $sortedProducts = $userProducts->sortBy(function ($product) {
        switch ($product->status) {
            case 'Accepted':
                return 1;
            case 'Returned':
                return 2;
            case 'Received':
                return 3;
            case 'Dispatch':
                return 4;
            case 'Shipped':
                return 5;
            case 'Delivered':
                return 6;
            default:
                return 7; // or any default value for unknown statuses
        }
    })->values()->all();

    $notifications = DB::table('user_notifications')
        ->where('self', 1)
        ->orderBy('created_at', 'desc') // Order by creation timestamp in descending order
        ->get();

    return view('userdashboard', ['warehouses' => $warehouses, 'products' => $sortedProducts, 'notifications' => $notifications]);
}


    public function editproduct($product_id)
    {
    $product = Product::find($product_id);


    return view('changeproductstatus', ['product' => $product]);
    }
    public function warehousedashboard()
    {
        $warehouses = Warehouse::all();
        $products = Product::all();

        // Sort products based on status
        $sortedProducts = collect($products)->sortBy(function ($product) {
            switch ($product->status) {
                case 'Accepted':
                    return 1;
                case 'Returned':
                    return 2;
                case 'Received':
                    return 3;
                case 'Dispatch':
                    return 4;
                case 'Shipped':
                    return 5;
                case 'Delivered':
                    return 6;
                default:
                    return 7; // or any default value for unknown statuses
            }
        })->values()->all();

        $notifications = DB::table('user_notifications')
        ->where('self', 0)
        ->orderBy('created_at', 'desc') // Order by creation timestamp in descending order
        ->get();

        return view('warehousedashboard', ['warehouses' => $warehouses, 'products' => $sortedProducts, 'notifications' => $notifications]);

    }
    public function purchasereport(){
        return view('purchasereport');
    }
    public function userprofile()
    {
    // Get the authenticated user
    $user = Auth::user();

    // Fetch referral code
    $referralCode = $user->referral->referral_code;
    // Fetch other data
    $warehouses = Warehouse::all();
    $products = Product::all();
    $notifications = DB::table('user_notifications')
        ->where('self', 0)
        ->get();

    // Pass user data and referral code to the view
    return view('userprofile', [
        'user' => $user,
        'referralCode' => $referralCode,
        'warehouses' => $warehouses,
        'products' => $products,
        'notifications' => $notifications,
    ]);
    }

    public function addcustomer(){
            return view('admin/addcustomer');
    }
    public function addproduct(){
        return view('admin/addproduct');
    }
    public function useraddproduct(){
        return view('addproduct');
    }
    public function addpurchase(){
        return view('admin/addpurchase');
    }
    public function adduser(){
        return view('admin/adduser');
    }
    public function adminpricing(){
        return view('admin/admin-pricing');
    }
    public function countrieslist(){
        return view('admin/countrieslist');
    }
    public function coupon(){
        $coupons = Coupon::all();
        return view('admin/coupon', ['coupons' => $coupons]);
    }
    public function custproductaccept(){
        return view('admin/cust_product_acceptance');
    }
    public function custtransaction(){
        return view('admin/cust_transaction');
    }
    public function customer(){
        $customers = User::where('type', 0)->get();

        return view('admin/customer', ['customers' => $customers]);
    }
    public function editcountry(){
        return view('admin/editcountry');
    }
    public function editpurchase(){
        return view('admin/editpurchase');
    }
    public function admindashboard(){
        $userAssistedPurchaseData = UserAssistedPurchase::all();

        return view('admin/index', ['userAssistedPurchaseData' => $userAssistedPurchaseData]);
    }
    public function productaccept(){
        $products = Product::all();
        return view('admin/product_acceptance', ['products' => $products]);
    }

    public function adminproducts(){
        $addedProducts = AddedProduct::all();

        return view('admin/products', ['addedProducts' => $addedProducts]);
    }
    public function purchaselist(){
        $warehouses = Warehouse::all();

        return view('admin/purchaselist', ['warehouses' => $warehouses]);
    }
    public function transaction(){
        return view('admin/transaction');
    }
    public function cart(){
        return view('cart');
    }

}
