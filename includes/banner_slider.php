<?php
$pdt_info = $obj->display_product_byCata(1);
$pdt_datas = array();
while ($pdt_ftecth = mysqli_fetch_assoc($pdt_info)) {
    $pdt_datas[] = $pdt_ftecth;
}
?>
<div class="special-slide">
    <div class="container">
        
        <div class="biolife-service type01 biolife-service__type01 sm-margin-top-0 xs-margin-top-45px">
            <ul class="services-list">
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">1</span>
                        <span class="biolife-icon icon-beer"></span>
                        <a class="srv-name" href="#">Sản phẩm có tem đầy đủ</a>
                    </div>
                </li>
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">2</span>
                        <span class="biolife-icon icon-schedule"></span>
                        <a class="srv-name" href="#">Đặt và giao hàng đúng hẹn</a>
                    </div>
                </li>
                <li>
                    <div class="service-inner color-reverse">
                        <span class="number">3</span>
                        <span class="biolife-icon icon-car"></span>
                        <a class="srv-name" href="#">Miễn phí giao hàng nội thành</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>