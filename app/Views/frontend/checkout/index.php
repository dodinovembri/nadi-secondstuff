<!DOCTYPE html>
<html>
    
<!-- Mirrored from obest.org/html/shopo/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 05:00:20 GMT -->
<head>
        <meta charset="utf-8">
        <title>Shopo - eCommerce Template</title>
        <meta name="description" content="Premium eCommerce Template">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

        <!-- Modernizr -->
        <script src="assets/js/modernizr.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <header class="header sticky-header">
                <div class="container">
                    <a href="index.html" class="site-logo" title="Shopo - eCommerce Template">
                        <img src="assets/images/logo.png" alt="Logo">
                        <span class="sr-only">Shopo - eCommerce Template</span>
                    </a>

                    <div class="header-dropdowns">
                        <div class="dropdown header-dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                USD
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="Euro">EUR</a></li>
                                <li><a href="#" title="Pound">PND</a></li>
                                <li><a href="#" title="Yen">YEN</a></li>
                            </ul>
                        </div><!-- End .dropddown -->

                        <div class="dropdown header-dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                ENG
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="Spanish">SPA</a></li>
                                <li><a href="#" title="Turkish">TUR</a></li>
                                <li><a href="#" title="German">GER</a></li>
                            </ul>
                        </div><!-- End .dropddown -->
                    </div><!-- End .header-dropdowns -->

                    <div class="search-form-container">
                        <a href="#" class="search-form-toggle" title="Toggle Search"><i class="fa fa-search"></i></a>
                        <form action="#">
                            <div class="dropdown search-dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                   All Category
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Equipments</a></li>
                                </ul>
                            </div><!-- End .dropddown -->
                            <input type="search" class="form-control" placeholder="Search" required>
                            <button type="submit" title="Search" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- End .search-form-container -->

                    <ul class="top-links">
                        <li><a href="signin.html">Sign In</a></li>
                        <li><a href="cart.html">Cart</a></li>
                    </ul>

                    <div class="dropdown cart-dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="cart-icon">
                                <img src="assets/images/bag.png" alt="Cart">
                                <span class="cart-count">4</span>
                            </span>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <p class="dropdown-cart-info">You have 2 products in your cart.</p>
                            <div class="dropdown-menu-wrapper">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name">
                                            <img src="assets/images/products/small/product2.jpg" alt="Product Image">
                                        </a>
                                    </figure>

                                    <div>
                                        <a href="#" class="btn-delete" title="Delete product" role="button"></a>
                                        <h4 class="product-title"><a href="product.html">Sunglasses</a></h4>
                                        <div class="product-price-container">
                                            <span class="product-price">$110.00</span>
                                        </div><!-- End .product-price-container -->
                                        <div class="product-qty">x1</div><!-- End .product-qty -->
                                    </div><!-- End .product-image-container -->
                                </div><!-- End .product- -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name">
                                            <img src="assets/images/products/small/product1.jpg" alt="Product Image">
                                        </a>
                                    </figure>

                                    <div>
                                        <a href="#" class="btn-delete" title="Delete product" role="button"></a>
                                        <h4 class="product-title"><a href="product.html">Leather Belt</a></h4>
                                        <div class="product-price-container">
                                            <span class="product-price">$99.00</span>
                                        </div><!-- End .product-price-container -->
                                        <div class="product-qty">x1</div><!-- End .product-qty -->
                                    </div><!-- End .product-image-container -->
                                </div><!-- End .product- -->
                            </div><!-- End .droopdowm-menu-wrapper -->

                            <div class="cart-dropdowm-action">
                                <div class="dropdowm-cart-total"><span>TOTAL:</span> $209.00</div>
                                <a href="checkout.html" class="btn btn-primary">Checkout</a>
                            </div><!-- End .cart-dropdown-action -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropddown -->

                    <a href="#" class="sidemenu-btn" title="Menu Toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div><!-- End .container-fluid -->
            </header><!-- End .header -->

            <aside class="sidemenu">
                <div class="sidemenu-wrapper">
                    <div class="sidemenu-header">
                        <a href="index.html" class="sidemenu-logo">
                            <img src="assets/images/logo.png" alt="logo">
                        </a>
                    </div><!-- End .sidemenu-header -->

                    <ul class="metismenu">
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#" aria-expanded="false">Pages <span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Shop <span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="category.html">Category</a></li>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Portfolio<span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="portfolio-2col.html">Portfolio 2 Col</a></li>
                                <li><a href="portfolio-3col.html">Portfolio 3 Col</a></li>
                                <li><a href="portfolio-4col.html">Portfolio 4 Col</a></li>
                                <li><a href="single-portfolio.html">Portfolio Post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-expanded="false">Blog<span class="sidemenu-icon"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single.html">blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Buy Shopo!</a></li>
                    </ul>
                </div><!-- End .sidemenu-wrapper -->
            </aside><!-- End .sidemenu -->

            <div class="sidemenu-overlay"></div><!-- End .sidemenu-overlay -->
            
            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="page-header text-center">
                                <h1>Checkout</h1>
                                <p>Checkout Your Products</p>
                            </div><!-- End .page-header -->

                            <div class="checkout-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs text-right" role="tablist">
                                    <li role="presentation" class="active"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab"><span>1</span>Shipping</a></li>
                                    <li role="presentation"><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab"><span>2</span>Payment</a></li>
                                    <li role="presentation"><a href="#confirmation" aria-controls="confirmation" role="tab" data-toggle="tab"><span>3</span>Confirmation</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="shipping">
                                        <div class="tab-header">
                                            <h4>Check As:</h4>
                                            <div class="radio-inline-container">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="checkout-option" data-target=".check-as-guest">
                                                        <span class="check"></span>
                                                        <span class="circle"></span>
                                                        Check out as Guest
                                                    </label>
                                                </div><!-- End .radio -->

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="checkout-option" checked data-target=".signup-form">
                                                        <span class="check"></span>
                                                        <span class="circle"></span>
                                                        Register
                                                    </label>
                                                </div><!-- End .radio -->

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="checkout-option" data-target=".signin-form">
                                                        <span class="check"></span>
                                                        <span class="circle"></span>
                                                        Login
                                                    </label>
                                                </div><!-- End .radio -->
                                            </div><!-- End .radio-inline-container -->
                                        </div><!-- End .tab-header -->

                                        <div class="check-as-guest target-area">
                                            <h3>Continue as a guest.</h3>
                                            <p>Skip this step and move down to below to continue to checkout.</p>
                                        </div><!-- End .check-as-guest -->

                                        <form action="#" class="signup-form target-area active">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>First Name*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Last Name*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input type="email" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Password*</label>
                                                        <input type="password" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Phone*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="radio-inline-container">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="gender">
                                                                <span class="check"></span>
                                                                <span class="circle"></span>
                                                                Male
                                                            </label>
                                                        </div><!-- End .radio -->

                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="gender">
                                                                <span class="check"></span>
                                                                <span class="circle"></span>
                                                                Female
                                                            </label>
                                                        </div><!-- End .radio -->
                                                    </div><!-- End .radio-inline-container -->
                                                </div><!-- End .col-sm-4 -->
                                            </div><!-- End .row -->

                                            <div class="clearfix form-action">
                                                <input type="submit" class="btn btn-primary min-width" value="SIGN Up">
                                            </div><!-- End .form-action -->
                                        </form>

                                        <form action="#" class="signin-form target-area">
                                            <div class="form-group">
                                                <label>E-mail Address*</label>
                                                <input type="email" class="form-control" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label>Password*</label>
                                                <input type="password" class="form-control" required>
                                            </div><!-- End .form-group -->

                                            <div class="clearfix form-more mb20">
                                                <div class="checkbox pull-left">
                                                    <label>
                                                        <input type="checkbox" name="remember">
                                                        <span class="checkbox-box"><span class="check"></span></span>
                                                        Remember Me
                                                    </label>
                                                </div><!-- End .checkbox -->
                                                <a href="#" class="help-link">LOST YOUR PASSWORD?</a>
                                            </div><!-- End .form-more -->

                                            <div class="clearfix form-action">
                                                <input type="submit" class="btn btn-primary pull-left min-width" value="SIGN IN">
                                            </div><!-- End .form-action -->
                                        </form>

                                        <div class="mb5"></div><!-- margin -->

                                        <h3>BILLING ADDRESS</h3>
                                        <hr>
                                        <div class="mb15"></div><!-- margin -->
                                        <form action="#" class="billing-form">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Full Name*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Address*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Address 2*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>City*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>State*</label>
                                                        <select class="form-control custom-select">
                                                            <option value="Texas">Texas</option>
                                                            <option value="New york">Canada</option>
                                                            <option value="California">California</option>
                                                        </select>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Zip code*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->
                                            </div><!-- End .row -->

                                            <div class="clearfix form-action">
                                                <div class="checkbox pull-right">
                                                    <label>
                                                        <input type="checkbox" name="remember" checked>
                                                        <span class="checkbox-box"><span class="check"></span></span>
                                                        My Shipping and billing address are same
                                                    </label>
                                                </div><!-- End .checkbox -->

                                                <input type="submit" class="btn btn-accent min-width pull-left" value="Continue">
                                            </div><!-- End .form-action -->
                                        </form>
                                    </div><!-- End .tab-pane -->
                                    <div role="tabpanel" class="tab-pane" id="payment">
                                        <div class="tab-header">
                                            <h4>Payment Method:</h4>
                                            <div class="radio-inline-container">
                                                <img src="assets/images/payment-card.png" alt="Card" class="radio-img">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="payment-option" checked data-target=".payment-card">
                                                        <span class="check"></span>
                                                        <span class="circle"></span>
                                                        Credit Card
                                                    </label>
                                                </div><!-- End .radio -->

                                                <img src="assets/images/payment-paypal.png" alt="Paypal" class="radio-img">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="payment-option" data-target=".payment-paypal">
                                                        <span class="check"></span>
                                                        <span class="circle"></span>
                                                        Paypal
                                                    </label>
                                                </div><!-- End .radio -->
                                            </div><!-- End .radio-inline-container -->
                                        </div><!-- End .tab-header -->

                                        <form action="#" class="payment-card target-area active">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Name on Card*</label>
                                                        <input type="text" class="form-control" required>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Card number*</label>
                                                        <input type="text" class="form-control form-with-icon" placeholder="0000-0000-0000-0000" required>

                                                        <img src="assets/images/icon-input-card.png" alt="Card" class="form-icon">
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>CVV number*</label>
                                                        <input type="text" class="form-control form-with-icon" required>
                                                        <span class="form-icon">
                                                            <img src="assets/images/icon-input-info.png" alt="Card">
                                                        </span>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Exp. Month*</label>
                                                        <select class="form-control custom-select">
                                                            <option value="Month">Month</option>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                        </select>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Exp. Year*</label>
                                                        <select class="form-control custom-select">
                                                            <option value="Year">Year</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                        </select>
                                                    </div><!-- End .form-group -->
                                                </div><!-- End .col-sm-4 -->
                                            </div><!-- End .row -->

                                            <div class="clearfix form-action">
                                                <div class="btn-wrap pull-right">
                                                    <span class="btn-payment-info">$405.00</span>
                                                    <input type="submit" class="btn btn-accent" value="Pay Now">
                                                </div><!-- End .btn-wrap -->
                                            </div><!-- End .form-action -->
                                        </form>

                                        <div class="payment-paypal target-area">
                                            <h3>Sorry Paypal is not available now.</h3>
                                            <p>Please Try again later or use your credit card to pay.</p>
                                        </div><!-- End .check-as-guest -->
                                    </div><!-- End .tab-pane -->
                                    <div role="tabpanel" class="tab-pane" id="confirmation">
                                        <div class="checkout-confirm">
                                            <img src="assets/images/okay.png" alt="Okay">
                                            <h3>Payment Complete</h3>
                                            <h4>Thank you for your order</h4>
                                            <p>We have sent you an email with all the details of your order to your email address.</p>
                                        </div><!-- End .checkout-confirm -->
                                    </div><!-- End .tab-pane -->
                                </div>
                            </div><!-- End .product-details-tab -->
                            
                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 col-md-pull-9 sidebar sidebar-shop">
                            <div class="widget widget-box widget-shop-category active">
                                <h3 class="widget-title">Category <a href="#" class="btn-filter" role="button">Filter<i class="fa fa-caret-down"></i></a></h3>

                                <ul class="shop-category-list accordion">
                                    <li>
                                        <a href="category.html">Fashion</a> 
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-1" aria-expanded="false" aria-controls="accordion-ul-1"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-1" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Women Clothes</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Men Clothes</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">Electronics </a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-2" aria-expanded="false" aria-controls="accordion-ul-2"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-2" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Computers</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Mobile Phones</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Tablets</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">Home &amp; Garden</a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-3" aria-expanded="false" aria-controls="accordion-ul-3"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-3" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Bedding</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Furniture</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Home Decor</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Kitchen, Dining &amp; Bar</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Gardening Supplies</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>Outdoor Lightning</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">Music Instruments</a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-4" aria-expanded="false" aria-controls="accordion-ul-4"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-4" aria-expanded="false">
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                            <li><a href="category.html"><i class="fa fa-caret-right"></i>SubCategory</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category.html">Sports Equipments</a>
                                    </li>
                                    <li>
                                        <a href="category.html">Motors Products</a>
                                    </li>
                                    <li>
                                        <a href="category.html">Shopo Pages</a>
                                        <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-5" aria-expanded="false" aria-controls="accordion-ul-5"><span class="accordion-icon"></span></button>

                                        <ul class="collapse" id="accordion-ul-5" aria-expanded="false">
                                            <li><a href="about.html"><i class="fa fa-caret-right"></i>About</a></li>
                                            <li><a href="portfolio-4col.html"><i class="fa fa-caret-right"></i>Portfolio 4 Columns</a></li>
                                            <li><a href="portfolio-3col.html"><i class="fa fa-caret-right"></i>Portfolio 3 Columns</a></li>
                                            <li><a href="portfolio-2col.html"><i class="fa fa-caret-right"></i>Portfolio 2 Columns</a></li>
                                            <li><a href="single-portfolio.html"><i class="fa fa-caret-right"></i>Portfolio Post</a></li>
                                            <li><a href="blog.html"><i class="fa fa-caret-right"></i>Blog</a></li>
                                            <li><a href="single.html"><i class="fa fa-caret-right"></i>Blog Post</a></li>
                                            <li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Buy Theme</a>
                                    </li>
                                </ul>
                            </div><!-- End .widget -->

                            <div class="widget widget-box widget-shop-filter">
                                <h3 class="widget-title">Filter <a href="#" class="btn-category" role="button">Categories<i class="fa fa-caret-down"></i></a></h3>
                                    
                                    <div class="filter-box">
                                        <h5 class="filter-label">Sort By</h5>
                                        <ul class="shop-filter-list">
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Default</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Popularity</a></li>
                                            <li class="active"><a href="#"><i class="fa fa-caret-right"></i>Average Rating</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Newness</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Price: Low to high</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Price: high to Low</a></li>
                                        </ul>
                                    </div><!-- End .filter-box -->

                                    <div class="filter-box">
                                        <h5 class="filter-label">Price <span class="filter-price-text"><span class="filter-price-prefix">$</span><span id="filter-price-range"></span></span></h5>
                                        <div class="price-slider-wrapper">
                                            <div id="price-slider"></div><!-- End #price-slider -->
                                        </div><!-- End .price-slider-wrapper -->
                                    </div><!-- End .filter-box -->

                                    <div class="filter-box">
                                        <h5 class="filter-label">Color</h5>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <ul class="filter-color-list">
                                                    <li>
                                                        <span class="filter-color" style="background-color: #1e73be;"></span>
                                                        <span class="filter-color-text">Blue</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #c0c0c0;"></span>
                                                        <span class="filter-color-text">Gray</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #dc9814;"></span>
                                                        <span class="filter-color-text">Orange</span>
                                                    </li>
                                                </ul>
                                            </div><!-- End col-xs-6 -->

                                            <div class="col-xs-6">
                                                <ul class="filter-color-list">
                                                    <li>
                                                        <span class="filter-color" style="background-color: #736751;"></span>
                                                        <span class="filter-color-text">Brown</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #05ac92;"></span>
                                                        <span class="filter-color-text">Green</span>
                                                    </li>
                                                    <li>
                                                        <span class="filter-color" style="background-color: #fff;"></span>
                                                        <span class="filter-color-text">White</span>
                                                    </li>
                                                </ul>
                                            </div><!-- End col-xs-6 -->
                                        </div><!-- End row -->
                                    </div><!-- End .filter-box -->

                                    <a href="#" class="btn btn-apply btn-block">Apply Filter</a>
                            </div><!-- End .widget -->

                            <div class="widget widget-banner">
                                <div class="banner banner-image">
                                    <a href="#" title="Brown Woman Shoes">
                                        <img src="assets/images/banners/widget-banner.png" alt="Banner name">
                                    </a>
                                </div>
                            </div><!-- End .widget -->

                            <div class="widget widget-newsletter">
                                <h3 class="widget-title">Newsletter</h3>
                                <p>Enter your email address below to subscribe to my newsletter</p>

                                <form action="#">
                                    <div class="form-group">
                                        <img src="assets/images/icon-newsletter-email.png" alt="Email">
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div><!-- End .form-group -->
                                    <input type="submit" value="subscribe now" class="btn btn-block">
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-testimonial">
                                <div class="owl-data-carousel owl-carousel"
                                data-owl-settings='{ "items":1, "margin": 5, "loop": false, "nav": false, "dots":true }'>
                                    <div class="testimonial">
                                        <img src="assets/images/testimonials/user1.png" alt="User image">
                                        <h5 class="testimonial-owner">John Smith</h5>
                                        <div class="testimonial-owner-position">Ceo &amp; Founder Okler</div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div><!-- End .testimonial -->

                                    <div class="testimonial">
                                        <img src="assets/images/testimonials/user2.png" alt="User image">
                                        <h5 class="testimonial-owner">Susan Smith</h5>
                                        <div class="testimonial-owner-position">CPO &amp; Co-Founder</div>
                                        <p>Distinctio, corrupti nesciunt aperiam, eaque, reiciendis dummy consequunt.</p>
                                    </div><!-- End .testimonial -->

                                    <div class="testimonial">
                                        <img src="assets/images/testimonials/user3.png" alt="User image">
                                        <h5 class="testimonial-owner">David Lee</h5>
                                        <div class="testimonial-owner-position">Senior Developer</div>
                                        <p>Adipisci esse nobis alias magnam dolores debitis non odit porro nost.</p>
                                    </div><!-- End .testimonial -->
                                </div><!-- End .owl-data-carousel -->
                            </div><!-- End .widget -->
                        </aside><!-- End .col-md-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .main -->
            
            <footer class="footer">
                <div class="container">
                    <div class="info-bar">
                        <div class="info-bar-col">
                            <h5 class="info-bar-title">FREE SHIPPING &amp; RETURN</h5>
                            <p>Free shipping on all orders over $99</p>
                        </div><!-- End .info-bar-col -->
                        <div class="info-bar-col">
                            <h5 class="info-bar-title">MONEY BACK GUARANTEE</h5>
                            <p>100% money back guarantee</p>
                        </div><!-- End .info-bar-col -->
                        <div class="info-bar-col">
                            <h5 class="info-bar-title">ONLINE SUPPORT 24/7</h5>
                            <p>Highly customer satisfaction</p>
                        </div><!-- End .info-bar-col -->
                    </div><!-- End .info-bar -->
                </div><!-- End .container -->
                <div class="footer-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="widget widget-about">
                                    <h4 class="widget-title">Contact Information</h4>

                                    <address>
                                        <span>123 Shopo St</span>
                                        <span>Commerce Land, EC 12345</span>
                                        <span>+123 456 7890</span>
                                        <a href="mailto:info@domain.com">info@domain.com</a>
                                    </address>
                                </div><!-- End .widget -->
                            </div><!-- End .col-md-3 -->

                            <div class="col-sm-6 col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">Collection</h4>

                                    <ul class="links">
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Home &amp; Garden</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Motors</a></li>
                                    </ul>
                                </div><!-- End .widget -->
                            </div><!-- End .col-md-3 -->

                            <div class="clearfix visible-sm"></div><!-- clearfix -->

                            <div class="col-sm-6 col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">My Account</h4>

                                    <ul class="links">
                                        <li><a href="#">Account</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">My cart</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Checkout</a></li>
                                    </ul>
                                </div><!-- End .widget -->
                            </div><!-- End .col-md-3 -->

                            <div class="col-sm-6 col-md-3">
                                <div class="widget widget-newsletter">
                                    <h4 class="widget-title">Newsletter</h4>
                                    <p>Signup for our newsletter</p>

                                    <form action="#">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email" required>
                                            <input type="submit" value="GO" class="btn">
                                        </div><!-- End .form-group -->
                                    </form>

                                    <div class="social-icons">
                                        <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div><!-- End .widget -->
                            </div><!-- End .col-md-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .footer-inner -->

                <div class="footer-bottom">
                    <div class="container">
                        <p class="copyright">Online &copy; 2017. All Rights Reserved</p>
                    <img src="assets/images/cards.png" alt="Payment Methods" class="img-cards">
                    </div><!-- End .container -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->
        </div><!-- End #wrapper -->
        
        <a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>

        <!-- End -->
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from obest.org/html/shopo/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 05:00:22 GMT -->
</html>