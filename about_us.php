<?php
session_start();
include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();

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

            <!--Hero Section-->
            <div class="hero-section hero-background">
                <h1 class="page-title">
                    <?php
                    foreach ($pro_datas as $pro_data) {
                        echo $pro_data['pdt_name'];
                    }
                    ?>
                </h1>

               
            </div>




            <!--Navigation section-->
            <div class="container">
                <nav class="biolife-nav">
                    <ul>
                        <li class="nav-item"><a href="index.php" class="permal-link">Trang Chủ</a></li>

                        <li class="nav-item"><span class="current-page">

                                <?php
                                foreach ($pro_datas as $pro_data) {
                                    echo $pro_data['ctg_name'];
                                }
                                ?>
                            </span></li>

                        <li class="nav-item"><span class="current-page">

                                <?php
                                foreach ($pro_datas as $pro_data) {
                                    echo $pro_data['pdt_name'];
                                }
                                ?>
                            </span></li>
                    </ul>
                </nav>


            </div>

            <div class="container">
                <div class="page-contain single-product">
                    <div class="container">

                        <!-- Main content -->
                        <div id="main-content" class="main-content">
                            <h1>Về chúng tôi</h1>
                            <h2> Website bán hoa quả được sinh ra và phát triển từ nhóm NAB </h2>
                            <p>Nhóm có 3 thành viên: Nam - Ánh - Bình. Mỗi thành viên có sự quan trọng nhất định trong dự án</p>
                            <p>Dự án mang nhiều ý nghĩa từ hỗ trợ các anh chị quản lý cho đến các bạn bán hàng thủ công và giúp cho khách hàng trải nghiệm mua sắm nhanh tiện lợi với lợi ích của công nghệ mang lại</p>
                            <span>Thông tin cụ thể:</span>
                            <span> Kiều Doãn Nam - UDPM1 K11</span> </br>
                            <span> Nguyễn Ngọc Ánh - UDPM2 K12</span></br>
                            <span> Nguyễn ĐÌnh Bình - UDPM1 K12</span></br>

                            <h2>Xin cảm ơn</h2>
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

    <?php
    include_once("includes/mobile_global.php")
    ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <?php
    include_once("includes/script.php")
    ?>
</body>

</html>