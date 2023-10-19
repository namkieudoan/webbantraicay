<?php 

session_start();
    include_once ("admin/class/adminback.php");
    $obj = new adminback();

    $cata_info = $obj-> p_display_catagory();
    $cataDatas = array();
    while($data = mysqli_fetch_assoc($cata_info)){
        $cataDatas[]=$data;
    }
?>




<?php
include_once("includes/head.php");
?>

<body class="biolife-body">
    <!-- Preloader -->

    <?php
    include_once("includes/preloader.php");
    ?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">

        <?php
        include_once("includes/header_top.php");
        ?>

        <?php
        include_once("includes/header_middle.php");
        ?>

        <?php
        include_once("includes/header_bottom.php");
        ?>

    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Block 01: Main Slide-->

            <?php
            include_once("includes/slider_main.php")
            ?>

            <!--Block 02: Banners-->

            <?php
            include_once("includes/banner_slider.php")
            ?>
            <!--Block 06: Products-->
            <div class="Product-box sm-margin-top-96px">
                <div class="container">
                    <div class="row">
                        <?php
                            include_once("includes/top_rated_product.php")

                        ?>
                    </div>
                </div>
            </div>
            <div class="Product-box sm-margin-top-96px">
                <div class="container">
                    <div class="row">
                        <?php
                            include_once("includes/top_new_product.php")

                        ?>
                    </div>
                </div>
            </div>

           
            <!--Block 07: Brands-->
            <?php
            include_once("includes/brands.php");
            ?>

             <!-- tin tức -->
            <div class="Product-box sm-margin-top-96px sm-margin-bottom-80px">
                <div class="container">
                    <div class="row">
                        <h2>Phần Tin tức</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- FOOTER -->

    <?php
    include_once("includes/footer.php");
    ?>

    <!--Footer For Mobile-->
    <?php
    include_once("includes/mobile_footer.php");
    ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <?php
    include_once("includes/script.php")
    ?>
</body>

</html>