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
<nav class="navbar navbar-expand-lg">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <a class="navbar-brand" href="/">
                                    <strong>Your <span>Indian</span> Shop</strong>
                                </a>

                                <div class="d-lg-none">
                                    <a href="/signup-page" ><span style="font-size:15px">Sign In</span></a>
                                    <!-- <a href="sign-in.html" class="bi-person custom-icon me-3"></a> -->
                                </div>

                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/">Home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/pricing">Pricing</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/about">About</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/faq">FAQs</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/contact">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="d-none d-lg-block">
                                            <a href="/signup-page" ><span style="font-size:15px">Sign In</span></a>
                                            <!-- <a href="sign-in.html" class="bi-person custom-icon me-3"></a> -->
                                        </div>
                                </div>
                            </div>
                        </nav>
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
<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>
