<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>YIS Checkout</title>

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
<div class="content">
<div class="row">
<div class="col-lg-6 col-sm-12 ">
<div class="card card-order">
    <div class="page-header m-2">
    <div class="page-title">
    <h4>Your Indian Shop/Cart</h4>
    <h5>Transaction id : {{$trn}}</h5>
    </div>
    </div>
<div class="card-body">
<div class="row">
</div>
</div>
<div class="split-card">
</div>
<div class="card-body pt-0">
<div class="totalitem">
<h4>Total items : 1</h4>
</div>
<div class="product-table">
    <ul class="product-lists">
        <li>
            <div class="productimg">
                <div class="productimgs">
                    <img src="{{ $addedProduct->image }}" alt="Product Image">
                </div>
                <div class="productcontet">
                    <h4>{{ $addedProduct->name }}</h4>
                    <div class="productlinkset">
                        <h5>{{ $addedProduct->qty }}</h5>
                    </div>
                </div>
            </div>
        </li>
        <li>Rs.{{ $addedProduct->price }}</li>
        <li><a href="#" class="confirm-text"><img src="assets/img/icons/delete-2.svg" alt="Delete"></a></li>
    </ul>
</div>

<div class="split-card">
</div>
<div class="card-body pt-0 pb-2 col-lg-8 col-12">
<div class="setvalue">
<ul>
<li>
<h5>Subtotal </h5>
<h6>Rs.{{ $addedProduct->price }}</h6>
</li>
<li>

</li>
<li class="coupon">
    <div class="col-lg-12 col-12 p-2">
        <div class="row">
            <div class="col-lg-8 col-12">
            <select class="form-control form-small select">
                @foreach($coupons as $coupon)
                <option value="{{ $coupon->id }}" data-discount="{{ $coupon->discount }}">{{ $coupon->coupon_name }}</option>
                @endforeach
            </select>
            </div>
            <div class="col-lg-4 col-12">
                <button type="button" class="btn-totallabel m-0" style="outline:none; border: transparent; font-weight: 600">Apply&nbsp;Coupon</button>
            </div>
        </div>
    </div>
</li>

<li class="total-value">
<h5>Total </h5>
<h6>Rs.{{ $addedProduct->price }}</h6>
</li>
</ul>
</div>





<button type="button" class="btn-totallabel" id="totalAmount" style="outline:none; border: transparent; font-weight: 600">
    Checkout -   Rs. {{ $addedProduct->price}}
</button>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const couponSelect = document.querySelector('.form-control');
        const applyCouponBtn = document.querySelector('.btn-totallabel');
        let totalPrice = parseFloat("{{ $addedProduct->price }}");
        let totalValueElement = document.querySelector('.total-value h6');
        let totalAmountElement = document.getElementById('totalAmount');
        let checkoutButton = document.getElementById('checkoutButton');

        applyCouponBtn.addEventListener('click', function() {
            const selectedCouponOption = couponSelect.options[couponSelect.selectedIndex];
            const discount = parseFloat(selectedCouponOption.dataset.discount);

            if (!isNaN(discount)) {
                const discountedPrice = totalPrice - discount;
                totalValueElement.textContent = 'Rs.' + discountedPrice.toFixed(2);
                totalAmountElement.textContent = 'Checkout -   Rs.' + discountedPrice.toFixed(2);
            } else {
                alert('Please select a valid coupon.');
            }
        });
    });
</script>

</div>
</div>
</div>
<div class="col-lg-6 col-sm-12 mt-4">
    <img src="images/product/delivery.gif" class="img-fluid" style="height:80%">
</div>
</div>
</div>
</div>
<div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Order Deletion</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="delete-order">
<img src="assets/img/icons/close-circle1.svg" alt="img">
</div>
<div class="para-set text-center">
<p>The current order will be deleted as no payment has been <br> made so far.</p>
</div>
<div class="col-lg-12 text-center">
<a class="btn btn-danger me-2">Yes</a>
<a class="btn btn-cancel" data-bs-dismiss="modal">No</a>
</div>
</div>
</div>
</div>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/select2/js/custom-select.js"></script>
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
