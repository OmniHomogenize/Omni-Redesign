<?php
    // $baseURL = 'http://www.nerdycoder.com/travis/Omni-Redesign/';
    $baseURLdev = 'http://localhost:8888/OMNI-INTERNATIONAL/Omni-Redesign/';
    $baseURL = 'http://localhost:8888/OMNI-INTERNATIONAL/GitHub/Omni-Redesign/';
?>
<div class="dark-overlay"></div>
<div id="directory-module">
    <h2>Omni Redesign Link Directory</h2>
    <ul>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>index.php">Home</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>category-page.php">Category Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>search-page.php">Search Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>account-page.php">Account Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>products-page.php">Products Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>contact.php">Contact Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>login-page.php">Login Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>shopping-page.php">Shopping Cart Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>video-page.php">Video Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>login-page.php">Login Page</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>corporate-files.php">Corporate Files</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>product-manuals.php">Product Manuals</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>product-brochures.php">Product Brochures</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>application-notes.php">Application Notes</a></li>
        <li class="col col-md-6 col-xs-12"><a href="<?php echo $baseURL ?>repair-installation-guides.php">Repair and Installation Guides</a></li>
    </ul>
    <hr>
    <button class="btn btn-solid btn-outline"><a href="https://omni-products-finder.herokuapp.com/">Omni App</a></button>
    <div class="close-module">
        <i class="glyphicon glyphicon-remove"></i>
    </div>
</div>
<div id="contact-module">
    <h2>How Can We Help You?</h2>
    <form action="contact()" class="form-horizontal">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input class="form-control" placeholder="Name" name="name" type="text">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input class="form-control" placeholder="Email" name="email" type="email">
                </div>
                <div class="input-group">
                    <label for="requested-info">Requested Information:</label>
                    <select name="requested-info" class="form-control" id="requested-info">
                        <option value="Product Sample Request">Product Sample Request</option>
                        <option value="Product Demo Request">Product Demo Request</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Sales">Sales</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Accounts Payable">Accounts Payable</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <div class="input-group">
                    <label for="company">Company | Institute:</label>
                    <input class="form-control" placeholder="Company | Institute" name="company" type="text">
                </div>
                <div class="input-group">
                    <label for="phone">Phone Number:</label>
                    <input class="form-control" placeholder="Phone Number" name="phone" type="tel">
                </div>
                <div class="input-group">
                    <label for="findus">How did you find us?:</label>
                    <select name="findus" class="form-control" id="findus">
                        <option value="Search Engine Google">Search Engine Google</option>
                        <option value="Search Engine Other">Search Engine Other</option>
                        <option value="Tradeshow">Tradeshow</option>
                        <option value="Reffering Site">Reffering Site</option>
                        <option value="Omni Customer">Omni Customer</option>
                        <option value="Catalog">Catalog</option>
                        <option value="Journal Article">Journal Article</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group wide">
                    <label for="message">Leave us a message</label>
                    <textarea class="form-control" type="text" name="message" placeholder="Message" cols="5" row="2" style="min-height: 200px;"></textarea>
                </div>
                <button class="btn btn-solid btn-lg submit">SUBMIT</button>
            </div>
        </div>
    </form>
    <div class="close-module">
        <i class="glyphicon glyphicon-remove"></i>
    </div>
