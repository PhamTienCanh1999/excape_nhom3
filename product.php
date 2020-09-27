<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="file_css/layout.css">
        <link rel="stylesheet" href="file_css/product_body.css">
        <link rel="stylesheet" href="file_css/product.css">
    </head>
    <body>
        <?php include("file_php/header.php");?>
        <div id = "body" style="background-color: whitesmoke;">
            <div id="product_body"><!-- khối chứa tất cả nội dung của thân trang -->
                <div class="product_body_frist">
                    <div class="group_product_title"><!-- khối tiêu đề sản phẩm -->Cửa hàng / Hàng hóa thứ nhất</div>
                    <div class="group_product_contrain"><!-- khối chứa các thông tin sản phẩm -->
                        <div class="product_content"><!-- khối mua bán -->
                            <div class="product_left"><!-- khối ảnh sản phẩm -->
                                <div class="main_image_div"><!-- khối hiển thị ảnh chính -->
                                    <img src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa">
                                </div>
                                <div class="extra_image_div"><!-- khối hiển thị ảnh phụ -->
                                    <ul class="extra_ul">
                                        <li class="extra_li"><a href="#1"><img src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa"></a></li>
                                        <li class="extra_li"><a href="#1"><img src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa"></a></li>
                                        <li class="extra_li"><a href="#1"><img src="img/SL3.jpg" title="Hàng hóa" alt="Hàng hóa"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_right"><!-- khối mua bán sản phẩm -->
                                <div class="product_short_info"><!-- khối hiển thị thông tin cơ bản sản phẩm -->
                                    <p class="product_name_info">Hàng hóa thứ nhất</p>
                                    <p class="product_id_info">Mã hàng hóa: 10001</p>
                                    <p class="product_price_info">Giá: 100.000</p>
                                    <div class="rate">Đánh giá:
                                        <ul class="star_ul">
                                            <li><a class="star first"></a></li>
                                            <li><a class="star second"></a></li>
                                            <li><a class="star third"></a></li>
                                            <li><a class="star fourth"></a></li>
                                            <li><a class="star fifth"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_buy"><!-- khối hiển chức năng mua bán sản phẩm -->
                                    <form action="#mua">
                                        <label for="fname">Số lượng:</label><br>
                                        <input type="number" id="count" name="count" min="1" max="50">
                                    </form>
                                    <a class="button_buy buy_cart" href="#thanhtoan">Thêm vào giỏ hàng</a>
                                    <a class="button_buy buy_now"  href="#thanhtoan">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="product_info"><!-- khối thông tin chi tiết sản phẩm -->
                            <p class="info_title">Thông tin chi tiết sản phẩm</p>
                            <p>Sản phẩm được sản xuất theo công nghệ mới mất đảm bảo khả năng chống mùi cưc hiệu quả<br>
                                Bên cạnh đó giá cả cũng rất phải chăng
                            </p>
                        </div>
                    </div>
                </div>
                <div class="product_other">
                    <div class="product_group" style="background-color: #ddf0e7;"><!-- khối các sản phẩm tương tự khác -->
                        <p class="product_title">Các sản phẩm tương tự khác</p>
                        <div class="product_content">
                            <?php
                            for($a=0;$a<4;$a++)
                            { ?>
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
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="product_rate_contain">
                    <div class="product_rate"><!-- khối đánh giá bình luận -->
                        <div class="product_rated"><!-- khối đánh giá bình luận trước -->
                            <p class="product_rated_title">Các đánh giá sản phẩm trước</p>
                            <div class="once_rated">
                                <img class="account_short_image" src="img/bc2.jpg">
                                <p class="account_short_name">Đây là người bình luận</p>
                                <div>
                                    <ul class="star_ul">
                                        <li><a class="star_24 first_24"></a></li>
                                        <li><a class="star_24 second_24"></a></li>
                                        <li><a class="star_24 third_24"></a></li>
                                        <li><a class="star_24 fourth_24"></a></li>
                                        <li><a class="star_24 fifth_24"></a></li>
                                    </ul>
                                </div>
                                <p class="rated_text">Chất lượng hàng không được tốt</p>
                            </div>
                            <div class="once_rated">
                                <img class="account_short_image" src="img/bc2.jpg">
                                <p class="account_short_name">Đây là người bình luận</p>
                                <div>
                                    <ul class="star_ul">
                                        <li><a class="star_24 first_24"></a></li>
                                        <li><a class="star_24 second_24"></a></li>
                                        <li><a class="star_24 third_24"></a></li>
                                        <li><a class="star_24 fourth_24"></a></li>
                                        <li><a class="star_24 fifth_24"></a></li>
                                    </ul>
                                </div>
                                <p class="rated_text">Chất lượng hàng không được tốt</p>
                            </div>
                        </div>
                        <div class="product_rated"><!-- khối ghi đánh giá bình luận -->
                            <p class="product_rated_title">Đánh giá cửa bạn về sản phẩm</p>
                            <div class="once_rated">
                                <img class="account_short_image" src="img/bc2.jpg">
                                <div>
                                    <ul class="star_ul">
                                        <li><a class="star_24 first_24"></a></li>
                                        <li><a class="star_24 second_24"></a></li>
                                        <li><a class="star_24 third_24"></a></li>
                                        <li><a class="star_24 fourth_24"></a></li>
                                        <li><a class="star_24 fifth_24"></a></li>
                                    </ul>
                                </div>
                                <p class="rated_text" style="margin-top:5px;">Viết đánh giá của bạn vào đây</p>
                                <form>
                                    <textarea id="rate_text" name="subject" placeholder="Write something.."></textarea>
                                    <input type="submit" value="Gửi">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("file_php/footer.php");?>
    </body>
</html>