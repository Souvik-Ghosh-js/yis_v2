<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop Assisted Purchase</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">
<div class="header">

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

</div>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    <ul>
    <li><a href="/admin-dashboard">Assisted Purchase Request</a></li>
    <li><a href="/product-acceptance">Product Acceptance</a></li>
    <li><a href="/transaction">All Transactions</a></li>
    <li><a href="/admin-products">Products</a></li>
    <li><a href="/countrieslist">Country Details</a></li>
    <li><a href="/coupon">Manage Coupons</a></li>
    <li class="submenu">
    <a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Customer Info</span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="/customer">Customer Informations</a></li>
    <li><a href="/cust-product-acceptance">Customer Product Acceptance</a></li>
    <li><a href="/cust-transaction">Customer Transactions</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> Warehouses</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="/purchaselist">Warehouse List</a></li>
    <li><a href="/edit-purchase">Add Warehouse</a></li>
    </ul>
    </li>

    <li><a href="/admin-pricing">Plans</a></li>
    <li> <a href=""><img src="assets/img/icons/log-out.svg" alt="img"><span>logout</span></a>
    </li>
    </ul>
    </div>
    </div>
    </div>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product List</h4>
<h6>Manage your products</h6>
</div>
<div class="page-btn">
<a href="/add-product" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product</a>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-input">
<a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
</div>
<div class="table-responsive">
<table class="table  datanew">
<thead>
<tr>

<th>Request Id</th>
<th>Customer Id</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Description</th>
<th>Product URL</th>
<th>Request timestamp</th>
</tr>
</thead>
<tbody>
        @foreach($userAssistedPurchaseData as $purchase)
            <tr>
                <td>{{ $purchase->id }}</td> {{-- Assuming id is the request id --}}
                <td>{{ $purchase->user_id }}</td>
                <td>{{ $purchase->product_name }}</td>
                <td>{{ $purchase->price }}</td>
                <td>{{ $purchase->product_description }}</td>
                <td><a href="https://{{$purchase->url}}">{{ $purchase->url }}</a></td>

                <td>{{ $purchase->created_at }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
