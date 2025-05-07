<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý nhân sự - Trường Đại học Bạc Liêu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 8px;
            overflow: hidden;
        }
        .header, .footer {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .menu {
            width: 25%;
            float: left;
            background-color: #ecf0f1;
            min-height: 600px;
            border-right: 2px solid #bdc3c7;
            box-sizing: border-box;
            padding: 20px;
        }
        .content {
            width: 75%;
            float: left;
            box-sizing: border-box;
            padding: 20px;
            text-align: center;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
            cursor: pointer;
            font-weight: bold;
            color: #2c3e50;
            padding: 8px;
            background: #dfe6e9;
            border-radius: 5px;
        }
        ul li:hover {
            background: #b2bec3;
        }
        ul li ul {
            display: none;
            margin-top: 5px;
            margin-left: 15px;
        }
        ul li ul li {
            font-weight: normal;
            background: none;
            margin: 5px 0;
            padding: 0;
        }
        a {
            text-decoration: none;
            color: #2980b9;
        }
        a:hover {
            text-decoration: underline;
        }
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }
        .content img {
            display: block;
            margin: 20px auto;
            width: 500px;
            max-width: 100%;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            padding: 10px;
        }
        .content h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 18px;
            color: #555;
        }
        .footer {
            font-size: 14px;
            background-color: #3498db;
            color: #fff;
            padding-top: 10px;
            border-top: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>BAC LIEU UNIVERSITY</h1>
        <h2>QUẢN LÝ NHÂN SỰ</h2>
    </div>

    <div class="clearfix">
        <div class="menu">
            <ul>
            <li><a href="https://blu.edu.vn/" target="_blank">Trang chủ</a></li>
            <li onclick="toggleMenu(this)">Đơn vị trực thuộc
            <ul>
                <li><a href="khoa_ky_tech.php">Khoa Kỹ thuật - Công nghệ</a></li>
                <li><a href="khoa_su_pham.php">Khoa Sư phạm</a></li>
                <li><a href="khoa_nn_ts.php">Khoa Nông nghiệp & Thủy sản</a></li>
                <li><a href="khoa_kinh_te_luat.php">Khoa Kinh tế và Luật</a></li>
            </ul>
            </li>
                <li onclick="toggleMenu(this)">Hồ sơ nhân viên
                    <ul>
                        <li><a href="danhsach.php">Danh sách</a></li>
                        <li><a href="xem.php">Xem hồ sơ</a></li>
                        <li><a href="them.php">Thêm hồ sơ</a></li>
                        <li><a href="sua.php">Sửa hồ sơ</a></li>
                        <li><a href="xoa.php">Xoá hồ sơ</a></li>
                        <li><a href="timkiem.php">Tìm hồ sơ</a></li>
                    </ul>
                </li>
                <li onclick="toggleMenu(this)">Quản lý tiền lương
                    <ul>
                        <li><a href="bangluong.php">Bảng lương</a></li>
                        <li><a href="capnhathoso.php">Cập nhật hồ sơ</a></li>
                        <li><a href="timkiem.php">Tìm kiếm</a></li>
                        <li><a href="tinhluong.php">Tính lương</a></li>
                        <li><a href="tinhthuong.php">Tính thưởng</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="content">
            <h2>Chào mừng đến với hệ thống quản lý nhân sự</h2>
            <p>Quản lý nhân sự, hồ sơ và tiền lương nhanh chóng, hiệu quả tại Trường Đại học Bạc Liêu.</p>
            <img src="images.png" alt="Trường Đại học Bạc Liêu">
        </div>
    </div>

    <div class="footer">
        TRƯỜNG ĐẠI HỌC BẠC LIÊU <br>
        Địa chỉ: Số 178 Võ Thị Sáu, P.8, TP. Bạc Liêu <br>
        Điện thoại: 0291 3822653 - Email: mail@blu.edu.vn
    </div>
</div>

<script>
function toggleMenu(element){
    var submenu = element.querySelector('ul');
    if (submenu.style.display === "block") {
        submenu.style.display = "none";
    } else {
        submenu.style.display = "block";
    }
}
</script>

</body>
</html>
