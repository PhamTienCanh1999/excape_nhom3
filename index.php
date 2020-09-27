<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="file_css/layout.css">
        <link rel="stylesheet" href="file_css/product.css">
        <link rel="stylesheet" href="file_css/main_body.css">
    </head>
    <body>
        <?php include("file_php/header.php");?>
        <div id = "body">
            <div id = "main_body">
                <!--Phần thân trang có thể thay thế-->
                <div class="grid_ad_contain"><!--Khối quảng cáo-->
                    <div class="grid_slideshow"><!--Khối slideshow-->
                        <div class="slideshow_title">
                            <b><p class="title_text1">FASTER FOR BETTER LIFE</p></b>
                            <p class="title_text2">Solve for luxury department</p>
                        </div>
                        <div class="slideshow_contain">
                            <div class="slideshow">
                                <div class="mySlide fade">
                                    <img src="img/SL1.jpg">
                                    <div class="text">Ảnh 1</div>
                                    <div class="numbertext">1 / 3</div>
                                </div>
                                <div class="mySlide fade">
                                    <img src="img/SL2.jpg">
                                    <div class="text">Ảnh 2</div>
                                    <div class="numbertext">2 / 3</div>
                                </div>
                                <div class="mySlide fade">
                                    <img src="img/SL3.jpg">
                                    <div class="text">Ảnh 3</div>
                                    <div class="numbertext">3 / 3</div>
                                </div>
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                <div class="dot_contain">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                    <span class="dot" onclick="currentSlide(3)"></span>
                                </div>
                            </div>
                            <script>
                                var slideIndex = 1;
                                showSlides(slideIndex);
                                // Next/previous controls
                                function plusSlides(n) {
                                    showSlides(slideIndex += n);
                                }
                                // Thumbnail image controls
                                function currentSlide(n) {
                                    showSlides(slideIndex = n);
                                }
                                function showSlides(n) {
                                    var i;
                                    var slides = document.getElementsByClassName("mySlide");
                                    var dots = document.getElementsByClassName("dot");
                                    if (n > slides.length) {slideIndex = 1}
                                    if (n < 1) {slideIndex = slides.length}
                                    for (i = 0; i < slides.length; i++) {
                                        slides[i].style.display = "none";
                                    }
                                    for (i = 0; i < dots.length; i++) {
                                        dots[i].className = dots[i].className.replace(" active", "");
                                    }
                                    slides[slideIndex-1].style.display = "block";
                                    dots[slideIndex-1].className += " active";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="grid_shop"><!--Khối cửa hàng-->
                        <img src="img/background.jpg">
                        <b>
                            <p class="shop_content" style="top:5%; color: #FFFFFF">CỬA HÀNG</p>
                            <p class="shop_content" style="top:13%; color: #C9D9D1;">CỦA CHÚNG TÔI</p>
                        </b>
                        <a class="button" href="./store.php" alt="Cửa hàng">Tham Quan</a>
                    </div>
                </div>
                <div class = "grid_product_contain"><!--Khối hàng hóa-->
                    <div class="product_group" style="background-color: #6D8C7D;"><!--Khối hàng hóa mới nhất-->
                        <div class="product_title">Hôm nay có gì mới?</div>
                        <div class="product_content">
                            <?php
                            for($a=0;$a<4;$a++)
                            {?>
                            <div class="product_contain">
                                <div class="product_div">
                                    <a class="link_quick_view" href="#sanpham">
                                        <div class="product_img_div">
                                            <img class="product_img" src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa">
                                            <div class="quick_view">Quick View</div>
                                        </div>
                                        <p class="product_name">Hàng hóa thứ nhất</p>
                                        <div class = "product_price">
                                            <img src="icon/price.png" title="icon" alt="icon giá">
                                            <p>Giá: 100.000</p>
                                        </div>
                                        <div class="button_div">
                                            <a href="#chitiet" class="product_button">Chi tiết</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product_group" style="background-color: #9FB3A9;"><!--Khối hàng hóa được xem nhiều nhất-->
                        <div class="product_title">Hàng hóa nào đang hot?</div>
                        <div class="product_content">
                            <?php
                            for($a=0;$a<4;$a++)
                            {?>
                            <div class="product_contain">
                                <div class="product_div">
                                    <a class="link_quick_view" href="#sanpham">
                                        <div class="product_img_div">
                                            <img class="product_img" src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa">
                                            <div class="quick_view">Quick View</div>
                                        </div>
                                        <p class="product_name">Hàng hóa thứ nhất</p>
                                        <div class = "product_price">
                                            <img src="icon/price.png" title="icon" alt="icon giá">
                                            <p>Giá: 100.000</p>
                                        </div>
                                        <div class="button_div">
                                            <a href="#chitiet" class="product_button">Chi tiết</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product_group" style="background-color: #C9D9D1;"><!--Khối hàng hóa bán chạy nhất -->
                        <div class="product_title">Hàng hóa bán chạy nhất của chúng tôi</div>
                        <div class="product_content">
                            <?php
                            for($a=0;$a<4;$a++)
                            {?>
                            <div class="product_contain">
                                <div class="product_div">
                                    <a class="link_quick_view" href="#sanpham">
                                        <div class="product_img_div">
                                            <img class="product_img" src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa">
                                            <div class="quick_view">Quick View</div>
                                        </div>
                                        <p class="product_name">Hàng hóa thứ nhất</p>
                                        <div class = "product_price">
                                            <img src="icon/price.png" title="icon" alt="icon giá">
                                            <p>Giá: 100.000</p>
                                        </div>
                                        <div class="button_div">
                                            <a href="#chitiet" class="product_button">Chi tiết</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="product_group" style="background-color: #f5f5f5;"><!--Khối hàng hóa giảm giá-->
                        <div class="product_title">Siêu ưu đãi</div>
                        <div class="product_content">
                            <?php
                            for($a=0;$a<4;$a++)
                            {?>
                            <div class="product_contain">
                                <div class="product_div">
                                    <a class="link_quick_view" href="#sanpham">
                                        <div class="product_img_div">
                                            <img class="product_img" src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa">
                                            <div class="quick_view">Quick View</div>
                                        </div>
                                        <p class="product_name">Hàng hóa thứ nhất</p>
                                        <div class = "product_price">
                                            <img src="icon/price.png" title="icon" alt="icon giá">
                                            <p>Giá: 100.000</p>
                                        </div>
                                        <div class="button_div">
                                            <a href="#chitiet" class="product_button">Chi tiết</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="grid_other_contrain"><!--Khối liên khác-->
                    <div><!--Khối liên hệ nhà sản xuất--></div>
                </div>
            </div>
        </div>
        <?php include("file_php/footer.php");?>
    </body>
</html>