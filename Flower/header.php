
<?php
?>
<div class="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid nav-links">
            <a class="navbar-brand" href="index.php">
                <img src="img/products/logo.png" id="logo" alt="logo" style=" width: 200px; height:auto">
            </a>
            <button style="color: green" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="color: green" class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <h5> <b>TRANG CHỦ</b> </h5>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h5> <b>SẢN PHẨM</b> <i class="fas fa-angle-down"></i></h5>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="ProductsPage.php?loai_hoa=hoa_HD">&nbsp;&nbsp;Hoa Hướng Dương</a></li>
                            <li><a href="ProductsPage.php?loai_hoa=hoa_CC">&nbsp;&nbsp;Hoa Cẩm Chướng</a></li>
                            <li> <a href="ProductsPage.php?loai_hoa=hoa_TT">&nbsp;&nbsp;Hoa Thủy Tiên</a></li>
                            <li><a href="ProductsPage.php?loai_hoa=hoa_XR">&nbsp;&nbsp;Xương Rồng</a></li>
                            <li><a href="ProductsPage.php?loai_hoa=Hoa_Hong">&nbsp;&nbsp;Hoa Hồng</a></li>
                            <li><a href="ProductsPage.php?loai_hoa=Hoa_DT">&nbsp;&nbsp;Hoa Đồng Tiền</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h5> <b>TIN TỨC</b> <i class="fas fa-angle-down"></i></h5>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#">&nbsp;&nbsp;Giá hoa hồng giảm</a></li>
                            <li><a href="#">&nbsp;&nbsp;Mẫu hoa mới</a></li>
                            <li><a href="#">&nbsp;&nbsp;Màu hoa hồng mới</a></li>


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h5> <b>LIÊN HỆ</b></h5>
                        </a>
                    </li>
                </ul>
                <form class="d-flex search-form" action="search.php" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" name="search" aria-label="Search" style="background-color: #f8fcf3; border-color: #328b37;">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
                <a href="#" id="search-btn" class="nav-btn"><i class="fas fa-search"></i></a>
                <a href="#" class="nav-btn" onclick="window.location.href = 'cart.php'"><i class="fas fa-shopping-cart"></i></a>
                <a href="#" id="account-btn" class="nav-btn"><i class="fas fa-user"></i></a>

            </div>
    </nav>
    <div id="inforAccount">
        <div class="side-bar">

            <div id="close-side-bar" class="fas fa-times"></div>

            

            <div id="accountDetail" class="navbar" style="display: none;">
                <a href="profile.html"> <i class="fas fa-angle-right"></i> My profile </a>
                <a href="purchased.html"> <i class="fas fa-angle-right"></i> Purchased products </a>
                <a href="viewed.html"> <i class="fas fa-angle-right"></i> Viewed products </a>
                <a href="favorite.html"> <i class="fas fa-angle-right"></i> Favorite products </a>
                <a href="setting.html"> <i class="fas fa-angle-right"></i> Setting </a>
            </div>
            <div id="guest">
                <img src="img/home/loginImg2.png" width="300px" alt="" align="center">

                <?php
                if (isset($_SESSION['MSNV'])) { ?>
                    <a href="admin.php" style="text-align:center; padding: 20px">QUAN TRI</a>
                <?php } ?>

                <?php
                if (isset($_SESSION['islogin'])) { ?>
                    <a href="myaccount.php" style="text-align:center; padding: 20px">MY ACCOUNT</a>
                <?php } ?>
             
                <?php
                if (isset($_SESSION['islogin'])) {
                ?>
                    <a href="logout.php?logout=true" style="text-align:center; padding: 20px">LOGOUT!</a>
                <?php
                } else {
                ?>
                    <a href="login.php" style="text-align:center; padding: 20px">LOGIN NOW!</a>
                <hr>
                <h6 style="text-align:center; padding: 20px">Don't have an account?<br>Sign up now with us!</h6>
                <a href="register.php" style="text-align:center;">SIGN IN</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    
   
</div>