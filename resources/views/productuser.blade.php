<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop Products</title>
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="css/slick.css"/>

<link href="css/tooplate-little-fashion.css" rel="stylesheet">
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
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href=""><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li><a href="/user-add-product">Assisted Purchase</a></li>
<li><a href="">Indian Shops</a></li>
<li><a href="">Prohibited Items</a></li>
<li><a href="/user-products">Products</a></li>

<li><a href="/shipping">Shipping Calc</a></li>
<li>
<a href="/purchase-report"><i data-feather="file"></i><span> Wallet</span> </a>
</li>
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
                        <h5><b>{{ $product->category }}</b></h5>
                        <h2 style="color: red"><b>{{ $product->name }}</b></h2>
                        <h3>{{ $product->price }}</h3>
                    <form method="POST" action="/api/add_to_cart">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-submit mt-3">Add to Cart <i data-feather="file"></i></button>
                    </form>
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
<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>
