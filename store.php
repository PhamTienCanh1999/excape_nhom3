<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="file_css/layout.css">
        <link rel="stylesheet" href="file_css/product2.css">
        <link rel="stylesheet" href="file_css/store_body.css">
    </head>
    <body>
        <?php include("file_php/header.php");?>
        <div id = "body" style="background-color: whitesmoke;">
            <div id="store_body"><!-- Khối chứa nội dung cửa hàng -->
                <div class="group_product_title"><!-- Khối tên cửa hàng -->Cửa hàng</div>
                <div class="group_product_contrain"><!-- Khối chứa nội dung hàng hóa -->
                    <div class="product_filter"><!-- Khối chứa chức năng lọc sản phẩm -->
                        <p>Lọc sản phẩm</p>
                        <form action="#loc">
                            <input type="radio" id="male" name="price" value="cao">
                            <label for="male">Trên 1.000.000</label><br>
                            <input type="radio" id="female" name="price" value="tb">
                            <label for="female">500.000 - 1.000.000</label><br>
                            <input type="radio" id="other" name="price" value="thap">
                            <label for="other">Dưới 500.000</label><br><br>
                            <button class="sort" style="float:none;">Lọc</button>
                        </form>
                    </div>
                    <div class="product_sort_content"><!-- Khối chứa nội dung sản phẩm -->
                        <div class="product_sort"><!-- Khối chứa chức năng sắp xếp -->
                            <form action="#sapxep">
                                <select id="cars" class="sort" name="cars">
                                    <option value="">Mới nhất</option>
                                    <option value="">Cũ nhất</option>
                                    <option value="">Giá tăng dần</option>
                                    <option value="">Giá giảm dần</option>
                                    <option value="">Tên A -> Z</option>
                                    <option value="">Tên Z -> A</option>
                                </select>
                                <button class="sort">Sắp xếp</button>
                            </form>
                        </div>
                        <div><!-- Khối chứa sản phẩm -->
                            <?php
                            for($a=0;$a<12;$a++)
                            {
                            ?>
                            <div class="product_contain_store">
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
                                            <a href="./product.php" class="product_button">Chi tiết</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="product_page"><!-- Khối chứa phân trang sản phẩm -->
                            <ul class="page_ul">
                                <li class="page_li"><a href="#1">1</a></li>
                                <li class="page_li"><a href="#2">2</a></li>
                                <li class="page_li"><a href="#3">3</a></li>
                                <li class="page_li"><a href="#next">></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("file_php/footer.php");?>
    </body>
</html>