</div>
<div id="account-module">
    <h2>Your Account</h2>
    <div class="messages" style="display: none;"></div>
    <div class="account-buttons btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" data-id="shipping-address" class="btn btn-darkblue">Shipping Address</button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" data-id="billing-address" class="btn btn-darkblue">Billing Address</button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" data-id="recent-orders" class="btn btn-darkblue">Recent Orders</button>
        </div>
    </div>
    <div class="tab login-form">
        <div class="login">
            <h3>Login</h3>
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <label for="email" class="control-label">Email Address:</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="input-group">
                            <label for="password" class="control-label">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <input type="checkbox" class="checkbox" name="remember">
                            <label for="remember" class="control-label">Remember Me</label>
                            <a href="$" class="forgotpassword">Forgot Password?</a>
                        </div>
                    </div>
                </div>
                <div class="buttons-group">
                    <div class="col-md-12">
                        <div class="btn btn-solid login-btn">LOGIN</div>
                        <div class="btn btn-outline register-btn">REGISTER</div>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="register hidden">
            <h2>Create Account</h2>
            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" required placeholder="Travis Heller">
                        </div>
                        <div class="input-group">
                            <label for="street" class="control-label">Street</label>
                            <input type="text" name="street" class="form-control" required placeholder="4044 George Busbee Pky">
                        </div>
                        <div class="input-group">
                            <label for="state" class="control-label">State</label>
                            <input type="text" name="state" class="form-control" required placeholder="Georgia">
                        </div>
                        <div class="input-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" class="form-control" required placeholder="phone">
                        </div>
                        <div class="input-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" required placeholder="Password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" name="email" class="form-control" required placeholder="theller@omni-inc.com">
                        </div>
                        <div class="input-group">
                            <label for="city" class="control-label">City</label>
                            <input type="text" name="city" class="form-control" required placeholder="Kennesaw">
                        </div>
                        <div class="input-group">
                            <label for="country" class="control-label">Select Country</label>
                            <select name="country" id="country" class="form-control" required>
                                <option value="Select a Country">Select a Country..</option>
                                <option value="United States">United States</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="fax" class="control-label">Fax</label>
                            <input type="text" class="form-control" placeholder="fax">
                        </div>
                        <div class="input-group">
                            <label for="confirm-password" class="control-label">Confirm Password</label>
                            <input type="confrim-password" class="form-control" required placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
                <div class="buttons-group">
                    <div class="col-md-12">
                        <button class="btn btn-solid create-account">Create Account</button>
                        <button class="btn btn-outline cancel">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="tab shipping-address hidden">
        <h3>Default Shipping Address</h3>
        <address>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <p><span>Name: </span>Travis Heller</p>
                    <p><span>Street: </span>4044 George Busbee Pky</p>
                    <p><span>Country: </span>United States</p>
                    <p><span>Fax: </span>F: 404-406-2822</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p><span>Email: </span>theller@omni-inc.com</p>
                    <p><span>Address: </span>Kennesaw, Georgia, 30144</p>
                    <p><span>Phone: </span>T: 404-406-2822</p>
                </div>
            </div>
        </address>
    </div>
    <div class="tab billing-address hidden">
        <h3>Default Billing Address</h3>
        <address>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <p><span>Name: </span>Travis Heller</p>
                    <p><span>Street: </span>4044 George Busbee Pky</p>
                    <p><span>Country: </span>United States</p>
                    <p><span>Fax: </span>F: 404-406-2822</p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p><span>Email: </span>theller@omni-inc.com</p>
                    <p><span>Address: </span>Kennesaw, Georgia, 30144</p>
                    <p><span>Phone: </span>T: 404-406-2822</p>
                </div>
            </div>
        </address>
    </div>
    <div class="tab recent-orders hidden">
        <h3>Recent Orders</h3>
        <address>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <td>Order #</td>
                                <td>Date</td>
                                <td>Ship To</td>
                                <td>Order Total</td>
                                <td>Status</td>
                                <td>View order</td>
                            </tr>
                        </thead>
                        <tr>
                            <td>100004351</td>
                            <td>5/2/2017</td>
                            <td>Travis Heller</td>
                            <td>$1,011.03</td>
                            <td>Pending</td>
                            <td><a href="#">View Order</a></td>
                        </tr>
                        <tr>
                            <td>100004351</td>
                            <td>5/2/2017</td>
                            <td>Travis Heller</td>
                            <td>$1,011.03</td>
                            <td>Pending</td>
                            <td><a href="#">View Order</a></td>
                        </tr>
                        <tr>
                            <td>100004351</td>
                            <td>5/2/2017</td>
                            <td>Travis Heller</td>
                            <td>$1,011.03</td>
                            <td>Pending</td>
                            <td><a href="#">View Order</a></td>
                        </tr>
                        <tr>
                            <td>100004351</td>
                            <td>5/2/2017</td>
                            <td>Travis Heller</td>
                            <td>$1,011.03</td>
                            <td>Pending</td>
                            <td><a href="#">View Order</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </address>
    </div>
    <div class="bottom-info">
        <button class="logout">Logout<i class="glyphicon glyphicon-chevron-left"></i></button>
        <h4>Welcome to your Omni Account, John Doe.</h4>
    </div>
    <div class="close-module">
        <i class="glyphicon glyphicon-remove"></i>
    </div>
