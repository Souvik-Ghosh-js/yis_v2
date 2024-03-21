<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop Countries</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
    <li><a href="/product-acceptance">Proof of Purchase</a></li>
    <li><a href="/transaction">All Transactions</a></li>
    <li><a href="/admin-products">Products</a></li>
    <li><a href="/countrieslist">Country Details</a></li>
    <li><a href="/coupon">Manage Coupons</a></li>
        <li class="submenu">
        <a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Customer Info</span> <span class="menu-arrow"></span></a>
        <ul>
            <li><a href="customer.html">Customer Informations</a></li>
        <li><a href="cust_product_acceptance.html">Customer Proof of Purchase</a></li>
        <li><a href="cust_transaction.html">Customer Transactions</a></li>
        </ul>
        </li>
        <li class="submenu">
        <a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> Warehouses</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="purchaselist.html">Warehouse List</a></li>
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
<h4>Country List</h4>
<h6>Manage Countries</h6>
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
    <th>
        <label class="checkboxs">
        <input type="checkbox" id="select-all">
        <span class="checkmarks"></span>
        </label>
        </th>
<th>Country Name</th>
<th>Price</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
 <tr>
    <td>
        <label class="checkboxs">
        <input type="checkbox">
        <span class="checkmarks"></span>
        </label>
        </td>
<td>China</td>
<td>Beijing </td>
<td>
<div class="status-toggle d-flex justify-content-between align-items-center">
<input type="checkbox" id="user1" class="check">
<label for="user1" class="checktoggle">checkbox</label>
</div>
</td>
<td>
<a class="me-3" href="editcountry.html">
<img src="assets/img/icons/edit.svg" alt="img">
</a>
<a class="me-3 confirm-text" href="javascript:void(0);">
<img src="assets/img/icons/delete.svg" alt="img">
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="page-header">
    <div class="page-title">
    <h4>Add Country</h4>
    </div>
    </div>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Country Name</label>
    <input type="text">
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Price</label>
    <input type="text">
    </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-12">
        <div class="form-group">
    <a href="javascript:void(0);" class="btn btn-submit m-3">Submit</a>
    </div>
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

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
