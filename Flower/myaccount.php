<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Customer</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ac8be3ee8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="libs/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="libs/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/cart.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/myaccount.css?v=<?php echo time(); ?>">

    <script src="libs/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').addClass('loaded');
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
    <script src="js/script.js"></script>
    <style>

    </style>
</head>




<?php
session_start();
include_once("./connect.php");
$MSKH = isset($_SESSION['MSKH']) ? $_SESSION['MSKH'] : '';
if (!isset($_SESSION['islogin'])) {
    header('location: index.php');
}
/// Thay doi dia chi
if (isset($_POST['submit-address'])) {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $flag = 0;
    // Nhap truong nao thi thay doi truong do
    if (!empty($address)) {
        $sql = "UPDATE `khachhang` 
        SET `DiaChi`='$address' WHERE MSKH='$MSKH'";
        if (mysqli_query($conn, $sql)) {
            $flag = 1;
        }
    }
    if (!empty($phone)) {
        $sql = "UPDATE `khachhang` 
        SET `SoDienThoai`='$phone' WHERE MSKH='$MSKH'";
        if (mysqli_query($conn, $sql)) {
            $flag = 1;
        }
    }
    if ($flag == 1) {
        echo "<script> 
                alert('Thay ?????i th??nh c??ng');
                window.location.href='/flower/myaccount.php';
            </script>";
    }
}

// Thay doi thong tin
if (isset($_POST['submit-info'])) {
    $flag = 0;
    $name = $_POST['name'];
    if (!empty($name)) {
        $sql = "UPDATE `khachhang` 
    SET `HoTenKH`='$name' WHERE MSKH='$MSKH'";
        if (mysqli_query($conn, $sql)) {
            $flag = 1;
        }
    }

    $email = $_POST['email'];
    if (!empty($email)) {
        $sql_email = "SELECT Email FROM khachhang";
        $query_email = mysqli_query($conn, $sql_email);
        while ($rows = mysqli_fetch_array($query_email)) {
            echo $rows['Email'];
            if ($email === $rows['Email']) {
                echo "<script> 
            alert('Email ???? ???????c s??? d???ng!');
            window.location.href='/flower/myaccount.php';
        </script>";
            }
        }
        $sql = "UPDATE `khachhang` 
        SET `Email`='$email' WHERE MSKH='$MSKH'";
        if (mysqli_query($conn, $sql)) {
            $flag = 1;
        }
    }


    $user_password;
    $cr_password = $_POST['cr_password'];
    $new_password = $_POST['new_password'];
    $re_password = $_POST['re_password'];

    if (!empty($cr_password)) {
        // Lay mat khau hien tai tu db
        if ($row = mysqli_fetch_array(mysqli_query($conn, "SELECT Password FROM khachhang WHERE MSKH='$MSKH'"))) {
            $user_password = $row['Password'];
        }
        if (empty($new_password) or (empty($re_password))) {
            echo "<script> 
            alert('M???t kh???u m???i ho???c Nh???p l???i m???t kh???u kh??ng ???????c tr???ng!');
            window.location.href='/flower/myaccount.php';
        </script>";
        } else {
            if ($new_password != $re_password) {
                echo "<script> 
            alert('M???t kh???u kh??ng kh???p!');
            window.location.href='/flower/myaccount.php';
        </script>";
            }
        }
        if ($user_password != md5($cr_password)) {
            echo "<script> 
            alert('Sai m???t kh???u hi???n t???i!');
            window.location.href='/flower/myaccount.php';
        </script>";
        }
        $new_password_hash = md5($new_password);
        $sql = "UPDATE `khachhang` 
        SET `Password`='$new_password_hash' WHERE MSKH='$MSKH'";
        if (mysqli_query($conn, $sql)) {
            $flag = 1;
        }
    }
    if ($flag == 1) {
        echo "<script> 
            alert('Thay ?????i th??nh c??ng');
            window.location.href='/flower/myaccount.php';
        </script>";
    }
}

?>



