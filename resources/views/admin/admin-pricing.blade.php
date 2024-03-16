<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Your Indian Shop - Pricing</title>

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
        
        <link rel="stylesheet" href="assets/css/animate.css">
        
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
        
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
        
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
        
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.4/swiper-bundle.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.4/swiper-bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <style>
        
.pricing__table {
    display: flex;
    justify-content: center;
    align-items: center;
    @media (max-width: 640px) {
      margin: 60px 15px;
    }
    .pt__title {
      max-width: 25%;
      flex: 1;
      @media (max-width: 991px) {
        max-width: 50%;
      }
      .pt__title__wrap {
        position: relative;
        flex: 1;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
        font-size: 2rem;
        line-height: 1;
        text-align: center;
        @media (max-width: 991px) {
          font-size: 1.3rem;
        }
        .pt__row {
          &:first-child {
            border-bottom: 0;
          }
          display: flex;
          flex-direction: column;
          justify-content: center;
          font-size: 18px;
          font-weight: 500;
          min-height: 70px;
          padding-left: 16px;
          padding-right: 16px;
          border-bottom: 1px solid rgba(73, 72, 74, .1);
          text-align: center;
          align-items: center;
          @media (max-width: 991px) {
            padding-left: 32px;
            padding-right: 32px;
          }
          @media (max-width: 640px) {
            padding-left: 0;
            padding-right: 15px;
            font-size: 14px;
          }
        }
      }
    }
    .pt__option {
      position: relative;
      flex: 1;
      @media (max-width: 991px) {
        max-width: 100%;
      }
      .pt__option__mobile__nav {
        position: absolute;
        z-index: 1;
        top: 0%;
        bottom: auto;
        left: 0%;
        right: auto;
        display: none;
        justify-content: center;
        width: 100%;
        @media (max-width: 991px) {
          z-index: 2;
          top: 40px;
          display: flex;
          grid-column-gap: 8px;
          grid-row-gap: 8px;
          justify-content: space-between;
          width: 110%;
          margin-left: -5%;
        }
        .mobile__nav__btn {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 40px;
          height: 40px;
          color: #fff;
          border-radius: 50%;
          background-color: #0061FF;
          transition: .25s;
          &:hover {
            background-color: #0057E6;
          }
          &.swiper-button-disabled {
            background-color: #c0beb6;
            pointer-events: none;
          }
          svg {
            width: 16px;
            color: #faf7f2;
          }
        }
      }
      .pt__option__slider {
        @media (max-width: 991px) {
          overflow: hidden;
        }
      }
      .pt__option__item {
        flex: 1;
        width: auto;
        max-width: 30.3333%;
        margin-right: 0;
        @media (max-width: 991px) {
          width: 100%;
          max-width: none;
          flex: none;
        }
        .pt__item {
          position: relative;
          display: flex;
          flex: 1;
          flex-direction: column;
          justify-content: flex-start;
          margin-bottom: 1em;
          overflow: hidden;
          border: 1px solid #eee;
          margin: 10px;
          border-radius: 24px;
          @media (max-width: 991px) {
            border: 1px solid #eee;
            background-color: #fff;
          }
          &.recommend {
            background-color: rgba(#0061FF, .15);
            border: 1px solid #0061FF;
          }
          .pt__item__wrap {
            flex: 1;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 24px 0 0 0;
            font-size: 1.375rem;
            line-height: 1.2;
            position: relative;
            @media (max-width: 991px) {
              font-size: 1.3rem;
            }
          }
          .pt__row {
            display: flex;
            flex-direction: row;
            justify-content: center;
            min-height: 70px;
            padding:10px;
            font-size: 17px;
            font-weight: 300;
            border-bottom: 1px solid rgba(73, 72, 74, .1);
            &:first-child {
              border-bottom: 0;
              font-size: 20px;
              font-weight: 600;
            }
            &:last-child {
              display: inline-flex;
              padding: 20px 10px;
              align-items: center;
              border-bottom: 0;
              button {
                padding: 10px 15px;
                outline: none   ;
                border: none;
                font-weight: 500;
                margin: 2px;
                text-transform: uppercase;
                text-decoration: none;
                color: #fff;
                border-radius: 10px;
                background-color: #0061FF;
                transition: .25s;
                &:hover {
                  background-color: #0057E6;
                }
                @media (max-width: 576px) {
                  padding: 12px 20px;
                }
              }
            }
            @media (max-width: 640px) {
              font-size: 14px;
              font-weight: 400;
            }
          }
        }
      }
    }
  }
  
  h1 {
    text-align: center;
    margin-top: 60px;
    padding: 0 30px;
    font-size: 30px;
    font-weight: 500;
    line-height: 1.4;
  }
    </style>
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
    <li><a href="index.html">Assisted Purchase Request</a></li>
    <li><a href="product_acceptance.html">Product Acceptance</a></li>
    <li><a href="transaction.html">All Transactions</a></li>
    <li><a href="products.html">Products</a></li>
    <li><a href="countrieslist.html">Country Details</a></li>
    <li><a href="coupon.html">Manage Coupons</a></li>
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
    <section class="section-padding m-4">
  <div class="pricing__table">
    <div class="pt__option">
      <div class="pt__option__mobile__nav">
        <a id="navBtnLeft" href="#" class="mobile__nav__btn">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.1538 11.9819H1.81972" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M11.9863 22.1535L1.82043 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
        <a id="navBtnRight" href="#" class="mobile__nav__btn">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.81934 11.9819H22.1534" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M11.9863 22.1535L22.1522 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
      <div class="pt__option__slider swiper" id="pricingTableSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide pt__option__item">
            <div class="pt__item">
              <div class="pt__item__wrap">
                <div class="pt__row" id="freeName">Free</div>
                <div class="pt__row"><span style="font-size: 30px;" id="freePrice"><b>₹0</b></span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> &nbsp;<span id="freeConsolidation">Consolidation 500</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="freeStorage">STORAGE 25 DAYS (after 25 days ₹25 per item per day)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="freePhoto">PHOTO 3 PHOTOS FREE (DETAILED PHOTO SERVICE UPTO 10, ₹400)</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="freeReturn">&nbsp;PACKAGE RETURN
                ₹50 PER ITEM</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="freePickup">Warehouse Pickup
                ₹400</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp; <span id="freeCopy">Scanned Copies Of Documents
                ₹80</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> &nbsp;<span id="freeShipping">Shipping Address
                5</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="freeClearance">Semiliquid/Liquid Clearance Charge
                10% (EXCLUSIVE OF ALL OTHER CHARGES)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="freeTracking"> Real-Time Tracking</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="freeShopper">Personal Shopper
                10% of item value (exclusive of all charges)</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> &nbsp;<span id="freeHub">Set Up A Local Hub For Your Business</span>
              </div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="freePurchase"> Assisted Purchase
                Actual Charges + Other Charges</span></div>
                <div class="pt__row">
                  <button class="editButton" data-target="free">Edit</button>
                  <button class="deactivateButton" data-target="free">Deactivate</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Repeat similar structure for other items -->
          <div class="swiper-slide pt__option__item">
            <div class="pt__item">
              <div class="pt__item__wrap">
                <div class="pt__row" id="halfYearlyName">Half Yearly</div>
                <div class="pt__row"><span style="font-size: 30px;" id="halfYearlyPrice"><b>₹2499</b></span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp; <span id="halfYearlyConsolidation">Consolidation 0</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="halfYearlyStorage">STORAGE 25 DAYS (after 25 days ₹30 per item per day)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="halfYearlyPhoto">PHOTO 3 PHOTOS FREE (DETAILED PHOTO SERVICE UPTO 10, ₹250)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="halfYearlyReturn">&nbsp;PACKAGE RETURN
                ₹0 PER ITEM</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="halfYearlyPickup">Warehouse Pickup
                ₹0</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp; <span id="halfYearlyCopy">Scanned Copies Of Documents
                ₹40</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> &nbsp;<span id="halfYearlyShipping">Shipping Address
                -1</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="halfYearlyClearance">Semiliquid/Liquid Clearance Charge
                10% (EXCLUSIVE OF ALL OTHER CHARGES)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="halfYearlyTracking"> Real-Time Tracking</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="halfYearlyShopper">Personal Shopper
                5% of item value (exclusive of all charges)</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> &nbsp;<span id="halfYearlyHub">Set Up A Local Hub For Your Business</span>
              </div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="halfYearlyPurchase"> Assisted Purchase
                Actual Charges + Other Charges</span></div>
                <div class="pt__row">
                  <button class="editButton" data-target="halfYearly">Edit</button>
                  <button class="deactivateButton" data-target="halfYearly">Deactivate</button>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide pt__option__item">
            <div class="pt__item">
              <div class="pt__item__wrap">
                <div class="pt__row" id="yearlyName">Yearly</div>
                <div class="pt__row"><span style="font-size: 30px;" id="yearlyPrice"><b>₹4499</b></span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp; <span id="yearlyConsolidation">Consolidation 0</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="yearlyStorage">STORAGE 25 DAYS (after 25 days ₹40 per item per day)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="yearlyPhoto">PHOTO 3 PHOTOS FREE (DETAILED PHOTO SERVICE UPTO 10, ₹250)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="YearlyReturn">&nbsp;PACKAGE RETURN
                ₹0 PER ITEM</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="YearlyPickup">Warehouse Pickup
                ₹0</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp; <span id="YearlyCopy">Scanned Copies Of Documents
                ₹0</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> &nbsp;<span id="YearlyShipping">Shipping Address
                -1</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="YearlyClearance">Semiliquid/Liquid Clearance Charge
                0% (EXCLUSIVE OF ALL OTHER CHARGES)</span></div>
                <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="YearlyTracking"> Real-Time Tracking</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> <span id="YearlyShopper">Personal Shopper
                0% of item value (exclusive of all charges)</span></div>
              <div class="pt__row"><i class="fa-solid fa-check"></i> &nbsp;<span id="YearlyHub">Set Up A Local Hub For Your Business</span>
              </div>
              <div class="pt__row"><i class="fa-solid fa-check"></i>&nbsp;<span id="YearlyPurchase"> Assisted Purchase
                Actual Charges + Other Charges</span></div>
                <div class="pt__row">
                  <button class="editButton" data-target="yearly">Edit</button>
                  <button class="deactivateButton" data-target="yearly">Deactivate</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Add event listener to all buttons with class 'editButton'
  var editButtons = document.querySelectorAll('.editButton');
  editButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var target = button.getAttribute('data-target');
      // Get the parent element of the button
      var parent = button.parentNode.parentNode;
      // Get all spans inside the parent element
      var spans = parent.querySelectorAll('span');
      
      // Replace spans with input fields
      spans.forEach(function(span) {
        var input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.value = span.textContent;
        span.parentNode.replaceChild(input, span);
      });
      
      // Replace edit button with save button
      var saveButton = document.createElement('button');
      saveButton.textContent = "Save";
      saveButton.classList.add('saveButton');
      parent.querySelector('.editButton').replaceWith(saveButton);
      
      // Add event listener to save button
      saveButton.addEventListener('click', function() {
        // Get all input fields inside the parent element
        var inputs = parent.querySelectorAll('input');
        // Replace input fields with spans and set their text content to input values
        inputs.forEach(function(input, index) {
          var span = document.createElement('span');
          span.textContent = input.value;
          input.parentNode.replaceChild(span, input);
        });
        
        // Replace save button with edit button
        var editButton = document.createElement('button');
        editButton.textContent = "Edit";
        editButton.classList.add('editButton');
        saveButton.replaceWith(editButton);
        
        // Add event listener to new edit button
        editButton.addEventListener('click', function() {
          // Call the edit function again to convert spans back to input fields
          editSection(parent);
        });
      });
    });
  });

  // Add event listener to all buttons with class 'deactivateButton'
  var deactivateButtons = document.querySelectorAll('.deactivateButton');
  deactivateButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var target = button.getAttribute('data-target');
      // Get all elements with the same data-target attribute
      var targets = document.querySelectorAll('[data-target="' + target + '"]');
      // Iterate over targets and add a class to deactivate them
      targets.forEach(function(element) {
        element.classList.add('deactivated');
      });
    });
  });
</script>
</div>
</div>
<Script>
  // Pricing table - mobile only slider
var init = false;
var pricingCardSwiper;
var pricingLoanSwiper
function swiperCard() {
  if (window.innerWidth <= 991) {
    if (!init) {
      init = true;
      pricingCardSwiper = new Swiper("#pricingTableSlider", {
        slidesPerView: "auto",
        spaceBetween: 5,
        grabCursor: true,
        keyboard: true,
        autoHeight: false,
        navigation: {
          nextEl: "#navBtnRight",
          prevEl: "#navBtnLeft",
        },
      });
    }
  } else if (init) {
    pricingCardSwiper.destroy();
    init = false;
  }
}
swiperCard();
window.addEventListener("resize", swiperCard);
</Script>


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