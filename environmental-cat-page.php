<?php include 'head.php';?>

<body class="category-page">
    <div class="page-wrapper">
        <div class="oveflow">
        	<?php include 'header.php';?>
            <section class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $baseURL ?>index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $baseURL ?>industries-page.php">Industries</a></li>
                        <li class="breadcrumb-item">Environmental</li>
                    </ol>
                </div>
            </section>
            <section class="main-content">
                <div class="header-image">
                    <div class="image-wrapper static">
                        <div>
                            <img src="assets/images/Banners/new/Environmental-Banner.jpg" alt="Environmental Industry Category Page">
                        </div>
                    </div>
                </div>
                <div class="product-description-bar"></div> 
				<div class="content">
                    <div class="container">
                        <div class="industry-cat-description">
                            <div class="col-md-6">
                                <p class="bold">As environmental sample types can vary greatly, Omni International understands the importance of selecting the correct homogenizer for the specific application. That is why Omni is the only company to manufacturer rotor-stator, ultrasonic, bead mill and manual homogenizers.</p>
                            </div>
                            <div class="col-md-6">
                                <p>With rapid population expansion, increasing industrialization and environmental resource scarcity, the monitoring of our agricultural resources, water and soil quality and waste management processes is critically important. Monitoring these resources typically involves disruption and analysis of compounds from soil, plants and water.</p>
                            </div>
                        </div>
                        <section class="related-industry-fields">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h3>RELATED INDUSTRY FIELDS</h3>
                                </div>
                                <div class="col-md-6 related-industry">
                                    <div class="img-wrapper">
                                        <a href="<?php echo $baseURL ?>industry-soil.php">
                                            <figure>
                                                <img src="assets/images/industries/ind-cat-images/soil.jpg" alt="Soil industries category">
                                                <figcaption>
                                                    SOIL
                                                </figcaption>
                                            </figure>
                                        </a>
                                        <a href="<?php echo $baseURL ?>industry-soil.php" class="btn btn-solid btn-wide">DISCOVER</a>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 related-industry">
                                    <div class="img-wrapper">
                                        <a href="<?php echo $baseURL ?>industry-waste-water.php">
                                            <figure>
                                                <img src="assets/images/industries/ind-cat-images/waste-water.jpg" alt="Waste Water Industries Category">
                                                <figcaption>
                                                    WASTE WATER
                                                </figcaption>
                                            </figure>
                                        </a>
                                        <a href="<?php echo $baseURL ?>industry-waste-water.php" class="btn btn-solid btn-wide">DISCOVER</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="related-products">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h3>RELATED PRODUCTS</h3>
                                </div>
                                <div class="col-md-3 related-product">
                                    <div class="img-wrapper">
                                        <figure>
                                            <img src="assets/images/industries/related-products/lh96.png" alt="LH96 Automated Homogenizer">
                                        </figure>
                                        <div class="product-info">
                                            <h4 class="title">LH 96 Automated Homogenizer Workstation</h4>
                                            <p>Fully automated liquid handling and homogenizer workstation. The LH 96 has a modular design, small footprint and brushless motors for automated homogenizing.</p>
                                            <a href="" class="btn btn-solid btn-wide">VIEW PRODUCT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 related-product">
                                    <div class="img-wrapper">
                                        <figure>
                                            <img src="assets/images/industries/related-products/beadRuptorElite.png" alt="Bead Ruptor Elite">
                                        </figure>
                                        <div class="product-info">
                                            <h4 class="title">Bead Ruptor 24 Elite</h4>
                                            <p>the most advanced and easy to use bead mill homogenizer available. It is specifically designed for grinding, lysing, and homogenizing biological samples prior to molecular extraction.</p>
                                            <a href="" class="btn btn-solid btn-wide">VIEW PRODUCT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 related-product">
                                    <div class="img-wrapper">
                                        <figure>
                                            <img src="assets/images/industries/related-products/samplePrep96.png" alt="Omni Prep Multi-Sample Homogenizer">
                                        </figure>
                                        <div class="product-info">
                                            <h4 class="title">Omni Prep Multi-Sample Homogenizer</h4>
                                            <p>The Omni Prep microprocessor control allows the user to program both time and speed for processing up to 10 minutes at variable speeds up to 30,000 rpm.</p>
                                            <a href="" class="btn btn-solid btn-wide">VIEW PRODUCT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 related-product">
                                    <div class="img-wrapper">
                                        <figure>
                                            <img src="assets/images/industries/related-products/tissueDnaKit.png" alt="Tissue DNA Kit">
                                        </figure>
                                        <div class="product-info">
                                            <h4 class="title">Bead Mill Tissue DNA Purification Kit - 50 Prep</h4>
                                            <p>supports automated liquid handling and homogenization of up to ninety six samples in a single batch in sample tubes ranging from 1.5 mL to 50 mL</p>
                                            <a href="" class="btn btn-solid btn-wide">VIEW PRODUCT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
