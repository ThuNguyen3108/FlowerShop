<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>ADMIN PRODUCT</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/9ac8be3ee8.js" crossorigin="anonymous"></script>
    <script src="libs/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>

   
</head>
<?php
session_start();
include_once("./connect.php");

$isAdmin = isset($_SESSION['isAdmin']) ? $_SESSION['isAdmin'] : false;
$isStaff = isset($_SESSION['isStaff']) ? $_SESSION['isStaff'] : false;
if ($isAdmin || $isStaff) {
} else {
    echo "<script> 
        window.location.href='/flower/login.php';
        </script>";
}

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
// Them 1 san pham
if (isset($_POST['addproduct'])) {
    $mshh = $_POST['mshh'];
    $tenhh = $_POST['tenhh'];
    $loaisp = $_POST['loaisp'];
    $gia = $_POST['gia'];
    $sl = $_POST['soluong'];
    $motasp = $_POST['chitietsp'];
    $ghichu = $_POST['ghichu'];

    // Xu ly anh
    $target_dir = "img/products";
    $target_file = "";
    $file_name =  "";


    // kiem tra sp da ton tai hay chua, neu chua thi them vao database
    $sql_sp = "SELECT * FROM `hanghoa` where MSHH='$mshh'";
    $query_sp = mysqli_query($conn, $sql_sp);
    $row = mysqli_num_rows($query_sp);
    if ($row > 0) {
        echo "<script>
                alert('San pham da ton tai');
                window.location.href='/flower/product.php';
            </script>";
    }

    $countfiles = count($_FILES['anh']['name']);

    $upload_ok = true;
    // Duyet qua tung anh
    for ($i = 0; $i < $countfiles; $i++) {
        if (isset($_FILES['anh']['name'][$i])) {
            $TenHinh = $_FILES['anh']['name'][$i];
            switch ($loaisp) {
                case "1": {
                        $target_file = $target_dir . "/HoaCamChuong/" .  basename($_FILES["anh"]["name"][$i]);
                        $file_name =  "HoaCamChuong/" . basename($_FILES["anh"]["name"][$i]);
                        break;
                    }
                case "3": {
                        $target_file = $target_dir . "/HoaHuongDuong/" .  basename($_FILES["anh"]["name"][$i]);
                        $file_name =  "HoaHuongDuong/" . basename($_FILES["anh"]["name"][$i]);
                        break;
                    }
                case "5": {
                        $target_file = $target_dir . "/HoaThuyTien/" .  basename($_FILES["anh"]["name"][$i]);
                        $file_name =  "HoaThuyTien/" . basename($_FILES["anh"]["name"][$i]);
                        break;
                    }
                case "6": {
                        $target_file = $target_dir . "/XuongRong/" .  basename($_FILES["anh"]["name"][$i]);
                        $file_name =  "XuongRong/" . basename($_FILES["anh"]["name"][$i]);
                        break;
                    }
                case "4": {
                        $target_file = $target_dir . "/HoaHong/" .  basename($_FILES["anh"]["name"][$i]);
                        $file_name =  "HoaHong/" . basename($_FILES["anh"]["name"][$i]);
                        break;
                    }
                case "2": {
                        $target_file = $target_dir . "/HoaDongTien/" .  basename($_FILES["anh"]["name"][$i]);
                        $file_name =  "HoaDongTien/" . basename($_FILES["anh"]["name"][$i]);
                        break;
                    }
            }

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $is_exist = false;

            // kiem tra anh co chon hay chua
            if ($_FILES['anh']['name'][$i] == '') {
                echo "<script>
                            alert('Ảnh không được để trống!');
                            
                        </script>";
                $upload_ok = false;
            }

            // Kiem tra file co ton tai hay chua neu ton tai thi ko luu anh
            if (file_exists($target_file)) {
                $is_exist = true;
            }

            // Kiem do size
            if ($_FILES['anh']['size'][$i] > 1024 * 1024) { // 1Mb
                echo "<script>
                            alert('Size ảnh không được quá 1MB');
                        </script>";
                $upload_ok = false;
            }

            //Kiem tra type
            if ($imageFileType != 'jpg' and $imageFileType != "png" and $imageFileType != "jpeg") {
                echo "<script>
                            alert('Định dạnh file không hợp lệ');
                            
                        </script>";
                $upload_ok = false;
            }


            if ($is_exist == false) {
                if ($upload_ok) {
                    if (move_uploaded_file($_FILES["anh"]["tmp_name"][$i], $target_file)) {

                        $MaHinh = randomId(11);
                        echo $MaHinh . ' ';
                        $sql = "INSERT INTO `hinhhh`(`MaHinh`, `Anh`, `TenHinh`, `MSHH`) VALUES ('$MaHinh','$file_name','$TenHinh','$mshh')";
                        mysqli_query($conn, $sql);
                    }
                }
            } else {
                if ($upload_ok) {
                    $MaHinh = randomId(11);
                    echo $MaHinh . ' ';
                    $sql = "INSERT INTO `hinhhh`(`MaHinh`, `Anh`, `TenHinh`, `MSHH`) VALUES ('$MaHinh','$file_name','$TenHinh','$mshh')";
                    mysqli_query($conn, $sql);
                }
            }
        }
    }

    // Bat dau them san pham
    if ($upload_ok) {
        $sql = "INSERT INTO `hanghoa`
                        (`MSHH`, `TenHH`, `MotaHH`, `Gia`,`SoLuongHang`, `MaLoaiHH`, `GhiChu`) 
                        VALUES 
                        ('$mshh','$tenhh','$motasp','$gia','$sl','$loaisp','$ghichu')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                                    alert('Thêm sản phẩm thành công');
                                    window.location.href='/flower/product.php';
                                </script>";
        }
    }
}

