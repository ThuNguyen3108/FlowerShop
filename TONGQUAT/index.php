<?php
session_start();
include_once('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>FlowerShop</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ac8be3ee8.js" crossorigin="anonymous"></script>


    <script src="libs/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/cart.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="libs/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="libs/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

    <script src="libs/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .single-shipping {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flexbox;
            display: flex;
            margin-top: 30px;
        }

        .single-shipping .shipping-icon img {
            width: 100px;
        }

        .single-shipping .shipping-content {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -moz-flex: 1;
            -ms-flex: 1;
            flex: 1;
            padding-left: 15px;

        }

        .single-shipping .shipping-content .title {
            font-size: 20px;
            line-height: 18px;
            text-transform: capitalize;
            font-weight: 700;
            margin-bottom: 7px;
            color: #222222;
        }

        .single-shipping .shipping-content p {
            font-size: 18px;
            line-height: 18px;
            font-weight: 300;
            margin-bottom: 10px;
        }
    </style>

    <link href="css/carousel.css" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="libs/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>


</head>

<body>


    <header>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/home/bia_1.jpg" class="bd-placeholder-img" width="100%" aria-hidden="true" focusable="false">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h3><span id="CONTENTS_HEAD" class="multilang"></span> <b class="display-8">FlowerShop</b> !</h3>
                            <h1 class="lead4"><span id="CONTENTS_SLOGAN" class="multilang"></span></h1>
                            <p><span id="CONTENTS_DETAIL_TEXTSTART" class="multilang"></span></p>
                            <p><a class="btn header" href="register.php" style="background-color: green; border-color: yellowgreen">????ng k?? ngay</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/home/bia_2.jpg" class="bd-placeholder-img" width="100%" aria-hidden="true" focusable="false">

                    <div class="container">
                        <div class="carousel-caption">
                            <h3><span id="CONTENTS_HEAD2" class="multilang"></span> <b class="display-8">FlowerShop</b> !</h3>
                            <h1><span id="CONTENTS_SLOGAN2" class="multilang"></span></h1>
                            <p><span id="CONTENTS_DETAIL_CAPTION" class="multilang"></span></p>
                            <p><a class="btn header" href="register.php" style="background-color: green; border-color: yellowgreen">????ng k?? ngay</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/home/bia_3.jpg" class="bd-placeholder-img" width="100%" aria-hidden="true" focusable="false">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h3><span id="CONTENTS_HEAD3" class="multilang"></span> <b class="display-8">FlowerShop</b> !</h3>
                            <h1><span id="CONTENTS_SLOGAN3" class="multilang"></span></h1>
                            <p><span id="CONTENTS_DETAIL_TEXTEND" class="multilang"></span></p>
                            <p><a class="btn header" href="register.php" style="background-color: green; border-color: yellowgreen">????ng k?? ngay</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php
        include_once('./header.php');

        ?>
    </header>





    <main>
        <?php
        $sql_danhmuc = mysqli_query($conn, 'SELECT * FROM loaihanghoa ORDER BY MaLoaiHang DESC')
        ?>
        <!--Shipping Start-->
        <hr class="featurette-divider">
        <div class="shipping-area section-padding-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="./img/home/Free-Delivery.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Free v???n chuy???n</h5>
                                <br>
                                <p>Giao h??ng mi???n ph?? tr??n to??n qu???c cho t???t c??? c??c ????n ?????t h??ng tr??n 200k </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="./img/home/Online-Order.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">?????t h??ng Online</h5>
                                <br>
                                <p>?????ng lo l???ng, b???n c?? th??? ?????t h??ng Tr???c tuy???n tr??n Trang web c???a ch??ng t??i </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="./img/home/Freshness.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">S??? t????i m???i</h5>
                                <br>
                                <p>B???n c?? hoa ?????p m???i khi ?????t h??ng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="./img/home/Made-By-Artists.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">T??m huy???t</h5>
                                <br>
                                <p>M???i m???t b?? hoa ch??ng t??i ?????u d??nh h???t t??m t??, t??nh c???m v??o ????</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="container marketing" id="ourproducts">
            <!---->
            <div class="services-info col-md-12">
                <h2 class="section-title2"><span id="CONTENTS_PWD_TITLE" class="multilang">LO???I HOA B??N</span></h2>

            </div>
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <?php 
                $sql = "SELECT * FROM `loaihanghoa`";
                $query = mysqli_query($conn, $sql);
                while ($rows = mysqli_fetch_array($query)) {
                ?>
                <div class="col-lg-4">
                    <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                    <div class="i1">
                        <img src="<?= $rows['Anh'] ?>" height="200" width="200" alt="???nh hoa h?????ng d????ng"><br><br><br>
                    </div>
                    <h2><b class="text-muted1"><span id="CONTENTS_PWD_SEEDS" class="multilang"></span><?= $rows['TenLoaiHH'] ?></b></h2>
                    <p class="text-muted"><span id="CONTENTS_PWD_SEEDS_DETAILS" class="multilang"></span></p>
                    <p><a class="btn btn-secondary" href="ProductsPage.php?loai_hoa=<?= $rows['duongdan']?>"><span id="CONTENTS_SEEDS_BTN" class="multilang">?????c th??m</span></a></p>
                </div>
                <!-- /.col-lg-4 -->
                <?php }?>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <!--Shipping End-->
            <hr class="featurette-divider">
            <div class="services-info col-md-12">
                <h2 class="section-title2"><span id="CONTENTS_PWD_TITLE" class="multilang">S???N PH???M M???I</span></h2>
            </div>
            <div class="content">
          
                <?php
                $sqlP = "SELECT * FROM `loaihanghoa`";
                $queryP = mysqli_query($conn, $sqlP);
                while ($rowsP = mysqli_fetch_array($queryP)) {
                    $sql = "SELECT * FROM `hanghoa` WHERE `MaLoaiHH` = '". $rowsP["MaLoaiHH"] . "' LIMIT 4";
                    $query = mysqli_query($conn, $sql);
                    while ($rows = mysqli_fetch_array($query)) {
                    ?>
                        <div class="divp">
                            <a class="product" href="ProductsPageDetail.php?detail=<?php echo $rows['MSHH'] ?>">
                                <div class="product-item">
                        <?php //echo $rowsP["MaLoaiHH"] ?>
                                    <div class="thumbnail">
                                        <div id="carousel-<?php echo $rows['MSHH'] ?>" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php
                                                $qr = "SELECT * FROM `hinhhh` WHERE `MSHH` = '" . $rows['MSHH'] . "'";
                                                $stmt = mysqli_query($conn, $qr);
                                                $i = 0;
                                                while ($row1s = mysqli_fetch_array($stmt)) {

                                                ?>
                                                    <div class="carousel-item <?= $i++ == 0 ? "active" : "" ?>">
                                                        <img class="thumbimg" src="./img/products/<?php echo $row1s['Anh'] ?>" class="d-block w-100" alt="<?php echo $row1s['TenHinh'] ?>">
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php echo $rows['MSHH'] ?>" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php echo $rows['MSHH'] ?>" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>



                                    </div>
                                    <div class="info-product">
                                        <SPAN><?php echo $rows['TenHH'] ?></SPAN>
                                        <h3>
                                            <?php
                                            $gia = number_format($rows['Gia'], 0, ',', '.');
                                            echo $gia;
                                            ?>
                                            VND
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    };
                    ?>
                <?php
                };
                ?>
            </div>

        </div>





        <!-- <div>
            <img src="https://wpbingosite.com/wordpress/florial/wp-content/uploads/2021/09/bg-7.jpg" width=100% height="800px">

        </div> -->
        <hr class="featurette-divider">
        <div class="services-info col-md-12">
            <h2 class="section-title2"><span id="CONTENTS_PWD_TITLE" class="multilang">C???M NGH?? KH??CH H??NG</span></h2>
        </div>
        <!-- review   -->
        <div id="CusReview" class="row row-cols-1 row-cols-md-3 mb-3 text-center" style="background-image: url('img/home/main-bg.png')" ;>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <img src="./img/home/quote.png" class="i3" height="100px" width="100px" alt="">
                    <div class="card-body">
                        <h1 class="lead"><span id="CONTENTS_OCS_DAVID" class="multilang">M??? t??i ???? r???t ng???c nhi??n khi t??i t???ng b?? hoa v??o ng??y 8/3 cho m???. M??? t??i r???t th??ch ch??ng. C???m ??n FlowerShop!</span></h1> <br>
                        <img src="https://wpbingosite.com/wordpress/florial/wp-content/uploads/2020/06/tesm-2.jpg" class="user" height="60px" width="60px" alt="">
                        <h3 class="text-muted"> <b>Ann Smith</b> </h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <img src="./img/home/quote.png" class="i3" height="100px" width="100px" alt="">
                    <div class="card-body">
                        <h1 class="lead"><span id="CONTENTS_OCS_Lalisa" class="multilang">Tuy???t v???i, giao h??ng nhanh, ???? mua nhi???u l???n n??n m???i ng?????i c??? y??n t??m, l???n sau s??? ???ng h???.
                            </span></h1> <br>
                        <img src="https://wpbingosite.com/wordpress/florial/wp-content/uploads/2020/06/tesm-1.jpg" class="user" height="60px" width="60px" alt="">
                        <h3 class="text-muted"> <b>Lalisa</b> </h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm ">
                    <img src="./img/home/quote.png" class="i3" height="100px" width="100px" alt="">
                    <div class="card-body">
                        <h1 class="lead"><span id="CONTENTS_OCS_Justin" class="multilang">Shop b??n nhi???u lo???i, tuy ??? xa nh??ng giao h??ng r???t nhanh, b?? hoa v???a t????i v???a ?????p. T??i r???t th??ch.</span></h1> <br>
                        <img src="https://wpbingosite.com/wordpress/florial/wp-content/uploads/2020/06/tesm-3.jpg" class="user" height="60px" width="60px" alt="">
                        <h3 class="text-muted"> <b>Sara</b> </h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">




    </main>


    <script src="libs/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('body').addClass('loaded');
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        $(".page-header .nav-link, .navbar-brand, .footer-link").on("click", function(e) {
            e.preventDefault();

            //link nav to area content
            const href = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(href).offset().top - 71
            }, 600);
        });
    </script>
    <script src="js/home.js"></script>
