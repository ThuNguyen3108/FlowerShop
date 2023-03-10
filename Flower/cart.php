<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowerShop Cart</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ac8be3ee8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="libs/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="libs/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/cart.css?v=<?php echo time(); ?>">

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
</head>


<style>
    table {
        border: 1px double #dddddd;
        font-family: arial, sans-serif;
        /* border-collapse: collapse; */
        width: 1024px;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
    }

    td,
    th {
        border: 1px double #dddddd;
        text-align: center;
        padding: 8px;
    }

    td img {
        width: 100px;
    }


    .giohang {
        padding: 50px 0;
    }

    .giohang-top-wrap {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .giohang-top {
        height: 2px;
        width: 70%;
        background-color: #dddddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 50px 0 100px;
    }

    .giohang-top-item {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid #dddddd;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
    }

    .giohang-top-item i {
        color: #dddddd;
    }



    .giohang-top-cart {
        border: 1px solid #0DB7EA;
    }

    .giohang-top-cart i {
        color: #0DB7EA;
    }

    button {
        border: 2px solid black;
        box-sizing: border-box;
        color: black;
        cursor: pointer;
        font-size: 12px;
        height: 35px;
        margin: 0px;
        outline: none;
        padding: 0px 20px;
        transition: all 0.3s ease 0s;
    }

    p {
        box-sizing: border-box;
        cursor: pointer;
        font-family: Arial;
        font-size: 12px;
        margin: 0px;
        outline: none;
        padding: 0px;
        text-align: center;
    }

    .cart__empty {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .cart__empty img {
        width: 400px;
        object-fit: cover;
    }

    /* body{
        background-image:url(https://roisin.qodeinteractive.com/wp-content/uploads/2020/02/grid-home-page-background.jpg)
      } */
    main {
        background-position: 70% 70%;
    }
</style>
<?php
session_start();
include_once("./connect.php");
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
                <h1 id="nut" style="color: green;">Gi??? h??ng c???a t??i</h1>
                <div class="breadcrumb__text-box">
                    <a href="home.php">Trang ch???</a> <span>/</span>
                    <a href="#" class="breadcrumb__text-link">Gi??? h??ng</a>
                </div>
            </div>
        </div>


        <?php
        if (!isset($_SESSION['carts'])) {

        ?>
            <div class="cart__empty">
                <h2>Gi??? h??ng tr???ng</h2>
                <a style="color: green; font-size: 22px; text-decoration: none;" href="index.php">Quay l???i c???a h??ng</a>
                <img src="./img/products/emty_cart.png" alt="">
            </div>
        <?php
        } else {

        ?>

            <div>
                <table align="center">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>H??nh S???n Ph???m</th>
                            <th>T??n S???n Ph???m</th>
                            <th>S??? l?????ng</th>
                            <th>Gi??</th>
                            <th>Th??nh Ti???n</th>
                            <th>X??a</th>
                        </tr>
                    </thead>
                    <tbody class="body-bang">
                        <?php
                        $totalPrice = 0;
                        $totalPriceAll = 0;
                        $VAT = 1; //5%
                        $shipping = 5000;

                        if (isset($_SESSION["carts"])) {
                            $arrId = array();
                            foreach ($_SESSION['carts'] as $MSHH => $quantity) {
                                $arrId[] = $MSHH;
                            }

                            $strId = implode("', '", $arrId);
    

                            $sql = "SELECT * FROM hanghoa WHERE MSHH IN ('$strId')";
                            $query = mysqli_query($conn, $sql);
                            $STT = 0;
                            while ($rows = mysqli_fetch_array($query)) {
                                $MSHH = $rows['MSHH'];
                                $thanhGia = 0;
                                $thanhGia = $rows['Gia'] * $_SESSION['carts']["$MSHH"];

                        ?>
                                <tr>
                                    <td><?php echo ++$STT; ?></td>
                                    <td>
                                        <div>
                                            <?php
                                            $sql_anh = "select * from hinhhh where MSHH='$MSHH'";
                                            $query_anh = mysqli_query($conn, $sql_anh);
                                            while ($rows_anh = mysqli_fetch_array($query_anh)) {
                                            ?>
                                                <img src="./img/products/<?php echo $rows_anh['Anh'] ?>" alt="anh" >
                                        
                                            <?php
                                            }
                                            ?>
                                        </div>


                                        <!--  -->
                                    </td>
                                    <td>
                                        <?php echo $rows['TenHH']; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['carts']["$MSHH"] ?>
                                    </td>
                                    <td>
                                        <?php echo $gia = number_format($rows['Gia'], 0, ',', '.'); ?> vnd
                                    </td>
                                    <td>
                                        <?php echo number_format($thanhGia, 0, ',', '.'); ?> vnd

                                    </td>
                                    <td>
                                        <a class="search10" href="deletecart.php?MSHH=<?php echo $rows['MSHH']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>

                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>

                </table>
                
            </div>
        <?php
        }

        ?>
        </div>
        <?php
        if (isset($_SESSION['carts'])) {
        ?>
            <div class="cart_total">
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
                        <br><br>
                    <a href="checkout.php" class="my-btn-primary my-btn-primary--2 cart__total-btn">
                        ??i ?????n thanh to??n
                    </a>  
                      <br><br>             
                       
            </div>
                 
               
            </div>
        <?php
        }
        ?>
        </div>
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


</body>
<script src="js/home.js"></script>

</html>