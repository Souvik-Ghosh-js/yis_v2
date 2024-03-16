<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop Products</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>
<div class="main-wrappers">
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
                <li><a href="customer.html">Customer Informations</a></li>
            <li><a href="cust_product_acceptance.html">Customer Product Acceptance</a></li>
            <li><a href="cust_transaction.html">Customer Transactions</a></li>
            </ul>
            </li>
            <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> Warehouses</span> <span class="menu-arrow"></span></a>
            <ul>
            <li><a href="/purchaselist">Warehouse List</a></li>
            <li><a href="/edit-purchase">Add Warehouse</a></li>
            </ul>
            </li>
            <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/expense1.svg" alt="img"><span>Plans</span> <span class="menu-arrow"></span></a>
            <ul>
            <li><a href="expenselist.html">Plans</a></li>
            <li><a href="createexpense.html">Edit Plans</a></li>
            </ul>
            </li>
            <li> <a href="/logout"><img src="assets/img/icons/log-out.svg" alt="img"><span>logout</span></a>
            </ul>
            </div>
            </div>
            </div>
<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-lg-12 col-sm-12 tabs_wrapper">
<div class="page-header ">
<div class="page-title">
<h4>Products</h4>
</div>
</div>
<div class="tabs_container">
    <div class="tab_content active" data-tab="fruits">
        <div class="row">
            @foreach ($addedProducts as $product)
            <div class="col-lg-3 col-sm-6 d-flex">
                <div class="productset flex-fill">
                    <div class="productsetimg">
                        <img src="assets/img/product/1.jpg" alt="img"> <!-- Assuming 'image' is the column name storing image filenames -->
                        <h6>Qty: {{ $product->qty }}</h6>
                    </div>
                    <div class="productsetcontent">
                        <h5>{{ $product->category }}</h5>
                        <h4>{{ $product->name }}</h4>
                        <h6>{{ $product->price }}&nbsp <a class="me-3" href="editproduct.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
