<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Your Indian Shop Add Product</title>

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
            <li><a href="/user-add-product">Assisted Purchase Request</a></li>


            </li>
            </ul>
            </div>
            </div>
            </div>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product Add</h4>
<h6>Add new product</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
    <form method="post" action="/api/user-add-product" enctype="multipart/form-data">
        @csrf
<div class="form-group">
<label>Product Name</label>
<input type="text" name="name">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Price</label>
<input type="text" name="price">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Description</label>
<input type="text" name="desc">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Url</label>
    <input type="text" name="url">
    </div>
    </div>
<div class="col-lg-3 col-sm-6 col-12">

    </div>
    </div>
<div class="col-lg-12">
<div class="form-group">
<label> Product Image</label>
<div class="image-upload">
<input type="file" name="image">
<div class="image-uploads">
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
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
<div class="col-lg-12">
<button class="btn btn-submit me-2" type="submit">Submit</button>
</form>
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
