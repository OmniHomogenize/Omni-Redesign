<?php include 'head.php';?>

<body class="category-page">
    <div class="page-wrapper">
        <div class="oveflow">
        	<?php include 'header.php';?>
            <section class="breadcrumbs">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $baseURL ?>index.php">Home</a></li>
                        <li class="breadcrumb-item">Industries</li>
                    </ol>
                </div>
            </section>
            <section class="main-content">
                <div class="header-image">
                    <div class="image-wrapper static">
                        <div>
                            <img src="assets/images/Banners/new/Industries-Banner.jpg" class="hidden-xs hidden-sm" alt="">
                            <img src="assets/images/Banners/cat-bead-nills-banner.jpg" class="hidden-md hidden-lg" alt="">
                        </div>
                    </div>
                </div>
                 <div class="product-description-bar"></div> 
				<div class="content">
                    <div class="container">
                        <div class="industries-list">
                            <ul class="list">
                                <li class="col-md-4 col-sm-6">
                                    <div class="wrapper">
                                        <h4>Pharmaceutical &amp; Life Science</h4>
                                        <img src="assets/images/icons/pharmaceutical1.svg" alt="Pharmaceutical and Life Science Industry Icon">
                                        <p>Omni develops and provides laboratory equipment dedicated to the pharmaceutical Industry (laboratories and biotechnology institutes), life science  industries, as well as public and private research institutes.</p>
                                        <a href="<?php echo $baseURL ?>pharmaceutical-cat-page.php" class="btn btn-solid btn-wide">DISCOVER</a>
                                    </div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="wrapper">
                                        <h4>Food</h4>
                                        <img src="assets/images/icons/food.svg" alt="Food Industry Icon">
                                        <p>Omni offers a wide range of homogenizers to accommodate disruption of many food products of varying sizes and toughness. Food QC labs around the world rely on Omni’s high-quality homogenizers as their first step in food product analysis.</p>
                                        <a href="<?php echo $baseURL ?>food-cat-page.php" class="btn btn-solid btn-wide">DISCOVER</a>
                                    </div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="wrapper">
                                        <h4>Environmental</h4>
                                        <img src="assets/images/icons/environmental.svg" alt="Environmental Industry Icon">
                                        <p>With rapid population expansion, increasing industrialization and environmental resource scarcity, the monitoring of our agricultural resources, water and soil quality and waste management processes is critically important.</p>
                                        <a href="<?php echo $baseURL ?>environmental-cat-page.php" class="btn btn-solid btn-wide">DISCOVER</a>
                                    </div>
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="wrapper">
                                        <h4>Forensics</h4>
                                        <img src="assets/images/icons/forensics.svg" alt="Forensics Industry Icon">
                                        <p>Forensic analyses often involve the extraction of analytes. An ideal forensic lab homogenizer would be capable of high throughput extraction of samples such as teeth, hair and nails while ensuring that no cross-contamination is possible.</p>
                                        <a href="<?php echo $baseURL ?>forensics-cat-page.php" class="btn btn-solid btn-wide">DISCOVER</a>
                                    </div>          
                                </li>
                                <li class="col-md-4 col-sm-6">
                                    <div class="wrapper">
                                        <h4>Cannabis Testing</h4>
                                        <img src="assets/images/icons/cannabis.svg" alt="Cannabis Industry Icon">
                                        <p>With increased availability, consumers are demanding testing and quality control governess. While global standards for cannabis testing have not yet been adopted in many states, cannabis products must undergo testing to ensure they are safe for consumption.</p>
                                        <a href="<?php echo $baseURL ?>cannabis-cat-page.php" class="btn btn-solid btn-wide">DISCOVER</a>
                                    </div>
                                </li>
                            </ul>
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
