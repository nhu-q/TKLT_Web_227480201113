<!DOCTYPE html>
<html>
<head>
    <title>Chọn Năm</title>
</head>
<body>
    <h2>Chọn Năm</h2>
    <form method="post">
        <label for="nam">Chọn năm:</label>
        <select name="nam" id="nam">
            <?php
            $nam_hientai = date("Y");
            for ($nam = 1900; $nam <= $nam_hientai; $nam++) {
                echo "<option value='$nam'>$nam</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Xác nhận">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nam_chon = $_POST["nam"];
        echo "<p>Bạn đã chọn năm: <strong>$nam_chon</strong></p>";
    }
    ?>
</body>
</html>
