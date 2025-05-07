<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Hồ sơ Nhân viên - Trường Đại học Bạc Liêu</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 30px;
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
        }
        .header h2 {
            font-size: 24px;
            margin: 10px 0;
        }
        .content {
            padding: 40px;
            text-align: left;
            color: #333;
        }
        .content h2 {
            font-size: 28px;
            color: #2980b9;
            margin-bottom: 20px;
        }
        .footer {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>BAC LIEU UNIVERSITY</h1>
        <h2>Chi tiết Hồ sơ Nhân viên</h2>
    </div>

    <div class="content">
        <?php
        // Truy vấn thông tin tất cả nhân viên
        $query = "SELECT * FROM nhanvien";  // Chú ý thay 'nhanvien' bằng tên bảng của bạn
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Hiển thị thông tin của tất cả nhân viên
            echo "<h2>Thông tin nhân viên</h2>";

            // Duyệt qua tất cả các nhân viên và hiển thị thông tin
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><strong>Mã nhân viên:</strong> " . $row['id'] . "</p>";
                echo "<p><strong>Họ và tên:</strong> " . $row['ho_ten'] . "</p>";
                echo "<p><strong>Chức vụ:</strong> " . $row['chuc_vu'] . "</p>";
                echo "<p><strong>Ngày sinh:</strong> " . $row['ngay_sinh'] . "</p>";
                echo "<p><strong>Ngày vào làm:</strong> " . $row['ngay_vaolam'] . "</p>";
                echo "<p><strong>Địa chỉ:</strong> " . $row['dia_chi'] . "</p>";
                echo "<p><strong>Số điện thoại:</strong> " . $row['so_dt'] . "</p>";
                echo "<p><strong>Email:</strong> " . $row['email'] . "</p><hr>";
            }
        } else {
            echo "Không có dữ liệu nhân viên.";
        }
        ?>
    </div>

    <div class="footer">
        <p>TRƯỜNG ĐẠI HỌC BẠC LIÊU</p>
        <p>Địa chỉ: Số 178 Võ Thị Sáu, P.8, TP. Bạc Liêu</p>
        <p>Điện thoại: 0291 3822653 - Email: mail@blu.edu.vn</p>
    </div>
</div>

</body>
</html>
