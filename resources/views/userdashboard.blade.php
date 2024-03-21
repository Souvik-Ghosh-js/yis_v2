<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop- USER</title>

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
<a id="notificationButton" href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
    <img src="assets/img/icons/notification-bing.svg" alt="img">
    <span class="badge rounded-pill">0</span>
</a>

<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<form method="post" action="/api/clear_user_not">
    @csrf
<button type="submit" class="clear-noti"> Clear All </button>
</form>
</div>
<div class="noti-content">
<ul class="notification-list">
<!-- <div class="notification-list"> -->
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
<!-- </div> -->





</ul>
</div>
</div>
</li>

<li class="nav-item dropdown has-arrow main-drop">
    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
    <span class="user-img"><img src="assets/img/profiles/image.png" alt="">
    <span class="status online"></span></span>
    </a>
    <div class="dropdown-menu menu-drop-user">
    <div class="profilename">
    <div class="profileset">
    <span class="user-img"><img src="assets/img/profiles/image.png" alt="">
    <span class="status online"></span></span>
    <div class="profilesets">
    <h6>User Name</h6>
    </div>
    </div>
    <hr class="m-0">
    <a class="dropdown-item" href="/user-profile"> <i class="me-2" data-feather="user"></i> My Profile</a>
    <hr class="m-0">
    <a class="dropdown-item logout pb-0" href="/signup-page"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
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
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count">
            <div class="dash-counts">
            <h4>₹ 10000</h4>
            <h5>Wallet Balance</h5>
            </div>
            <div class="dash-imgs">
            <i data-feather="user"></i>
            </div>
            </div>
            </div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>100</h4>
<h5>Warehouse ID</h5>
</div>
<div class="dash-imgs">
<i data-feather="user"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>100</h4>
<h5>Delivered</h5>
</div>
<div class="dash-imgs">
<i data-feather="file-text"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das3">
<div class="dash-counts">
<h4>0 packages</h4>
<h5>Shipment</h5>
</div>
<div class="dash-imgs">
<i data-feather="file"></i>
</div>
</div>
</div>
</div>
    <div class="content">
        <div class="page-header">
        <div class="page-title">
        <h2>Proof of purchase</h2>
        </div>
        </div>
<form method="post" action="/api/PAR" enctype="multipart/form-data">
    @csrf
        <div class="card">
        <div class="card-body">
        <div class="row">
        <div class="col-lg-6 col-sm-8 col-12">
        <div class="form-group">
        <label>Product Title<span class="manitory">*</span></label>
        <input type="text" name="name" id="name" placeholder="Product Title">
        </div>
        </div>
        <div class="col-lg-6 col-sm-8 col-12">
        <div class="form-group">
        <label>Product Description<span class="manitory">*</span></label>
        <input type="text" name="description" id="description" placeholder="Product Description">
        </div>
        </div>
        <div class="col-lg-12">
        <div class="form-group">
        <label> Product Image<span class="manitory">*</span></label>
        <div class="image-upload">
        <input type="file" name="image" id="image">
        <div class="image-uploads">
        <img src="assets/img/icons/upload.svg" alt="img">
        <h4>Drag and drop a file to upload</h4>
        </div>
        </div>
        </div>
        <div class="col-lg-12">
        <div class="form-group">
        <label> Proof of purchase</label>
        <div class="image-upload">
  <input type="file" name="image" id="image">
  <div class="image-uploads">
    <img src="assets/img/icons/upload.svg" alt="img">
    <h4>Drag and drop a file to upload</h4>
  </div>
</div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <button type ="submit"  class="btn btn-submit me-2">Submit Request and pay ₹500</submit>
        </div>

        </div>
        </div>
        </div>
        </div>
        </form>
        </div>


<!-- The popup -->
<div id="myPopup" class="popup">
  <!-- Popup content -->
  <div class="popup-content">
    <span class="close">&times;</span>
    <p id="uploadedImageName"></p>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Get the file input and the popup
  var fileInput = document.getElementById("image");
  var popup = document.getElementById("myPopup");

  // When a file is selected, show the popup with the uploaded image name
  fileInput.addEventListener("change", function() {
    var uploadedImageName = fileInput.files[0].name;
    var uploadedImageNameElement = document.getElementById("uploadedImageName");
    uploadedImageNameElement.textContent = "Image uploaded: " + uploadedImageName;

    popup.style.display = "block";

    // Close the popup after 3 seconds
    setTimeout(function() {
      popup.style.display = "none";
    }, 1500);
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
});
</script>
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

