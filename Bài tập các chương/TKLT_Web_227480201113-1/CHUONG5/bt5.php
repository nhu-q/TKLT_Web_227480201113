<!DOCTYPE html>
<html>
<head>
    <title>Tính USCLN và BSCNN</title>
</head>
<body>
    <h2>TÍNH USCLN VÀ BSCNN</h2>
    <form method="post">
        Số thứ 1: <input type="number" name="so1" required><br><br>
        Số thứ 2: <input type="number" name="so2" required><br><br>
        <input type="submit" name="uscln" value="USCLN">
        <input type="submit" name="bscnn" value="BSCNN">
    </form>

    <?php
    function uscln($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    function bscnn($a, $b) {
        return ($a * $b) / uscln($a, $b);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $so1 = intval($_POST["so1"]);
        $so2 = intval($_POST["so2"]);

        if (isset($_POST["uscln"])) {
            echo "<p>Kết quả USCLN: " . uscln($so1, $so2) . "</p>";
        }

        if (isset($_POST["bscnn"])) {
            echo "<p>Kết quả BSCNN: " . bscnn($so1, $so2) . "</p>";
        }
    }
    ?>
</body>
</html>
