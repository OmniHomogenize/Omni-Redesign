<?php include 'head.php';?>

<body class="account-page">
    <div class="page-wrapper">
        <div class="oveflow">
        	<?php include 'header.php';?>
            <section class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Account Page</li>
                    </ol>
                </div>
            </section>
            <section class="main-content">
                <div class="header-image small">
                    <div class="bg-tile"></div>
                    <div class="container">
                        <h2>ACCOUNT INFORMATION</h2>
                    </div>
                </div>  
				<div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="recent-orders tab-content">
                                    <h3>RECENT ORDERS</h3>
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
                                            <td>View Order</td>
                                        </tr>
                                        <tr>
                                            <td>100004351</td>
                                            <td>5/2/2017</td>
                                            <td>Travis Heller</td>
                                            <td>$1,011.03</td>
                                            <td>Pending</td>
                                            <td>View Order</td>
                                        </tr>
                                        <tr>
                                            <td>100004351</td>
                                            <td>5/2/2017</td>
                                            <td>Travis Heller</td>
                                            <td>$1,011.03</td>
                                            <td>Pending</td>
                                            <td>View Order</td>
                                        </tr>
                                        <tr>
                                            <td>100004351</td>
                                            <td>5/2/2017</td>
                                            <td>Travis Heller</td>
                                            <td>$1,011.03</td>
                                            <td>Pending</td>
                                            <td>View Order</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="shipping-address tab-content">
                                    <h3>Default Shipping Address</h3>
                                    <i class="glyphicon glyphicon-pencil"></i>
                                    <i class="glyphicon glyphicon-remove hidden"></i>
                                    <address>
                                        <p>Travis Heller</p>
                                        <p>theller@omni-inc.com</p>
                                        <p>4044 George Busbee Pky</p>
                                        <p>Kennesaw, Georgia, 30144</p>
                                        <p>United States</p>
                                        <p>T: 404-406-2822</p>
                                        <p>F: 404-406-2822</p>
                                    </address>
                                    <div class="edit hidden">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name" class="form-control" placeholder="Travis Heller">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="email" class="form-control" placeholder="theller@omni-inc.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="street" class="col-sm-2 control-label">Street</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="street" class="form-control" placeholder="4044 George Busbee Pky">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city" class="col-sm-2 control-label">City</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="city" class="form-control" placeholder="Kennesaw">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="state" class="col-sm-2 control-label">State</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="state" class="form-control" placeholder="Georgia">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="country" class="col-sm-2 control-label">Select Country</label>
                                                    <div class="col-sm-10">
                                                        <select name="country" class="form-control">
                                                            <option value="Select a Country">Select a Country..</option>
                                                            <option value="United States">United States</option>
                                                            <option value="Canada">Canada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="phone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fax" class="col-sm-2 control-label">Fax</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="fax">
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn btn-solid submit-changes">Submit Change</button>
                                                    <button class="btn btn-outline cancel-changes">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="billing-address tab-content">
                                    <h3>Default Billing Address</h3>
                                    <i class="glyphicon glyphicon-pencil"></i>
                                    <i class="glyphicon glyphicon-remove hidden"></i>
                                    <address>
                                        <p>Travis Heller</p>
                                        <p>theller@omni-inc.com</p>
                                        <p>4044 George Busbee Pky</p>
                                        <p>Kennesaw, Georgia, 30144</p>
                                        <p>United States</p>
                                        <p>T: 404-406-2822</p>
                                        <p>F: 404-406-2822</p>
                                    </address>
                                    <div class="edit hidden">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="name" class="form-control" placeholder="Travis Heller">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="email" class="form-control" placeholder="theller@omni-inc.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="street" class="col-sm-2 control-label">Street</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="street" class="form-control" placeholder="4044 George Busbee Pky">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city" class="col-sm-2 control-label">City</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="city" class="form-control" placeholder="Kennesaw">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="state" class="col-sm-2 control-label">State</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="state" class="form-control" placeholder="Georgia">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="country" class="col-sm-2 control-label">Select Country</label>
                                                    <div class="col-sm-10">
                                                        <select name="country" class="form-control">
                                                            <option value="Select a Country">Select a Country..</option>
                                                            <option value="United States">United States</option>
                                                            <option value="Canada">Canada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="phone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fax" class="col-sm-2 control-label">Fax</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="fax">
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn btn-solid submit-changes">Submit Change</button>
                                                    <button class="btn btn-outline cancel-changes">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
