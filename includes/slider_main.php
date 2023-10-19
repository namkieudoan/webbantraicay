<div class="main-slide block-slider nav-change">
                <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": false, "speed": 800}' >
                   
                <?php 
                    $obj = new adminback();

                   $rows =  $obj->SlideShow();

                   while ($row = mysqli_fetch_assoc($rows)){
                       
                  
                ?>
                
                <li>
                        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
                            <div class="media background-geen-01" style="background-image: url('admin/uploads/<?php echo $row["slider_img"]?>');"></div>
                            
                        </div>
                    </li>

                    

                    <?php 
                         }
                    ?>
                  
                 
                     <li>
                        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
                            <div class="media background-geen-02"></div>
                            <div class="text-content">
                                <i class="first-line">Lựu</i>
                                <h3 class="second-line">Rau cam kết 100% sạch</h3>
                                <p class="third-line">Các loại trái cây tươi mới</p>
                                <p class="buttons">
                                    <a href="./all_product.php" class="btn btn-bold">Vào cửa hàng</a>
                                    <a href="#" class="btn btn-thin">Xem giỏ hàng</a>
                                </p>
                            </div>
                        </div>
                    </li>
                
                </ul>
            </div>