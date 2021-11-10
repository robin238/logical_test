<?php

if (isset($_POST["submit"])) {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $count = 0;

    while ($angka1 >= $angka2) {
        $angka1 = $angka1 - $angka2;
        $count++;
    }

    echo "hasil = " . $count;
}



?>


<!DOCTYPE HTML>
<html>

<body>

    <form action="" method="post">
        Angka: <input type="number" name="angka1"><br>
        Angka pembagi: <input type="number" name="angka2"><br>
        <input type="submit" name="submit">
    </form>

</body>

</html>