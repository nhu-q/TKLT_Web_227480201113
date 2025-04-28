<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Hồ sơ Nhân viên</title>
    <style>
        /* Các kiểu dáng tương tự như trang trước */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
        }
        .container {
            width: 50%;
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #2980b9;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thêm Hồ sơ Nhân viên</h2>

    <!-- Form nhập dữ liệu nhân viên -->
    <form action="them.php" method="POST">
        <label for="ho_ten">Họ và tên:</label>
        <input type="text" id="ho_ten" name="ho_ten" required>

        <label for="chuc_vu">Chức vụ:</label>
        <input type="text" id="chuc_vu" name="chuc_vu" required>

        <label for="ngay_sinh">Ngày sinh:</label>
        <input type="date" id="ngay_sinh" name="ngay_sinh" required>

        <label for="ngay_vaolam">Ngày vào làm:</label>
        <input type="date" id="ngay_vaolam" name="ngay_vaolam" required>

        <label for="dia_chi">Địa chỉ:</label>
        <input type="text" id="dia_chi" name="dia_chi" required>

        <label for="so_dt">Số điện thoại:</label>
        <input type="text" id="so_dt" name="so_dt" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit" name="submit">Thêm Hồ sơ</button>
    </form>
</div>

<?php
// Kiểm tra nếu người dùng đã gửi form
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $ho_ten = $_POST['ho_ten'];
    $chuc_vu = $_POST['chuc_vu'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $ngay_vaolam = $_POST['ngay_vaolam'];
    $dia_chi = $_POST['dia_chi'];
    $so_dt = $_POST['so_dt'];
    $email = $_POST['email'];

    // Truy vấn SQL để thêm nhân viên vào cơ sở dữ liệu
    $query = "INSERT INTO nhanvien (ho_ten, chuc_vu, ngay_sinh, ngay_vaolam, dia_chi, so_dt, email)
              VALUES ('$ho_ten', '$chuc_vu', '$ngay_sinh', '$ngay_vaolam', '$dia_chi', '$so_dt', '$email')";

    // Thực thi truy vấn và kiểm tra kết quả
    if (mysqli_query($conn, $query)) {
        echo "<p style='color: green;'>Hồ sơ nhân viên đã được thêm thành công!</p>";
    } else {
        echo "<p style='color: red;'>Có lỗi khi thêm hồ sơ: " . mysqli_error($conn) . "</p>";
    }
}
?>

</body>
</html>
