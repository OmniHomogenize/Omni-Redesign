<?php include 'head.php';?>

<body class="shopping-cart-page">
    <div class="page-wrapper">
        <div class="oveflow">
        	<?php include 'header.php';?>
            <section class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shopping Page</li>
                    </ol>
                </div>
            </section>
            <section class="main-content">
                <div class="header-image small">
                    <div class="bg-tile"></div>
                    <div class="container">
                        <h2>SHOPPING CART</h2>
                    </div>
                </div>  
				<div class="content">
                    <div class="container">
                        <div class="col-md-3 pull-right">
                            <div class="shopping-cart-sidebar">
                                <h3>Checkout Details</h3>
                                <div class="cart-info">
                                    <div class="row">
                                        <span class="col-md-6">Subtotal:</span><span class="col-md-6 text-right">$14,985.00</span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-6">Shipping:</span><span class="col-md-6 text-right">$64.52</span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-6">Tax:</span><span class="col-md-6 text-right">$389.16</span>
                                    </div>
                                    <div class="row discount">
                                        <span class="col-md-6">Discount:</span><span class="col-md-6 text-right">10% | $165.8</span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-6 total">TOTAL:</span><span class="col-md-6 total text-right">$5,429.04</span>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-solid btn-lg btn-block">Start Checkout</button>
                                <button class="btn btn-outline btn-lg btn-block">Continue Shopping</button>
                                <button class="btn btn-outline btn-lg btn-block"><i class="glyphicon glyphicon-duplicate"></i>Copy to Quote</button>
                                <button id="estimate-shipping" class="btn btn-outline btn-lg btn-block">Estimate Shipping <i class="glyphicon glyphicon-chevron-down"></i><i class="glyphicon glyphicon-chevron-up"></i></button>
                                <div class="estimate-shipping">
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <form>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label for="country">Country</label>
                                                <input type="text" name="country" placeholder="Select Country" >
                                            </div>
                                            <div class="input-group">
                                                <label for="state">State/Province</label>
                                                <input type="text" name="state" placeholder="Select State/Province" >
                                            </div>
                                            <div class="input-group">
                                                <label for="zip">Zip/Postal Code</label>
                                                <input type="text" name="zip" placeholder="Select Zip/Postal" >
                                            </div>
                                            <input type="submit" class="btn btn-lg btn-block" value="Get Shipping Quote">
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div class="extra-info hidden-xs hidden-sm">
                                    <div class="row">
                                        <img class="col-md-8" src="assets/images/Payments-by-Sage-Pay-Horizontal-3.jpg" alt="SAGE PAY PAYMENTS">
                                        <img class="col-md-4" src="assets/images/iso.png" alt="ISO CERTIFICATION">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 pull-left">
                            <form action="">
                                <table class="product-table table-responsive">
                                    <thead>
                                        <td>Items in Your Cart</td>
                                        <td>Price</td>
                                        <td>Qty</td>
                                        <td></td>
                                        <td class="text-right">Item Subtotal</td>
                                    </thead>
                                    <tbody>
                                        <tr class="product">
                                            <td>
                                                <img src="assets/images/belite-png.png" alt="">
                                                <div class="short-desc">
                                                    <a href="#">Bead Ruptor 12</a>
                                                    <p><span>SKU:</span>19-050A</p>
                                                </div>
                                            <td>
                                                <span>$4,995.00</span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input class="qty" type="number" name="qty" value="1" min="0">
                                                </div>
                                            </td>
                                            <td>
                                                <i class="glyphicon glyphicon-remove"></i><span>Remove</span>
                                            </td>
                                            <td class="text-right">$4,995.00</td>
                                        </tr>
                                        <tr class="product">
                                            <td>
                                                <img src="assets/images/belite-png.png" alt="">
                                                <div class="short-desc">
                                                    <a href="#">Bead Ruptor 12</a>
                                                    <p><span>SKU:</span>19-050A</p>
                                                </div>
                                            <td>
                                                <span>$4,995.00</span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input class="qty" type="number" name="qty" value="1" min="0">
                                                </div>
                                            </td>
                                            <td>
                                                <i class="glyphicon glyphicon-remove"></i><span>Remove</span>
                                            </td>
                                            <td class="text-right">$4,995.00</td>
                                        </tr>
                                        <tr class="product">
                                            <td>
                                                <img src="assets/images/belite-png.png" alt="">
                                                <div class="short-desc">
                                                    <a href="#">Bead Ruptor 12</a>
                                                    <p><span>SKU:</span>19-050A</p>
                                                </div>
                                            <td>
                                                <span>$4,995.00</span>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input class="qty" type="number" name="qty" value="1" min="0">
                                                </div>
                                            </td>
                                            <td>
                                                <i class="glyphicon glyphicon-remove"></i><span>Remove</span>
                                            </td>
                                            <td class="text-right">$4,995.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="hidden-xs">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-right">Order Subtotal: <span>$14,985.00</span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <p class="sm-table-footer hidden-sm hidden-md hidden-lg text-right">Order Subtotal: <span>$14,985.00</span></p>
                            </form>
                            <form action="" class="promo horizontal-form">
                                <div class="form-group">
                                    <label for="promo-code" class="col-sm-2 control-label text-right">Promo Code:</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="promo-code" placeholder="Enter your promotional code here..">
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-solid green">APPLY</button>
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