</body>


<div class="footer" style="background-image: url(./img/footer.jpg)">
    <div class="footer-container">
        <p style="font-family: Crimson Text; font-size: 25px;">T???i ???ng d???ng FlowerShop</p>
        <div class="app-google">
            <a href=""><img src="img/appstore.jpg" alt=""></a>
            <a href=""> <img src="img/googleplay.jpg" alt=""></a>
        </div>
        <p style="font-family: Crimson Text; font-size: 25px;">Nh???n b???n tin FlowerShop</p>
        <div class="input-email">
            <input type="text" placeholder="Nh???p email c???a b???n">
            <i class="fas fa-arrow-left"></i>
        </div>
        <div class="footer-items">
            <!-- <li>
                    <a href=""><img src="image/dathongbao.png" alt=""></a>
                </li> -->
            <li style="font-family: Crimson Text; font-size: 20px;"><a href="">Li??n h???</a></li>
            <li style="font-family: Crimson Text; font-size: 20px;"><a href="">Tuy???n d???ng</a></li>
            <li style="font-family: Crimson Text; font-size: 20px;"><a href="">Gi???i thi???u</a></li>


        </div>
        <div class="row-share">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="footer-text">
                <p style="font-family: Crimson Text;">FlowerShop - DH Can Tho - Khoa CNTT&TT</p>
            </div>
            <div class="footer-bottom">
                <p style="font-family: Crimson Text;"> FlowerShop ??2022</p>
            </div>
        </div>

        

</html>