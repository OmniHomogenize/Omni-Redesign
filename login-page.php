<?php include 'head.php';?>

<body class="login-page">
    <div class="page-wrapper">
        <div class="oveflow">
            <?php include 'header.php';?>
            <section class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Login Page</li>
                    </ol>
                </div>
            </section>
            <section class="main-content">
                <div class="header-image small">
                    <div class="bg-tile"></div>
                    <div class="container">
                        <h2>LOGIN OR CREATE AN ACCOUNT</h2>
                    </div>
                </div>
                <div class="content">
                    <div class="container">
                        <div class="login">
                            <h2>Already Have an Omni Account?</h2>
                            <p>Please sign in below</p>
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
                </div>
            </section>
            <!-- END OF MAIN-CONTENT -->
            <?php include 'footer.php';?>
            <!-- END OF FOOTER -->
        </div>
    </div>
    <!-- END OF PAGE-WRAPPER -->
    <?php include 'bottom-footer.php';?>
</body>

</html>
