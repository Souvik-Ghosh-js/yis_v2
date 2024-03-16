<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop- USER</title>

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

        <ul class="nav user-menu">



            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img"><img src="assets/img/profiles/avatar-17.jpg" alt="">
                <span class="status online"></span></span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                <div class="profileset">
                <span class="user-img"><img src="assets/img/profiles/avatar-17.jpg" alt="">
                <span class="status online"></span></span>
                <div class="profilesets">
                <h6>User Name</h6>
                </div>
                </div>
                <hr class="m-0">
                <a class="dropdown-item" href="/user-profile"> <i class="me-2" data-feather="user"></i> My Profile</a>
                <hr class="m-0">
                <a class="dropdown-item logout pb-0" href="/login-page"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                </div>
                </div>
                </li>
        </ul>


        <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="/user-profile">My Profile</a>
        <a class="dropdown-item" href="/signup-page">Logout</a>
        </div>
        </div>

        </div>


        <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
        <ul>
        <li>
        <a href="/user-dashboard"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
        </li>
        <li><a href="">Assisted Purchase</a></li>
        <li><a href="">Indian Shops</a></li>
        <li><a href="">Prohibited Items</a></li>
        <li><a href="">Shipping Calc</a></li>
        <li>
        <a href="/purchase-report"><i data-feather="file"></i><span> Wallet</span> </a>
        </li>
        </ul>
        </div>
        </div>
        </div>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Profile</h4>
<h6>User Profile</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="profile-set">
<div class="profile-head">
</div>
<div class="profile-top">
<div class="profile-content">
<div class="profile-contentimg">
<img src="assets/img/customer/customer5.jpg" alt="img" id="blah">
</div>
<div class="profile-contentname">
<h1>{{$user->name}}</h1>
</div>
</div>
<button type="button" id="openPopupBtn" class="badges bg-lightgreen" style="color:#fff; text-decoration: none; outline:none; border: none; padding: 10px 15px; font-size: 22px">Add Money to Wallet</button>
</div>
<style>
/* Styles for the popup */
.popup {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Center the popup */
.popup-content {
  background-color: #fefefe;
  margin:20% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%; /* Set width here */
  text-align: center;
}
.popup-content form{
    display: flex;
  flex-direction:column;
}
.popup-content input{
    margin: 10px;
    border : transparent;
    border-bottom: 1px solid #555;
    font-size: 22px;
    padding: 5px 5px;
}
/* Close button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<!-- The popup -->
<div id="myPopup" class="popup">
  <!-- Popup content -->
  <div class="popup-content">
    <span class="close">&times;</span>
    <h2>Add Money</h2>
    <form>
    <input type="text" id="moneyInput" placeholder="Enter amount">
    <button id="addMoneyBtn" class="badges bg-lightgreen" style="color:#fff; text-decoration: none; outline:none; border: none; padding: 10px 15px; font-size: 18px">Add Money</button>
  <form>
</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Get the button and the popup
  var openPopupBtn = document.getElementById("openPopupBtn");
  var popup = document.getElementById("myPopup");

  // When the button is clicked, show the popup
  openPopupBtn.addEventListener("click", function() {
    popup.style.display = "block";
  });

  // When the user clicks on <span> (x), close the popup
  var closeBtn = document.getElementsByClassName("close")[0];
  closeBtn.addEventListener("click", function() {
    popup.style.display = "none";
  });

  // When the user clicks anywhere outside of the popup, close it
  window.addEventListener("click", function(event) {
    if (event.target == popup) {
      popup.style.display = "none";
    }
  });

  // Add Money button functionality
  var addMoneyBtn = document.getElementById("addMoneyBtn");
  addMoneyBtn.addEventListener("click", function() {
    var moneyInput = document.getElementById("moneyInput").value;
    // Here, you can perform any action with the entered money value
    alert("Money added: " + moneyInput);
    // Close the popup
    popup.style.display = "none";
  });
});
</script>
<div class="row m-4">
    <div class="d-flex col-lg-6 col-12">
    <h4>Email ID: </h4> <span class="m-1" style="font-size: 16px;">{{$user->email}}</span>
    </div>
    <div class="d-flex col-lg-6 col-12">
        <h4>Phone Number: </h4><span class="m-1" style="font-size: 16px;">{{$user->contact}}</span>
    </div>
    <div class="d-flex col-lg-6 col-12">
    <h4>Referral Code: </h4>
    <span class="m-1" style="font-size: 16px;">{{ $referralCode }}</span>
</div>
    <div class="d-flex col-lg-6 col-12">
        <h4>Wallet Balance: </h4> <span class="m-1" style="font-size: 16px;">₹ 5000</span>
    </div>
    </div>
    <div class="card">
    <div class="card-body">
    <div class="requiredfield">
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="form-group">
    <h2> Your Warehouse</h2>
    </div>
    </div>
    <div class="col-lg-6 col-sm-12">
    <div class="productdetails productdetailnew">
    <ul class="product-bar">
    @foreach ($warehouses as $warehouse)
    <li>
                        <h4>Area</h4>
                        <h6 class="manitorygreen">{{ $warehouse->area }}</h6>
                    </li>
                    <li>
                        <h4>WarehouseId</h4>
                        <h6 class="manitorygreen">{{ $warehouse->id }}</h6>
                    </li>
                    <li>
                        <h4>Address</h4>
                        <h6 class="manitorygreen">{{ $warehouse->address }}</h6>
                    </li>
                    <li>
                        <h4>Street</h4>
                        <h6 class="manitorygreen">{{ $warehouse->street }}</h6>
                    </li>
                    <li>
                        <h4>Capacity</h4>
                        <h6 class="manitorygreen">{{ $warehouse->capacity }}</h6>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="productdetails productdetailnew">
                <ul class="product-bar">
                    <li>
                        <h4>Landmark</h4>
                        <h6 class="manitoryblue">{{ $warehouse->landmark }}</h6>
                    </li>
                    <li>
                        <h4>City</h4>
                        <h6 class="manitoryblue">{{ $warehouse->city }}</h6>
                    </li>
                    <li>
                        <h4>Pincode</h4>
                        <h6 class="manitoryblue">{{ $warehouse->pincode }}</h6>
                    </li>
                    <li>
                        <h4>State</h4>
                        <h6 class="manitoryblue">{{ $warehouse->state }}</h6>
                    </li>
                    <li>
                        <h4>Country</h4>
                        <h6 class="manitoryblue">{{ $warehouse->country }}</h6>
                    </li>@endforeach
    </ul>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group mb-0">
    <a href="" class="btn btn-submit me-2">Click Here to change warehouse</a>
    </div>
    </div>
    </div>
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

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