</div>
<div class="big-search-field">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="field">
                    <!-- <i class="glyphicon glyphicon-search"></i> -->
                    <form method="get" action="https://www.omni-inc.com">
                        <!-- <input type="text" autocomplete="off" value="" placeholder="SEARCH BY: Product, Catalog Number, or Keyword" name="s" id="s"> -->
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off"  placeholder="Search by Product, Catalog Number, or Keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-addon search-go"><i class="glyphicon glyphicon-search"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="close-big-search">
            <i class="glyphicon glyphicon-remove"></i>
        </div>
    </div>
    <div class="big-search-completion">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="header-wrapper">
    <div class="top-header hidden-xs hidden-sm">
        <div class="container">
            <button class="pull-left live-chat">
                Live Chat
                <svg id="blog-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 80.445">
                    <path d="M37.615 0C16.903 0 .112 11.264.112 25.166c0 7.494 4.885 14.218 12.628 18.828-1.648 3.054-4.905 6.95-11.64 12.234-1.1.862-2.474 2.11 1.974 1.22 7.448-1.49 15.396-5.287 21.455-8.692 4.074 1.02 8.48 1.577 13.086 1.577 20.71 0 37.502-11.264 37.502-25.166S58.326 0 37.615 0z" />
                    <path d="M99.19 63.12c-5.78-4.535-6.606-7.096-6.888-8.957 4.033-2.922 6.5-6.83 6.5-11.128 0-7.997-8.532-14.648-19.818-16.094C78.05 38.38 68.12 47.854 53.95 52.01c4.364 4.463 11.883 7.412 20.432 7.412 3.68 0 7.168-.55 10.3-1.528 3.296 2.113 8.937 5.353 13.956 6.355 2.297.46 1.12-.686.552-1.13z" />
                </svg>
            </button>
            <span style="height: 31px;">Customer Service: 1-800-776-4431</span>
            <div class="pull-right social-icons">
                <ul class="social-icons list-group">
                    <li class="facebook list-group-item"><a href="#">Facebook</a></li>
                    <li class="twitter list-group-item"><a href="#">Twitter</a></li>
                    <li class="linkedin list-group-item"><a href="#">Linkedin</a></li>
                    <li class="instagram list-group-item"><a href="#">Instagram</a></li>
                </ul>
            </div>
            <span class="language pull-right">English</span>
        </div>
    </div>
    <!-- END OF TOPHEADER -->
    <div class="header">
        <div class="container">
            <div class="row no-gutter">
                <div class="logo-container col-sm-3 col-md-3 logo pull-left">
                    <a class="hidden-xs" href="/">
                        <img class="logo" src="assets/images/omni-logo-new.svg" alt="Logo">
                    </a>
                    <a class="hidden-sm hidden-md hidden-lg" href="/">
                        <img class="logo small" src="assets/images/omni-small-logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 search">
                    <nav class="hidden-xs secondary-nav visible-md visible-lg visible-xl">
                        <ul>
                            <li class="list-group-item"><a href="#">Distributor Locator</a></li>
                            <li class="list-group-item"><a href="#">News</a></li>
                            <li class="list-group-item"><a href="<?php echo $baseURL ?>industries-page.php">Industries</a></li>
                            <li class="list-group-item"><a href="#">About Us</a></li>
                        </ul>
                    </nav>
                    <form id="search" action="search()" class="form-group hidden-xs hidden-sm">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by Product, Catalog Number, or Keyword" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-addon search-go"><i class="glyphicon glyphicon-search"></i></span>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="pull-right">
                        <div class="search-icon visible-xs visible-sm" data-txt="Search">
                            <i class="glyphicon glyphicon-search"></i>
                        </div>
                        <div class="header-icon-group">
                            <div class="account-txt hidden-xs ">&nbsp;</div>
                            <div class="account">
                                <svg id="account-icon" class="data-txt" data-txt="Your Account" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74.4 74.4">
                                <circle class="st0" cx="37.5" cy="37.2" r="36.2" id="Layer_2" />
                                <g id="Layer_1">
                                    <path class="st1" d="M37.5 1C17.5 1 1.2 17.2 1.2 37.2s16.2 36.2 36.2 36.2 36.2-16.2 36.2-36.2S57.5 1 37.5 1zm13.4 32.1c0 8.1-6 14.7-13.4 14.7s-13.4-6.6-13.4-14.7v-3.6c0-8.1 6-14.7 13.4-14.7s13.4 6.6 13.4 14.7v3.6z" />
                                    <path class="st2" d="M37.5 14.8c-7.4 0-13.4 6.6-13.4 14.7v3.6c0 8.1 6 14.7 13.4 14.7s13.4-6.6 13.4-14.7v-3.6c0-8.1-6-14.7-13.4-14.7zM68.9 71.6L67 59.9v-.1c-.6-2.4-2-4.1-4.9-5.8H62l-11.1-5.8c-.7-.3-1.4-.2-2 .3-2.3 2.1-6.2 4.6-11.5 4.6s-9.2-2.5-11.5-4.6c-.5-.5-1.3-.6-2-.3L12.8 54h-.1c-2.8 1.7-4.3 3.4-4.9 5.8v.1L5.9 71.6c-.1.5.1 1 .4 1.4.3.4.8.6 1.3.6H67c.5 0 1-.2 1.3-.6.6-.4.7-.9.6-1.4z" />
                                    <circle class="st3" cx="37.2" cy="37.2" r="36.7" />
                                </g>
                            </svg>
                            </div>
                            <!-- <span class="hidden-sm hidden-xs">Welcome Joe</span> -->
                            <span class="login hidden"><a href="">Login</a></span>
                            <span class="customer-name hidden-sm hidden-xs"><a href="">James</a> | </span>
                            <span class="logout hidden-sm hidden-xs"><a href="">Logout</a></span>
                            <div class="distributor-selector data-txt hidden-xs hidden-sm" data-txt="Select Country"><span class="country">United States</span></div>
                            <div id="locationModal" style="display:none;">
                                <div class="loading">
                                <img src="http://www.nerdycoder.com/travis/spinner.gif" alt="Omni Loading icon">
                                <span>Loading Countries of Distributors</span>
                                </div>
                                <div class="top-bar">
                                <div class="selectCountry">
                                    <h4>PLEASE SELECT YOUR COUNTRY</h4>
                                </div>
                                <div class="selectDistributor close">
                                    <h4>PLEASE SELECT YOUR DISTRIBUTOR</h4>
                                </div>
                                </div>
                                <div class="content distributors" id="distributorSection">
                                </div>
                                <div class="content country" id="countrySection">		
                                <div class="col">
                                    <div class="country europe">
                                    <div class="continent">EUROPE</div>
                                    <ul class="left"></ul>
                                    <ul class="right"></ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="country north_america">
                                    <div class="continent">North America</div>
                                        <ul>
                                        </ul>
                                    </div>
                                    <div class="country south_america">
                                    <div class="continent">South America</div>
                                    <ul>
                                    </ul>
                                    </div>
                                    <div class="country other">
                                    <div class="continent">OTHER COUNTRIES</div>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="country asia_pacific">
                                    <div class="continent">ASIA/PACIFIC</div>
                                    <ul>

                                    </ul>
                                    </div>
                                </div>
                                </div>
                                <div style="clear:both"></div>
                                <div class="bottom-bar">
                                <div class="remember-me">
                                    <input id="dataCountry" type="hidden" value="" name="dataCountryTxt">
                                    <input id="dataCountryName" type="hidden" value="" name="dataCountryNameTxt">
                                    <input type="checkbox" id="rememberMe" checked="checked">Remember my country selection and make that my default destination when visiting omni.com
                                </div>
                                <div class="distributor-bar close">
                                    <button class="btn go-back" disabled="true">GO BACK TO COUNTRY LIST</button>
                                </div>
                                </div>
                            </div>
                            <div class="quote dropdown-module data-txt hidden-md hidden-lg">
                                <svg class="data-txt" data-txt="Quote" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 89.1 70.3" style="enable-background:new 0 0 89.1 70.3;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#6B6A6C;}
                                .st1{fill:#ffffff;}
                            </style>
                            <g id="Layer_2">
                                <path class="st0" d="M26.4,69.8h41.6c6.6,0,12-5.4,12-12V12.7c0-6.6-5.4-12-12-12H26.4c-6.6,0-12,5.4-12,12v45.1C14.4,64.4,19.8,69.8,26.4,69.8
                                    z"/>
                            </g>
                            <g id="Layer_1">
                                <title>137all</title>
                                <g>
                                    <path class="st1" d="M65.4,50.3c0,3.7-0.7,7.2-1.9,10.5c7.1-5.7,11.7-13.9,11.8-22.9l0.1-0.2V15.9H52V44h12.7
                                        C65.2,46,65.4,48.1,65.4,50.3z"/>
                                    <path class="st1" d="M31.8,43.9c0.5,2.1,0.7,4.2,0.7,6.4c0,3.6-0.7,7.2-1.9,10.4c7.2-5.8,11.8-14,11.8-23.2h0v-0.1
                                        c0,0,0-0.1,0-0.1s0-0.1,0-0.1V15.8H19v28L31.8,43.9L31.8,43.9z"/>
                                </g>
                            </g>
                            </svg>
                                <span class="qty">11</span>
                            </div>
                            <div class="cart dropdown-module data-txt hidden-md hidden-lg">
                                <svg version="1.1" id="cart" data-txt="Cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 89.1 70.3" style="enable-background:new 0 0 89.1 70.3;" xml:space="preserve">
                                <title>137all</title>
                                <path class="st3" d="M31.2,56.5c-3.8,0-6.9,3.1-6.9,6.9s3.1,6.9,6.9,6.9s6.9-3.1,6.9-6.9S35.1,56.5,31.2,56.5z"/>
                                <path class="st3" d="M67.5,56.5c-3.8,0-6.9,3.1-6.9,6.9s3.1,6.9,6.9,6.9c3.8,0,6.9-3.1,6.9-6.9S71.3,56.5,67.5,56.5z"/>
                                <polygon class="st3" points="17.4,0 0,0 0,6 12.3,6 21.6,60.4 76.5,60.4 76.5,54.4 26.7,54.4 25.6,48.1 79.1,48.1 89.1,12.5 19.5,12.5 "/>
                                </svg>

                                <span class="cart-qty">23</span>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- END OF HEADER -->
    <div id="main-nav">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="distributor-selector hidden-md hidden-lg"><a href="">United States</a></div>
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs visible-sm" href="#">Shop at Omni</a>
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Homogenizers<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header"><a href="">Bead Mill Homogenizers</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bead Ruptor 4</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bead Ruptor 12</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bead Ruptor 24 Elite</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bead Ruptor 96</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bead Ruptor Cryo Cooling Unit</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><a href="">Manual Tissue Grinders</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">BioMasher Single-Use</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Dounce Glass Tissue</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Tenbroeck Glass Tissue</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Potter-Elvehjem Tissue</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header"><a href="">Rotor Stator Homogenizers</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">TH Tissue Homogenizer</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Tissue Master</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">GLH General Laboratory</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Mixer</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Micro</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">THQ Digital Tissue</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><a href="">Sonicators</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Ruptor 4000 Ultrasonic Homogenizer</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Sonic Ruptor 400 Homogenizer</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header"><a href="">Automated Homogenizers</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Prep Multi-Sample Homogenizer</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Prep 96 Homogenizer</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">LH 96 Automated Homogenizer Workstation</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Promotions and Demos</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Promotion Center</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Demo-Program</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Featured Products</li>
                                        <li id="myCarousel1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#"><img src="" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Most Powerfull Bead Mills on the Market</small></h4>
                                                    <button class="btn btn-primary add-to-cart" type="button"><span class="glyphicon glyphicon-plus"></span> Add to Cart</button>
                                                    <button href="#" class="btn btn-default add-to-quote" type="button">Add to Quote</button>
                                                </div>
                                                <div class="item">
                                                    <a href="#"><img src="" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Most Powerfull Bead Mills on the Market</small></h4>
                                                    <button class="btn btn-primary add-to-cart" type="button"><span class="glyphicon glyphicon-plus"></span> Add to Cart</button>
                                                    <button href="#" class="btn btn-default add-to-quote" type="button">Add to Quote</button>
                                                </div>
                                                <div class="item">
                                                    <a href="#"><img src="" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Most Powerfull Bead Mills on the Market</small></h4>
                                                    <button class="btn btn-primary add-to-cart" type="button"><span class="glyphicon glyphicon-plus"></span> Add to Cart</button>
                                                    <button href="#" class="btn btn-default add-to-quote" type="button">Add to Quote</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Extraction Kits</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">DNA Purification Kits</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">RNA Purification Kits</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consumables<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">DNA Kits</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">DNA Tissue Purification Kits</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">DNA Yeast Purification Kits</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">DNA Bacterial Purification Kits</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">RNA Kits</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">RNA Tissue Purification Kits</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">RNA Yeast Purification Kits</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">RNA Bacterial Purification Kits</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Tubes</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bulk Tubes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Pre-Filled Bead Tubes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Sealed Glass Tubes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Sealed Plastic Tubes</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Omni Tips</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">OmniTip<sup>&#174;</sup> Hybrid Probes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Hard Tissue OmniTip<sup>&#174;</sup></a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Soft Tissue OmniTip<sup>&#174;</sup></a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Beads</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bulk Beads</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Metal Beads</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Stainless Steel Beads</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Ceramic Beads</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Garnet Beads</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Glass Beads</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://via.placeholder.com/100x100/444444/ffffff?text=Product-Image" alt="GP FINDER"></a>
                                                <h4><small>Generator Probe Finder</small></h4>
                                                <button class="btn btn-solid">Start Searching</button>
                                            </div>
                                            <div class="item">
                                                <a href="#"><img src="http://via.placeholder.com/100x100/444444/ffffff?text=Product-Image" alt="ACCESSORY FINDER"></a>
                                                <h4><small>Product Accessory Finder</small></h4>
                                                <button class="btn btn-solid">Start Searching</button>
                                            </div>
                                            <div class="item">
                                                <a href="#"><img src="http://via.placeholder.com/100x100/444444/ffffff?text=Product-Image" alt="EXTRACTION KIT FINDER"></a>
                                                <h4><small>Featured Kits for Extraction</small></h4>
                                                <button class="btn btn-solid">Start Searching</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accessories<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Accessories By Product</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bead Ruptors</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Rotor Stators</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Ultrasonic Homogenizers</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Automated Homogenizers</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Omni Tips/Disposables</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">OmniTip<sup>&#174;</sup> Hybrid Probes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Hard Tissue OmniTip<sup>&#174;</sup></a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Soft Tissue OmniTip<sup>&#174;</sup></a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Tubes/Beads</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Pre-Filled Bead Tubes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bulk Tubes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Bulk Beads</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Replacement Parts</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Generator Probes</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Sealed Chambers</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Motor</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Generator Probes</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">THQ / Micro / Automated</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Th / GLH-850</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Mixer / Macro / Macro ES</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">Tissue Master</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Extraction Kits</li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">DNA Purification Kits</a></li>
                                        <li><a href="<?php echo $baseURL ?>products-page.php">RNA Purification Kits</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img src="http://via.placeholder.com/100x100/444444/ffffff?text=Product-Image" alt="GP FINDER"></a>
                                                <h4><small>Generator Probe Finder</small></h4>
                                                <button class="btn btn-solid">Start Searching</button>
                                            </div>
                                            <div class="item">
                                                <a href="#"><img src="http://via.placeholder.com/100x100/444444/ffffff?text=Product-Image" alt="ACCESSORY FINDER"></a>
                                                <h4><small>Product Accessory Finder</small></h4>
                                                <button class="btn btn-solid">Start Searching</button>
                                            </div>
                                            <div class="item">
                                                <a href="#"><img src="http://via.placeholder.com/100x100/444444/ffffff?text=Product-Image" alt="EXTRACTION KIT FINDER"></a>
                                                <h4><small>Featured Kits for Extraction</small></h4>
                                                <button class="btn btn-solid">Start Searching</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Resources <span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Product Resources</li>
                                        <li><a href="<?php echo $baseURL ?>product-manuals.php">Product Manuals</a></li>
                                        <li><a href="<?php echo $baseURL ?>product-brochures.php">Product Brochures</a></li>
                                        <li><a href="<?php echo $baseURL ?>repair-installation-guides.php">Repair &amp; Installation Guides</a></li>
                                        <li><a href="<?php echo $baseURL ?>corporate-files.php">Corporate Files</a></li>
                                        <li><a href="<?php echo $baseURL ?>application-notes.php">Application Notes</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Videos</li>
                                        <li><a href="<?php echo $baseURL ?>video-page.php">Product Videos</a></li>
                                        <li><a href="<?php echo $baseURL ?>video-page.php">How-To Videos</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Other Resources</li>
                                        <li><a href="#">Promotions | Deals</a></li>
                                        <li><a href="#">Warranty Registration</a></li>
                                        <li><a href="#">Distributor Locator</a></li>
                                    </ul>
                                </li>
                                <li class="col-xs-12 col-sm-12 col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Featured Resources</li>
                                            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="assets/images/skin.jpg" class="img-responsive" alt="product 1"></a>
                                                        <h4><small>Detection of the Bacterial 16S rDNA Gene..</small></h4>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="assets/images/nematode.jpg" class="img-responsive" alt="product 1"></a>
                                                        <h4><small>Most Powerfull Bead Mills on the Market</small></h4>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="assets/images/soil.jpg" class="img-responsive" alt="product 1"></a>
                                                        <h4><small>Most Powerfull Bead Mills on the Market</small></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> 
                                </li>
                            </ul>
                        </li>
                        <li class="ml dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Applications / Protocols<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Application Database</a></li>
                                <li><a href="#">Protocol Database</a></li>
                            </ul>
                        </li>
                        <li class="ml"><a href="#">Contact Us <span class="sr-only">(current)</span></a></li>
                    </ul>
                    <!-- <ul class="nav navbar-nav hidden-md hidden-sm hidden-xs navbar-right">
                        <li class="ml"><a href="#">Contact Us <span class="sr-only">(current)</span></a></li>
                    </ul> -->
                    <ul class="nav navbar-nav hidden-sm hidden-xs navbar-right header-icon-group">
                        <li class="quote dropdown-module">
                            <p style="
                                    vertical-align: bottom;
                                    line-height: 2em;
                                    margin: 0;
                                    color: white;
                                    display: inline-block;
                                ">Quote</p>
                                <style type="text/css">
                                    .st2{fill:#FFFFFF;}
                                    .st3{fill:#6D6C6F;}
                                </style>
                            <span class="qty">11</span>
                        </li>
                        <li class="cart dropdown-module">
                            <svg class="data-txt" version="1.1" id="cart" data-txt="Cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 89.1 70.3" style="enable-background:new 0 0 89.1 70.3;" xml:space="preserve">
                            <title>137all</title>
                            <path class="st1" d="M31.2,56.5c-3.8,0-6.9,3.1-6.9,6.9s3.1,6.9,6.9,6.9s6.9-3.1,6.9-6.9S35.1,56.5,31.2,56.5z"/>
                            <path class="st1" d="M67.5,56.5c-3.8,0-6.9,3.1-6.9,6.9s3.1,6.9,6.9,6.9c3.8,0,6.9-3.1,6.9-6.9S71.3,56.5,67.5,56.5z"/>
                            <polygon class="st1" points="17.4,0 0,0 0,6 12.3,6 21.6,60.4 76.5,60.4 76.5,54.4 26.7,54.4 25.6,48.1 79.1,48.1 89.1,12.5 19.5,12.5 "/>
                            </svg>
                            <span class="qty">23</span>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>
            <div id="shopping-cart-module">
                <h2>SHOPPING CART</h2>
                <button class="btn btn-solid">PROCEED TO CHECKOUT</button>
                <div class="messages" style="display: none;"></div>
                <ul class="items">
                    <li>
                        <div class="item">
                            <div class="col-md-4"><img src="assets/images/products/br96-thumb.jpg" alt=""></div>
                            <div class="product-col" class="col-md-6">
                                <a href="#" class="product-name">Bead Ruptor 96</a>
                                <span class="sku">SKU: 27001, </span><span>QTY: 1</span>
                                <div class="price">Price: $4,495.00</div>
                                <i class="glyphicon glyphicon-remove"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="col-md-4"><img src="assets/images/products/br96-thumb.jpg" alt=""></div>
                            <div class="product-col" class="col-md-8">
                                <a href="#" class="product-name">Bead Ruptor 96</a>
                                <span class="sku">SKU: 27001, </span><span>QTY: 1</span>
                                <div class="price">Price: $4,495.00</div>
                                <i class="glyphicon glyphicon-remove"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="col-md-4"><img src="assets/images/products/br96-thumb.jpg" alt=""></div>
                            <div class="product-col" class="col-md-8">
                                <a href="#" class="product-name">Bead Ruptor 96</a>
                                <span class="sku">SKU: 27001, </span><span>QTY: 1</span>
                                <div class="price">Price: $4,495.00</div>
                                <i class="glyphicon glyphicon-remove"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="bottom-info">
                    <button class="continue-shopping">Continue Shopping<i class="glyphicon glyphicon-chevron-left"></i></button>
                    <h4>Cart Subtotal: <span>$4,495.00</span></h4>
                </div>
                <div class="close-cart">
                    <i class="glyphicon glyphicon-remove"></i>
                </div>
            </div>
            <div id="quote-module">
                <h2>Quote Center</h2>
                <button class="btn btn-solid">PROCEED TO QUOTE</button>
                <div class="messages" style="display: none;"></div>
                <ul class="items">
                    <li>
                        <div class="item">
                            <div class="col-md-4"><img src="assets/images/products/br96-thumb.jpg" alt=""></div>
                            <div class="product-col" class="col-md-6">
                                <a href="#" class="product-name">Bead Ruptor 96</a>
                                <span class="sku">SKU: 27001, </span><span>QTY: 1</span>
                                <i class="glyphicon glyphicon-remove"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <div class="col-md-4"><img src="assets/images/products/br96-thumb.jpg" alt=""></div>
                            <div class="product-col" class="col-md-8">
                                <a href="#" class="product-name">Bead Ruptor 96</a>
                                <span class="sku">SKU: 27001, </span><span>QTY: 1</span>
                                <i class="glyphicon glyphicon-remove"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="close-cart quote">
                    <i class="glyphicon glyphicon-remove"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF MAIN-NAV -->
</section>