// Xoa san pham
$remove = isset($_GET['remove']) ? $_GET['remove'] : false;
if ($remove == true) {
    $mshh = isset($_GET['mshh']) ? $_GET['mshh'] : "false";

    $sql_hh = "select * from hinhhh where MSHH='$mshh'";
    $query_hh = mysqli_query($conn, $sql_hh);
    while ($rows = mysqli_fetch_array($query_hh)) {
        $mahinh = $rows['MaHinh'];
        mysqli_query($conn, "DELETE FROM `hinhhh` WHERE MaHinh='$mahinh'");
    };

    if (mysqli_query($conn, "DELETE FROM `hanghoa` WHERE MSHH='$mshh'")) {
        echo "<script>
                            alert('Xóa sản phẩm thành công');
                            window.location.href = 'product.php';
                        </script>";
    }
}

?>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="img/logo.png" alt="logo" height="60px">
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php"><span class="fas fa-igloo"></span>
                        <span>BẢNG ĐIỀU KHIỂN</span></a>
                </li>
                <li>
                    <a href="product.php" class="active"><span class="fas fa-shopping-bag"></span>
                        <span>HÀNG HÓA</span></a>
                </li>
                <li>
                    <a href="customer.php"><span class="fas fa-users"></span>
                        <span>KHÁCH HÀNG</span></a>
                </li>
                <li>
                    <a href="order.php"><span class="fas fa-shopping-bag"></span>
                        <span>ĐƠN HÀNG</span></a>
                </li>
                <li>
                    <a href="nhanvien.php"><span class="fas fa-shopping-bag"></span>
                        <span>NHÂN VIÊN</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2 style="margin-top: 10px">
                <label for="nav-toggle">
                    <span class="fas fa-bars"> </span>
                </label>
                <span id="dashboard">BẢNG ĐIỀU KHIỂN</span>
            </h2>

            <div class="search-wrapper">
                <span class="fas fa-search"></span>
                <input type="search" placeholder="Search here">
            </div>

            <div class="user-wrapper" style="cursor: pointer;">
                <img src="img/admin/AnhThu.PNG" width="30px" height="30px" alt="">
                <div>
                    <h4>Nguyễn Thị Anh Thư</h4>
                    <small>Admin</small>
                </div>
            </div>
            <div id="infoAdmin">
                <a href="#"><i class="fas fa-cog"></i>&nbsp; Setting</a>
                <a href="index.php" onclick="localStorage.clear()"><i class="fas fa-sign-out-alt"></i>&nbsp; Log out</a>
            </div>
            <script>
                let account = document.querySelector("#infoAdmin");
                document.querySelector(".user-wrapper").onclick = () => {
                    account.classList.toggle("active");
                };
            </script>
        </header>

        <main style="font-size: 12px">
            <div class="projects">
                <div class="card">
                    <div class="card-add">
                        <div class="card-header">
                            <h3>Thêm sản phẩm</h3>
                        </div>
                        <div class="table-responsive">
                            <form enctype="multipart/form-data" id="themsanpham" method="POST" action="product.php">
                                <table id="addproduct" width="100%">
                                    <thead>
                                        <td>Hình ảnh</td>
                                        <td>Mã sản phẩm</td>
                                        <td>Tên sản phẩm</td>
                                        <td>Loại sản phẩm</td>
                                        <td>Giá</td>
                                        <td>Số lượng</td>
                                        <td>Mô tả sản phẩm</td>
                                        <td>Ghi chú</td>
                                        <td></td>
                                    </thead>
                                    <tbody>
                                        <td><input type="file" id='anh' name='anh[]' required multiple></td>
                                        <td><input id="masp" required maxlength="10" type="text" name="mshh" placeholder="6 ký tự"></td>
                                        <td><input required name="tenhh" id="tensp" type="text" placeholder="không rỗng"></td>
                                        <td>
                                            <select name="loaisp" required id="loaisp" size="1">
                                                <option value="">--Chọn--</option>
                                                <?php
                                                $sql = "select * from loaihanghoa";
                                                $query = mysqli_query($conn, $sql);
                                                while ($rows = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?php echo $rows['MaLoaiHH'] ?>"><?php echo $rows['TenLoaiHH'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                        <td><input id="dg" required pattern="\d" type="number" name="gia" placeholder="là số, đơn vị VNĐ"></td>
                                        <td><input id="sl" required pattern="\d" type="number" name="soluong" placeholder="là số dương" min="0"></td>
                                        <td><textarea name="chitietsp" id="chitietsp" cols="30" rows="10"></textarea></td>
                                        <td><textarea name="ghichu" id="ghichu" cols="20" rows="10"></textarea></td>
                                        <td><button class="my-btn-primary my-btn-primary--2 cart__total-btn" name='addproduct' id="btnAdd" type="submit">Thêm sản phẩm</button></td>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="card-header">
                        <h3><span class="fas fa-list"></span> <span>Danh sách sản phẩm</span> </h3>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead align="center">
                                    <tr>
                                        <td>STT</td>
                                        <td id="imgproduct">Hình ảnh</td>
                                        <td>Mã sản phẩm</td>
                                        <td>Tên sản phẩm</td>
                                        <td>Loại sản phẩm</td>
                                        <td>Giá</td>
                                        <td>Số lượng</td>
                                        <td>Mô tả sản phẩm</td>
                                        <td>Ghi chú</td>
                                        <td>Chỉnh sửa</td>

                                    </tr>

                                </thead>
                                <tbody class="list" id="list" align="center">
                                    <?php
                                    $sql = "SELECT * FROM hanghoa";
                                    $query = mysqli_query($conn, $sql);
                                    $STT = 0;
                                    while ($rows = mysqli_fetch_array($query)) {
                                        $MSHH = $rows['MSHH'];
                                        $MaLoaiHH = $rows['MaLoaiHH'];
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
                                                        <img class="product__img" src="./img/products/<?php echo $rows_anh['Anh'] ?>" alt="anh">
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                            <td><?php echo $rows['MSHH'] ?></td>
                                            <td><?php echo $rows['TenHH'] ?></td>
                                            <td>
                                                <?php
                                                $sql_loai = "select * from loaihanghoa where MaLoaiHH='$MaLoaiHH'";
                                                $query_loai = mysqli_query($conn, $sql_loai);
                                                while ($rows_loai = mysqli_fetch_array($query_loai)) {
                                                    echo $rows_loai['TenLoaiHH'];
                                                }
                                                ?>

                                            </td>
                                            <td><?php echo $rows['Gia'] ?></td>
                                            <td><?php echo $rows['SoLuongHang'] ?></td>
                                            <td class="product__detail">
                                                <p>
                                                    <?php echo $rows['MoTaHH'] ?>
                                                </p>
                                            </td>
                                            <td><?php echo $rows['GhiChu'] ?></td>
                                            <td>
                                                <a href="editproduct.php?mshh=<?php echo $rows['MSHH']; ?>" class="my-btn-primary my-btn-primary--2 cart__total-btn">
                                                    Chỉnh sửa
                                                </a>
                                                <br>
                                                <a href="product.php?mshh=<?php echo $rows['MSHH']; ?>&remove=true" class="my-btn-primary my-btn-primary--2 cart__total-btn">
                                                    Xóa
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
    </div>
    </main>
    </div>
   
</body>

</html>