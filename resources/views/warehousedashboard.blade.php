<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop- Warehouse Manager</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

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

<ul class="nav user-menu">

<li class="nav-item dropdown">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<img src="assets/img/icons/notification-bing.svg" alt="img"> <span class="badge rounded-pill">0</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<form method="post" action="/api/clear_wm_not">
    @csrf
<button type="submit" class="clear-noti"> Clear All </button>
</form>
</div>
<div class="noti-content">
<ul class="notification-list">
@foreach ($notifications as $notification)
        <li class="notification-message">
            <a href="">
                <div class="media d-flex">
                    <span class="avatar flex-shrink-0">
                        <img alt="" src="assets/img/profiles/avatar-04.jpg">
                    </span>
                    <div class="media-body flex-grow-1">
                        <p class="noti-details">
                            {{ $notification->message }}
                        </p>
                    </div>
                </div>
            </a>
        </li>
    @endforeach
</ul>
</div>
</div>
</li>
</ul>
</div>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="/warehouse-dashboard"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
</ul>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="card mb-0">
<div class="card-body">
    <div class="table-top">
<div class="search-set">
<div class="search-input">
<a class="btn btn-searchset">
<img src="assets/img/icons/search-white.svg" alt="img">
</a>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-12">
<select class="form-control">
<option>Choose Status</option>
<option>Inprogress</option>
<option>Complete</option>
</select>
</div>
</div>
<h4 class="card-title">Your Couriers in Kailash Nagar</h4>
<div class="table-responsive">
<table class="table datanew">
<thead>
<tr>
    <th>
        <label class="checkboxs">
            <input type="checkbox" id="select-all">
            <span class="checkmarks"></span>
    </th>
<th>Action</th>
<th>Product Id</th>
<th>Product Name</th>

<th>Description</th>
<th>Status</th>
<th>Address</th>
<th> Date</th>
</tr>
</thead>
<tbody>
    @foreach ($products as $product)
        <tr>
        <td>
        <label class="checkboxs">
            <input type="checkbox">
            <span class="checkmarks"></span>
    </td>
        <td>
        <a class="me-3" href="/edit-product/{{$product->product_id}}">
            <img src="assets/img/icons/edit.svg" alt="img">
            </a>
        </td>

            <td><a>{{ $product->product_id }}</a></td>
            <td >
                {{ $product->name }}
            </td>
            <td class="productimgname">
                {{ $product->description }}
            </td>
            <td><span class="">{{ $product->status }}</span></td>
            <td>{{ $product->address }}</td>

            <td>{{ $product->created_at->format('d-m-Y') }}</td>
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

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/select2/js/custom-select.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
