<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Your Indian Shop - Shipping Calculator</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">

<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>

    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>

        <main>
            <div class="floating"><a target="_blank"
                href="https://api.whatsapp.com/send?phone=+919331089123 &text=Hello." class="social-icon-link bi-whatsapp"></a></div>
                        <nav class="navbar navbar-expand-lg">
                            <div class="container">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <a class="navbar-brand" href="/">
                                    <strong>Your <span>Indian</span> Shop</strong>
                                </a>

                                <div class="d-lg-none">
                                    <a href="/login-page" ><span style="font-size:15px">Sign In</span></a>
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
                                            <a href="/login-page" ><span style="font-size:15px">Sign In</span></a>
                                            <!-- <a href="sign-in.html" class="bi-person custom-icon me-3"></a> -->
                                        </div>
                                </div>
                            </div>
                        </nav>
            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 header-info">
                            <h1>
                                <span class="d-block text-dark" >discover how we can help you save, </span>
                                <span class="d-block text-primary">or calculate your shipping costs,</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <img src="images/shipping.jpg" class="header-image img-fluid" alt="">
            </header>
            @php
            $countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria",
    "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan",
    "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia",
    "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Costa Rica",
    "Croatia", "Cuba", "Cyprus", "Czechia", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt",
    "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
    "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana",
    "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
    "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kosovo", "Kuwait",
    "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
    "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico",
    "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru",
    "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan",
    "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania",
    "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal",
    "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan",
    "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania",
    "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda",
    "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam",
    "Yemen", "Zambia", "Zimbabwe"
];
@endphp
            <section class="contact section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Let's <span>Calculate</span></h2>

                            <form class="contact-form me-lg-5 pe-lg-3" role="form" action="/api/shipcalc" method="post">
                                @csrf
                                <select class="form-control my-4" name="country">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                                <p>Parcel Details</p>
                                <div class="form-floating my-2">
                                    <input type="number" name="Weight" id="Weight" class="form-control" placeholder="Weight " required>
                                    <label for="subject">Weight in KG</label>
                                </div>
                                <div class="form-floating my-2">
                                    <input type="number" name="length" id="length" class="form-control" placeholder="length " required>
                                    <label for="subject">Length in cm</label>
                                </div>
                                <div class="form-floating my-2">
                                    <input type="number" name="Width" id="Width" class="form-control" placeholder="Width " required>
                                    <label for="subject">Width in cm</label>
                                </div>
                                <div class="form-floating my-2">
                                    <input type="decimal" name="Height" id="Height" class="form-control" placeholder="Height" required>
                                    <label for="subject">Height in cm</label>
                                </div>
                                <div class="col-lg-5 col-6">
                                    <button type="button" id="popupBtn" class="form-control">Calculate</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 ms-auto">
                            <div class="row">
                                <img class="img-fluid" src="images/product/delivery.gif">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div id="myPopup" class="popup">
  <!-- Popup content -->
  <div class="popup-content">
    <span class="close">&times;</span>
    <div id="popupData">{{$value}}</div>
  </div>
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

/* Popup content */
.popup-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
@media screen (max-width: 800px){
    .popup-content {
  background-color: #fefefe;
  margin: 25% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
}
</style>
        </main>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Get the button and the popup
  var button = document.getElementById("popupBtn");
  var popup = document.getElementById("myPopup");

  // When the button is clicked, show the popup
  button.addEventListener("click", function() {
    popup.style.display = "block";

    // Fetch data from backend
    // Replace this with your actual AJAX call to fetch data
    var data = "Data fetched from backend"; // Sample data

    // Display the fetched data in the popup
    var popupData = document.getElementById("popupData");
    popupData.innerHTML = data;
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
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="/">Your </a> Indian Shop</h4>
                        <p class="text-white mt-lg-5 mb-4 mb-lg-0"> <strong>Our shop provides you with
                            the best customer support   </strong></p>
                        <br>
                        <p class="copyright-text">Copyright ©  <a href="" target="_blank">TBD</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="/about" class="footer-menu-link">About Us</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Prohibited Items</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="mailto: admin@yourindianshop.com" class="social-icon-link bi-envelope"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="tel: +91 93310 89123" class="social-icon-link bi-phone"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
