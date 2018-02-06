<?php include 'head.php';?>
<body class="contact-page">
    <div class="page-wrapper">
        <div class="oveflow">
        	<?php include 'header.php';?>
            <section class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Contact Page</li>
                    </ol>
                </div>
            </section>
            <section class="main-content">
                <div class="header-image small">
                    <div class="bg-tile"></div>
                    <div class="container">
                        <h2>CONTACT</h2>
                    </div>
                </div>  
				<div class="content">
                    <div class="container">
                        <div class="col-md-9">
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
                                        <div class="btn btn-solid btn-lg">SUBMIT</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-sidebar">
                                <img class="logo" src="assets/images/logo-lg.svg" alt="">
                                <h4><strong>Omni International</strong></h4>
                                <address>
                                    <p>935-C Cobb Place Blvd</p>
                                    <p>Kennesaw GA, 30144</p>
                                    <p>United States</p>
                                </address>
                                <p>
                                    <strong>Email: </strong>
                                    <a href="mailto:sales@omni-inc.com">sales@omni-inc.com</a>
                                </p>
                                <p>
                                    <strong>Phone: </strong>
                                    <span>770-421-0206</span>
                                </p>
                                <p>
                                    <strong>Toll-Free: </strong>
                                    <span>770-421-0206</span>
                                </p>
                                <p>
                                    <strong>Fax: </strong>
                                    <span>1-800-776-4431</span>
                                </p>
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
