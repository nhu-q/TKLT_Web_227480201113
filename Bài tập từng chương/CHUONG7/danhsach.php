<?php 
include 'db.php';

// Truy vấn để lấy danh sách nhân viên
$query = "SELECT * FROM nhanvien"; 
$result = mysqli_query($conn, $query);

// Kiểm tra xem có dữ liệu trả về không
if (!$result) {
    die("Lỗi truy vấn: " . mysqli_error($conn)); // Nếu có lỗi trong truy vấn
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Hồ sơ Nhân viên</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
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
        <h2>Danh sách Hồ sơ Nhân viên</h2>
    </div>

    <div class="content">
        <h2>Danh sách các nhân viên</h2>
        <p>Danh sách nhân viên tại Trường Đại học Bạc Liêu.</p>
        
        <table>
            <thead>
                <tr>
                    <th>ID nhân viên</th>
                    <th>Họ và tên</th>
                    <th>Chức vụ</th>
                    <th>Ngày vào làm</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kiểm tra nếu có dữ liệu
                if (mysqli_num_rows($result) > 0) {
                    // Hiển thị từng dòng dữ liệu nhân viên
                    while($row = mysqli_fetch_assoc($result)) {
                        if (isset($row['id'])) { // Kiểm tra nếu cột 'id' tồn tại trong mảng
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['ho_ten']}</td>
                                    <td>{$row['chuc_vu']}</td>
                                    <td>{$row['ngay_vaolam']}</td>
                                    <td><a href='sua.php?id={$row['id']}'>Sửa</a></td>
                                  </tr>";
                        } else {
                            echo "<tr><td colspan='5'>Dữ liệu không hợp lệ.</td></tr>";
                        }
                    }
                } else {
                    echo "<tr><td colspan='5'>Không có dữ liệu.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>TRƯỜNG ĐẠI HỌC BẠC LIÊU</p>
        <p>Địa chỉ: Số 178 Võ Thị Sáu, P.8, TP. Bạc Liêu</p>
        <p>Điện thoại: 0291 3822653 - Email: mail@blu.edu.vn</p>
    </div>
</div>

</body>
</html>