<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <header>
        <?php include_once('./header.php'); ?>
    </header>

    <main style="background-image:url(https://roisin.qodeinteractive.com/wp-content/uploads/2020/02/roisin-landing-background-img-1.jpg)">

        <!-- Breadcrumb -->
        <div class="breadcrumb-area">
            <div class="breadcrumb__text">
                <h1 id="nut" style="color: green;">T??i kho???n c???a t??i</h1>
                <div class="breadcrumb__text-box">
                    <a href="home.php">Trang ch???</a> <span>/</span>
                    <a href="#" class="breadcrumb__text-link">T??i kho???n</a>
                </div>
            </div>
        </div>
        <div>
            <div class="order">
                <div class="container" style="display: flex;">
                    <div class="order__tab">
                        <a class="order__tab-link" id='order-tab-defalt-open' onclick="openTab(event,'orders')"><i class="fa fa-cart-arrow-down"></i>????n h??ng</a>
                        <a class="order__tab-link" onclick="openTab(event,'address')"><i class="fa fa-map-marker"></i>?????a ch??? thanh to??n</a>
                        <a class="order__tab-link" onclick="openTab(event,'detail-account')"><i class="fa fa-user"></i>C???p nh???t t??i kho???n</a>
                        <a href="index.php?user_logout=true" class="order__tab-link"><i class="fa fa-sign-out"></i>Tho??t</a>
                    </div>
                    <div class="order__wrapper">
                        <div class="order__content" id='orders'>
                            <h2>????n h??ng</h2>
                            <table class='table table-bordered'>
                                <thead>
                                    <tr>
                                        <th>
                                            ????n h??ng
                                        </th>
                                        <th style="max-width: 224px;width:224px;">
                                            Ng??y l???p
                                        </th>
                                        <th style="max-width: 224px;width:224px;">
                                            Nh??n vi??n
                                        </th>
                                        <th style="max-width: 185px;width: 185px;">
                                            Tr???ng th??i
                                        </th>
                                        <th style="max-width: 135px;width: 135px;">
                                            T???ng
                                        </th>
                                        <th>
                                            H??nh ?????ng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $MSKH = isset($_SESSION['MSKH']) ? $_SESSION['MSKH'] : '';
                                    $sql = "SELECT a.* , b.* 
                            FROM `chitietdathang` as a, `dathang` as b, `nhanvien` as c
                            WHERE a.SoDonDH = b.SoDonDH and b.MSKH ='$MSKH' and b.MSNV = c.MSNV
                            GROUP BY a.SoDonDH ORDER BY b.NgayDH DESC";
                                    $query = mysqli_query($conn, $sql);
                                    while ($rows = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td>
                                                #<?php echo $rows['SoDonDH'] ?>
                                            </td>
                                            <td style="max-width: 224px;">
                                                <p>
                                                    <?php
                                                    echo $rows['NgayDH'];
                                                    ?>
                                                </p>
                                            </td>
                                            <td style="max-width: 224px;">
                                                <p>
                                                    <?php
                                                    echo $rows['MSNV'];
                                                    ?>
                                                </p>
                                            </td>
                                            <td style="max-width: 185px;">
                                                <?php
                                                $status = $rows['TrangthaiDH'];
                                                switch ($status) {
                                                    case '0':
                                                        echo "<p class='order__pending'>??ang X??? L??</p>";
                                                        break;
                                                    case '1':
                                                        echo "<p class='order__delivered'>??ang giao h??ng</p>";
                                                        break;
                                                    case '2':
                                                        echo "<p class='order__cancel'>????n h??ng ???? b??? h???y</p>";
                                                        break;
                                                }
                                                ?>
                                            </td>
                                            <td style="max-width: 135px;">
                                                <p>
                                                    <?php echo number_format($rows['GiaDatHang'], 0, ',', '.') ?>??
                                                </p>
                                            </td>
                                            <td style="max-width: 142px;">
                                                <a href="cart.php?sodondh=<?php echo $rows['SoDonDH'] ?>">Xem</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="order__content order__address" id='address'>
                            <h2>?????a ch??? thanh to??n</h2>
                            <?php
                            $MSKH = $_SESSION['MSKH'];
                            $sql = "SELECT * FROM khachhang WHERE MSKH='$MSKH'";
                            $query = mysqli_query($conn, $sql);
                            if ($row = mysqli_fetch_array($query)) {
                            ?>
                                <p class="order__address-name"><?php echo $row['HoTenKH'] ?></p>
                                <p class="order__address-text"><?php echo $row['DiaChi'] ?></p>
                                <p class="order__address-phone" style="letter-spacing: 1px;">Mobile:(+84) <?php echo $row['SoDienThoai'] ?></p>
                            <?php
                            }
                            ?>
                            <button data-toggle="modal" data-target="#addressModel">
                                <i class="fa fa-edit"></i> Ch???nh s???a ?????a ch???
                            </button>
                        </div>
                        <div class="order__content " id='detail-account'>
                            <h2>C???p nh???t t??i kho???n</h2>
                            <form action="myaccount.php" class="order__account" method="POST">
                                <div class='order__account-group'>
                                    <label for="name">H??? v?? T??n</label>
                                    <input type="text" name='name' id='name'>
                                </div>
                                <div class='order__account-group'>
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email">
                                </div>
                                <div class='order__account-group'>
                                    <label for="sdt">S??? ??i???n tho???i</label>
                                    <input type="text" name="sdt" id="email">
                                </div>
                                <h3>Thay ?????i m???t kh???u</h3>
                                <div class='order__account-group'>
                                    <label for="cr_password">M???t kh???u hi???n t???i</label>
                                    <input type="password" name='cr_password' id='cr_password'>
                                </div>
                                <div class='order__account-group order__account-group--row'>
                                    <div class="">
                                        <label for="new_password">M???t kh???u m???i</label>
                                        <input type="password" name='new_password' id='new_password'>
                                    </div>
                                    <div class="">
                                        <label for="re_password">Nh???p l???i m???t kh???u</label>
                                        <input type="password" name='re_password' id='re_password'>
                                    </div>
                                </div>

                                <button type="submit" name="submit-info" class='order__account-btn'>L??u thay ?????i</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Order -->




    </main>

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
                    <p style="font-family: Crimson Text;">FlowerShop ??2022</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal linear" id="addressModel" tabindex="-1" role="dialog" aria-labelledby="addressModel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;font-weight: 600;">Ch???nh s???a ?????a ch???</h5>
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" class='modal__address-form'>
                        <div class="form__group">
                            <label for="address">?????a ch???</label>
                            <input type="text" id='address' name='address'>
                        </div>
                        <div class="form__group">
                            <label for="phone">S??? ??i???n tho???i</label>
                            <input type="text" id='phone' name='phone'>
                        </div>
                        <div class="" style="float:right;">
                            <a type="button" class="btn btn-secondary" data-dismiss="modal">????ng</a>
                            <button href="myaccount.php?" type="submit" class="btn btn-primary" name='submit-address'>L??u thay ?????i</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/home.js"></script>
<script src="js/myaccount.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/script/vendor/slick.min.js"></script>

</html>