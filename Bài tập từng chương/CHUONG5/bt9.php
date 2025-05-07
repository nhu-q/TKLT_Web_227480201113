<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng Cửu Chương</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        .bảng-cửu-chương {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Bảng Cửu Chương (Từ 1 đến 10)</h2>
    <?php
    // Lặp qua các bảng cửu chương từ 1 đến 10
    for ($b = 1; $b <= 10; $b++) {
        echo "<div class='bảng-cửu-chương'>";
        echo "<h3>Bảng $b</h3>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$b x $i = " . ($b * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>
</html>

