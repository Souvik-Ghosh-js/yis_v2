 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop warehouse</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
            <li><a href="customer.html">Customer Informations</a></li>
        <li><a href="cust_product_acceptance.html">Customer Product Acceptance</a></li>
        </ul>
        </li>
        <li class="submenu">
        <a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> Warehouses</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="/purchaselist">Warehouse List</a></li>
        <li><a href="editpurchase.html">Add Warehouse</a></li>
        </ul>
        </li>

        <li><a href="admin-pricing.html">Plans</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Warehouse List</h4>
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
<table class="table datanew">
<thead>
<tr>

<th>Locality</th>
<th>Warehouse Id</th>
<th>Address</th>
<th>Street</th>
<th>Landmark</th>
<th>City</th>
<th>Pin code</th>
<th>Country</th>
<th>Capacity</th>
<th>Action</th>
</tr>
</thead>
<tbody>
        @foreach ($warehouses as $warehouse)
            <tr>
                <td>{{ $warehouse->area }}</td>
                <td>{{ $warehouse->id }}</td>
                <td>{{ $warehouse->address }}</td>
                <td>{{ $warehouse->street }}</td>
                <td>{{ $warehouse->landmark }}</td>
                <td>{{ $warehouse->city }}</td>
                <td>{{ $warehouse->pincode }}</td>
                <td>{{ $warehouse->country }}</td>
                <td>{{ $warehouse->capacity }}</td>
                <td>
                    <a class="me-3" href="editpurchase/{{ $warehouse->id }}">
                        <img src="assets/img/icons/edit.svg" alt="Edit">
                    </a>
                    <a class="me-3 confirm-text" href="javascript:void(0);">
                        <img src="assets/img/icons/delete.svg" alt="Delete">
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
</div>
</div>
</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
