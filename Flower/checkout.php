<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FlowerShop Checkout</title>
        <link rel="shortcut icon"  href="img/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9ac8be3ee8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="libs/bootstrap-5.1.3-dist/css/bootstrap.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="libs/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="css/cart.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/checkout.css?v=<?php echo time(); ?>">
        <script src="js/cart.js"></script>
        <script src="libs/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
              $('body').addClass('loaded');
            });
        
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map (function(tooltipTriggerEl) {
              return new bootstrap.Tooltip(tooltipTriggerEl)
            });
          </script>
          <script src="js/script.js"></script>
    </head>
   
    <?php
    session_start();
    include_once('./connect.php');
    

    // Lay du lieu cua nguoi dang nhap
    $MSKH = isset($_SESSION['MSKH']) ? $_SESSION['MSKH'] : '';
    if ($row = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM khachhang WHERE MSKH='$MSKH'"))) {
        $user_email = $row['Email'];
    }

    // Sinh ra 1 chuoi ngau nhien 
    function randomId($n)
    {
        $characters = '0123456789abcxyz';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }


    if(isset($_POST['btnCheckOut'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        // $phone = $_POST['phone'];
        // $zip = $_POST['zip'];
        // Kiem tra dang nhap 
        if (isset($_SESSION['islogin'])) {
            // cho thanh toan
            if (isset($_SESSION['carts'])) {
                $arrId = array();
                foreach ($_SESSION['carts'] as $id_sp => $quantity) {
                    $arrId[] = $id_sp;
                }
                
                $totalPrice = 0;
                
                $strId = implode("', '", $arrId);
                $sql = "SELECT * FROM hanghoa WHERE MSHH IN ('$strId')";
                $query = mysqli_query($conn, $sql);
                $SoDonDH = randomId(10);

                $query_user = mysqli_query($conn, "SELECT * FROM khachhang WHERE Email='$user_email'");
                // Luu vao databast cua khach hang
                if ($user = mysqli_fetch_array($query_user)) {
                    $sql_insert = "INSERT INTO `dathang`(`SoDonDH`,`MSKH`,`TrangThaiDH`) VALUES ('$SoDonDH','$MSKH', '0')";
                    mysqli_query($conn, $sql_insert);
                }
                
                
                while ($rows = mysqli_fetch_array($query)) {
                    $totalPrice = $rows['Gia'] * $_SESSION['carts'][$rows['MSHH']];
                    $MSHH = $rows['MSHH'];
                    $quantity = $_SESSION['carts'][$rows['MSHH']];
                    // Insert to chitietdathang
                    mysqli_query($conn, "INSERT INTO `chitietdathang`
                        (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`) 
                        VALUES ('$SoDonDH','$MSHH','$quantity','$totalPrice')");
                }
                // Clear session carts
                unset($_SESSION['carts']);
                echo "<script> 
                            alert('?????t h??ng th??nh c??ng');
                            window.location.href='/flower/cart.php';
                        </script>";
            }
        }else{
            // chua dang nhap
            echo "<script> 
                alert('Vui long d??ng nh???p ????? thanh to??n!');
                window.location.href='/flower/login.php';
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
          <div class="home-page"><!---->
            <?php include_once('./header.php');?>
                   <!-- Breadcrumb -->
                   <div class="breadcrumb-area">
                      <div class="breadcrumb__text">
                         <h1 id="nut" style="color: green;">Thanh To??n</h1>
                      <div class="breadcrumb__text-box">
                    <a href="index.php">Trang ch???</a> <span>/</span>
                    <a href="#" class="breadcrumb__text-link">Thanh to??n</a>
                      </div>
                    </div>
               </div>
                 
            
            <div class="main-content" >
                
                <div class="nav"></div>          
                <div class="container container--wl">
                    <div class="payment__wrapper">
                        <form  action="checkout.php" method="post" enctype="multipart/form-data">             
                            <div class="row">             
                                <div class="col">             
                                    <h3 class="title">?????A CH??? THANH TO??N</h3>               
                                    <div class="inputBox">
                                        <span>H??? v?? t??n :</span>
                                        <input required type="text" name="name" placeholder="Nguyen Thi Anh Thu">
                                    </div>
                                    <div class="inputBox">
                                        <span>Email :</span>
                                        <input required type="email" name="email" placeholder="example@example.com" id="ck-email">
                                    </div>
                                    <div class="inputBox">
                                        <span>?????a ch??? :</span>
                                        <input required type="text" name="address" placeholder="room - street - locality">
                                    </div>
                                    <div class="inputBox">
                                        <span>Th??nh ph??? :</span>
                                        <input required type="text" name="city" placeholder="Can Tho">
                                    </div>  
                                    <!-- <div class="inputBox">
                                            <span>zip code :</span>
                                            <input required type="text" name="zip" placeholder="123 456">
                                        </div>            
                                    <div class="flex">
                                        
                                    </div>                -->
                                </div>               
                                <!-- <div class="col">               
                                    <h3 class="title">Thanh to??n</h3>              
                                    <div class="inputBox">
                                        <span>cards accepted :</span>
                                        <img src="img/products/card_img.png" alt="">
                                    </div>
                                    
                                    <div class="inputBox">
                                        <span>credit card number :</span>
                                        <input  type="number" placeholder="1111-2222-3333-4444">
                                    </div>
                                    <div class="inputBox">
                                        <span>S??? ??i???n tho???i:</span>
                                        <input required type="number" name="phone" placeholder="">
                                    </div>          
                                                
                                </div>                    -->
                            </div>             
                            <input type="submit" name="btnCheckOut" value="Ti???n h??nh thanh to??n" class="submit-btn">
                    
                        </form>
                        <div class="checkout__order">
                            <h2>????N H??NG C???A B???N</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="checkout__order-name">
                                            S???n Ph???m
                                        </th>
                                        <th class="checkout__order-total">
                                            T???ng
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($_SESSION['carts'])) {
                                    $arrId = array();
                                    foreach ($_SESSION['carts'] as $id_sp => $quantity) {
                                        $arrId[] = $id_sp;
                                    }
                                    $strId = implode("', '", $arrId);
                                    $sql = "SELECT * FROM hanghoa WHERE MSHH IN ('$strId')";
                                    $query = mysqli_query($conn, $sql);
                                    $totalPrice = 0;
                                    $totalPriceAll = 0;
                                    $tienship = 5000;
                                    while ($rows = mysqli_fetch_array($query)) {
                                        $totalPrice = $rows['Gia'] * $_SESSION['carts'][$rows['MSHH']];
                                        $totalPriceAll += $totalPrice;
                                ?>
                                        <tr>
                                            <td class="checkout__order-name">
                                                <?php echo $rows['TenHH'] ?> <span>x <?php echo $_SESSION['carts'][$rows['MSHH']] ?> </span>
                                            </td>
                                            <td>
                                                <?php echo number_format($totalPrice, 0, ',', '.'); ?> ??
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td class="checkout__order-subtotal">
                                        GI??? H??NG
                                    </td>
                                        <td class="checkout__order-subtotal">
                                            <?php if (isset($_SESSION['carts'])) {
                                                echo number_format($totalPriceAll, 0, ',', '.');
                                            } else {
                                                echo '0';
                                            } ?> ??
                                        </td>
                                    </tr>
                                
                                    <tr>
                                    <td class="checkout__order-shipping">
                                        SHIPPING
                                    </td>
                                        <td class="checkout__order-shipping">
                                            <?php if (isset($_SESSION['carts'])) {
                                                echo number_format($tienship, 0, ',', '.');
                                            } else {
                                                echo '0';
                                            } ?> ??
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkout__order-tong">
                                            T???M T??NH
                                        </td>
                                        <td class="checkout__order-tong">
                                            <?php if (isset($_SESSION['carts'])) {
                                                echo number_format($totalPriceAll + $tienship , 0, ',', '.');
                                            } else {
                                                echo '0';
                                            } ?> ??
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                                
                        </div>
                    </div>
                
                </div>               
            </div>
            <div class="footer" style="background-image: url(./img/footer.jpg)">
        <div class="footer-container">
            <p style="font-family: Crimson Text; font-size: 25px;" >T???i ???ng d???ng FlowerShop</p>
            <div class="app-google">
                <a href=""><img src="img/appstore.jpg" alt=""></a>
                <a href=""> <img src="img/googleplay.jpg" alt=""></a>
            </div>
            <p style="font-family: Crimson Text; font-size: 25px;">Nh???n b???n tin  FlowerShop</p>
            <div class="input-email">
                <input type="text" placeholder="Nh???p email c???a b???n">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="footer-items">
                
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
            <script src="js/home.js"></script>
    </body>
                                        
</html>