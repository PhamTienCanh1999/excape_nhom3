<div id = "header">
            <div class="grid_frist">
                <div class = "grid_logo">
                    <a href="./">
                        <img src = "./logo/logo.png" title="logo" alt="logo">
                    </a>
                </div>
                <div class = "grid_account">
                    <div class = "grid_center">
                        <a class="login" href="#login">
                            <img class="img_account" src = "icon/user-6-48.png" title="icon" alt="ảnh đại diện">Đăng nhập
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu_contain">
                    <div class="grid_center">
                        <ul class="menu_ul">
                            <li class="menu_li"><a href="./">Trang chủ</a></li>
                            <li class="menu_li"><a href="./store.php">Ban công</a></li>
                            <li class="menu_li"><a href="./store.php">Phòng tắm</a></li>
                            <li class="menu_li"><a href="./store.php">Chuyên dụng</a></li>
                            <li class="menu_li"><a href="./contact.php">Liên hệ</a></li>
                            <li class="cart_li">
                                <button class="cart_button" onclick="showCart()">0</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id = "cart_info">
                <div class = "cart_text">
                    <button onclick="hideCart()"></button>
                    <div class = "grid_center">Giỏ hàng</div>
                </div>
            </div>
            <script>
                function showCart(){
                    document.getElementById("cart_info").style.display = "block";
                }
                function hideCart(){
                    document.getElementById("cart_info").style.display = "none";
                }
            </script>
        </div>