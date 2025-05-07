<?php 
include 'db.php';

// Kiểm tra nếu có ID được truyền qua URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];  // Lấy ID từ URL

    // Đảm bảo ID là một số hợp lệ
    if (!is_numeric($id) || strlen($id) != 3) {
        echo "ID không hợp lệ!";
        exit;
    }

    // Truy vấn dữ liệu nhân viên theo ID
    $query = "SELECT * FROM nhanvien WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Gán giá trị cho các trường
        $ho_ten = $row['ho_ten'];
        $chuc_vu = $row['chuc_vu'];
        $ngay_sinh = $row['ngay_sinh'];
        $ngay_vaolam = $row['ngay_vaolam'];
        $dia_chi = $row['dia_chi'];
        $so_dt = $row['so_dt'];
        $email = $row['email'];
    } else {
        echo "Không tìm thấy nhân viên với ID này.";
        exit;
    }

    // Kiểm tra nếu form đã được submit
    if (isset($_POST['submit'])) {
        $ho_ten = $_POST['ho_ten'];
        $chuc_vu = $_POST['chuc_vu'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $ngay_vaolam = $_POST['ngay_vaolam'];
        $dia_chi = $_POST['dia_chi'];
        $so_dt = $_POST['so_dt'];
        $email = $_POST['email'];

        // Cập nhật thông tin nhân viên trong cơ sở dữ liệu
        $update_query = "UPDATE nhanvien SET 
                            ho_ten = '$ho_ten',
                            chuc_vu = '$chuc_vu',
                            ngay_sinh = '$ngay_sinh',
                            ngay_vaolam = '$ngay_vaolam',
                            dia_chi = '$dia_chi',
                            so_dt = '$so_dt',
                            email = '$email'
                          WHERE id = '$id'";

        if (mysqli_query($conn, $update_query)) {
            echo "Thông tin nhân viên đã được cập nhật thành công!";
        } else {
            echo "Lỗi khi cập nhật thông tin: " . mysqli_error($conn);
        }
    }
} else {
    echo "ID không hợp lệ!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Hồ Sơ Nhân Viên</title>
    <style>
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
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 30px;
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

        label {
            font-size: 16px;
        }

        input[type="text"], input[type="date"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Chỉnh Sửa Hồ Sơ Nhân Viên</h1>
    </div>

    <div class="content">
        <h2>Sửa thông tin của nhân viên</h2>

        <form method="POST">
            <label for="ho_ten">Họ và tên:</label><br>
            <input type="text" id="ho_ten" name="ho_ten" value="<?php echo $ho_ten; ?>" required><br>

            <label for="chuc_vu">Chức vụ:</label><br>
            <input type="text" id="chuc_vu" name="chuc_vu" value="<?php echo $chuc_vu; ?>" required><br>

            <label for="ngay_sinh">Ngày sinh:</label><br>
            <input type="date" id="ngay_sinh" name="ngay_sinh" value="<?php echo $ngay_sinh; ?>" required><br>

            <label for="ngay_vaolam">Ngày vào làm:</label><br>
            <input type="date" id="ngay_vaolam" name="ngay_vaolam" value="<?php echo $ngay_vaolam; ?>" required><br>

            <label for="dia_chi">Địa chỉ:</label><br>
            <input type="text" id="dia_chi" name="dia_chi" value="<?php echo $dia_chi; ?>" required><br>

            <label for="so_dt">Số điện thoại:</label><br>
            <input type="text" id="so_dt" name="so_dt" value="<?php echo $so_dt; ?>" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>

            <input type="submit" name="submit" value="Cập nhật">
        </form>
    </div>
</div>

</body>
</html>