/* Popup content */
.popup-content {
  background-color: green;
  margin: 20% auto; /* 15% from the top and centered */
  padding: 5px 20px;
  width: 15%;
  color: #fff;
  border: 1px solid green; /* Could be more or less, depending on screen size */
  text-align: center;
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
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">Your Couriers in Kailash Nagar</h4>
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>

<th>Action</th>

<th>Product Id</th>
<th>Product Name</th>
<th>Description</th>

<th>Status</th>
<th>Address</th>

<th> Date</th>
<th>In wareHouse </th>
</tr>
</thead>
<!-- Your existing table structure -->
<tbody>
                    @foreach ($products as $product)


                    <td style="display: flex; flex-direction: row !important;">
                    @if ($product->status === 'Received')
                        <form method="post" action="/api/user/status">
                            <input type="hidden" name="productId" value="{{ $product->product_id }}">
                            @csrf
                            <button class="badges bg-lightgreen" style="color:#fff; text-decoration: none; outline:none; border: none; padding: 10px 15px" >Accept</button>
                        </form>
                        <form method="post" action="/api/user/status1">
                            <input type="hidden" name="productId" value="{{ $product->product_id }}">
                            @csrf
                            <button class="badges bg-lightred" style="color:#fff; outline:none; border: none; padding: 10px 15px; text-decoration: none;">Request Return</button>
                        </form>
                        <button class="badges bg-lightgreen" style="color:#fff; outline:none; border: none; padding: 10px 15px; text-decoration: none;" onclick="showConfirmation1('Address', '{{ $product->product_id }}')">Dispatch</button>

                        @elseif ($product->status === 'Accepted' || $product->status === 'Request for Return')
                            <button class="badges bg-lightgreen" style="color:#fff; outline:none; border: none; padding: 10px 15px; text-decoration: none;" onclick="showConfirmation1('Address', '{{ $product->product_id }}')">Dispatch</button>
                    @else
                        <span>Your Product is {{ $product->status }}</span>
                    @endif
                     </td>

                            <td><a href="javascript:void(0);">{{ $product->product_id }}</a></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><span class="">{{ $product->status }}</span></td>
                            <td>{{ $product->address }}</td>

                            <td>{{ $product->created_at->format('d-m-Y') }}</td>
                            <td>
                                @if($product->days != -1)
                                    {{ $product->days }} days
                                @else
                                    Not Accepted Yet
                                @endif
                            </td>

                        </tr>

                    @endforeach
                </tbody>

</table>
<div class="confirmation-popup" id="confirmationPopup1">
    <h2>Confirm Action</h2>
    <p>Enter Your Address
        <span id="confirmationAction1">


        <form method="post" action="/api/add/address">
            @csrf
        <div class="row">
            <div class="col-lg-6 col-sm-8 col-12">

            <input type="hidden" name="productId" id="popupProductId" value="">

                <div class="form-group">
                    <label>Country<span class="mandatory">*</span></label>
                    <input type="text" name="country" id="country" placeholder="Country">
                </div>
            </div>
            <div class="col-lg-6 col-sm-8 col-12">
                <div class="form-group">
                    <label>City<span class="mandatory">*</span></label>
                    <input type="text" name="city" id="city" placeholder="City">
                </div>
            </div>
            <div class="col-lg-6 col-sm-8 col-12">
                <div class="form-group">
                    <label>Postal Code<span class="mandatory">*</span></label>
                    <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code">
                </div>
            </div>
            <div class="col-lg-6 col-sm-8 col-12">
                <div class="form-group">
                    <label>Landmark<span class="mandatory">*</span></label>
                    <input type="text" name="landmark" id="landmark" placeholder="Landmark">
                </div>
            </div>
        </div>
    <button class="yes" onclick="confirmAction(true, '')">Confirm</button>
    <button class="no" onclick="confirmAction(false)">No</button>
    </form>



        </span>
    </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
    .confirmation-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        z-index: 9999;
    }

    .confirmation-popup h2 {
        margin-top: 0;
    }

    .confirmation-popup button {
        margin-top: 10px;
        padding: 5px 10px;
        cursor: pointer;
    }

    .confirmation-popup button:first-child {
        margin-right: 10px;
    }
</style>
<style>
    .badges {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border-radius: 5px;
        cursor: pointer;
    }
    .bg-lightgreen {
        background-color: lightgreen;
    }
    .bg-lightred {
        background-color: lightcoral;
    }
    .confirmation-popup .yes{
        background-color: green;
        color:white;
        border: transparent;
    }
    .confirmation-popup .no{
        background-color: red;
        color:white;
        border: transparent;
    }
</style>



<div class="confirmation-popup" id="confirmationPopup">
    <h2>Confirm Action</h2>
    <p>
        <span id="confirmationAction">

        <p>Please cancel from your ordered Application/website</p>
            <button type="button" class="yes" onclick="confirmAction(true, 'Action')">Confirm</button>
            <button type="button" class="no" onclick="confirmAction(false)">No</button>
        </span>
    </p>
</div>

<script>

function showConfirmation1(action, productId) {
    document.getElementById('popupProductId').value = productId; // Set the value of the hidden input field with the product ID
    document.getElementById('confirmationAction1').textContent = action;
    document.getElementById('confirmationPopup1').style.display = 'block';
}


    function showConfirmation(action) {
        document.getElementById('confirmationAction').textContent = action;
        document.getElementById('confirmationPopup').style.display = 'block';
    }

    function confirmAction(confirmation, action) {
        if (confirmation) {
            // Here you can call the appropriate function based on the action
            if (action === 'Dispatch') {
                // Dispatch function
                showNotification('Request Dispatch successful', 'green');
            } else if (action === 'Return') {
                // Return function
                showNotification('Request Return successful', 'red');
            }
        }
        document.getElementById('confirmationPopup').style.display = 'none';
        document.getElementById('confirmationPopup').style.display = 'none';
    }

    function showNotification(message, color) {
        const notification = document.createElement('div');
        notification.textContent = message;
        notification.style.backgroundColor = color;
        notification.style.color = '#fff';
        notification.style.padding = '10px';
        notification.style.position = 'fixed';
        notification.style.top = '10px';
        notification.style.right = '10px';
        notification.style.borderRadius = '5px';
        notification.style.zIndex = '9999';
        document.body.appendChild(notification);

    }
</script>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
