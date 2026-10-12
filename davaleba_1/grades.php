<html>
<head>
<meta charset="utf-8">
<title>ნიშნების უწყისი</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <a href="index.php">მთავარი</a>
    <a href="salary.php">დავალება 1</a>
    <a href="grades.php">დავალება 2</a>
    <a href="quiz.php">დავალება 3</a>
    <hr>

    <h2>ნიშნების უწყისი</h2>
    <p>მონაცემები მუშავდება $_POST მეთოდით</p>

    <form method="post" action="">
        სტუდენტის სახელი:<br>
        <input type="text" name="saxeli"><br>

        სტუდენტის გვარი:<br>
        <input type="text" name="gvari"><br>

        კურსი:<br>
        <input type="text" name="kursi"><br>

        სემესტრი:<br>
        <input type="text" name="semestri"><br>

        სასწავლო კურსი:<br>
        <input type="text" name="sagani"><br>

        მიღებული ნიშანი (ქულა):<br>
        <input type="text" name="kula"><br>

        ლექტორის სახელი:<br>
        <input type="text" name="leqtori_saxeli"><br>

        ლექტორის გვარი:<br>
        <input type="text" name="leqtori_gvari"><br>

        დეკანის სახელი:<br>
        <input type="text" name="dekani_saxeli"><br>

        დეკანის გვარი:<br>
        <input type="text" name="dekani_gvari"><br>

        <input type="submit" name="gagzavna" value="შეფასება">
    </form>

<?php
if(isset($_POST['gagzavna']))
{
    $saxeli = $_POST['saxeli'];
    $gvari = $_POST['gvari'];
    $kursi = $_POST['kursi'];
    $semestri = $_POST['semestri'];
    $sagani = $_POST['sagani'];
    $kula = $_POST['kula'];
    $leqtori_saxeli = $_POST['leqtori_saxeli'];
    $leqtori_gvari = $_POST['leqtori_gvari'];
    $dekani_saxeli = $_POST['dekani_saxeli'];
    $dekani_gvari = $_POST['dekani_gvari'];

    // შეფასების დათვლა ქულის მიხედვით
    if($kula >= 91)
    {
        $nishani = "A";
        $teqsti = "ფრიადი";
    }
    else if($kula >= 81)
    {
        $nishani = "B";
        $teqsti = "ძალიან კარგი";
    }
    else if($kula >= 71)
    {
        $nishani = "C";
        $teqsti = "კარგი";
    }
    else if($kula >= 61)
    {
        $nishani = "D";
        $teqsti = "დამაკმაყოფილებელი";
    }
    else if($kula >= 51)
    {
        $nishani = "E";
        $teqsti = "საკმარისი";
    }
    else if($kula >= 41)
    {
        $nishani = "FX";
        $teqsti = "ვერ ჩააბარა";
    }
    else
    {
        $nishani = "F";
        $teqsti = "ჩაჭრილი";
    }

    echo "<h3>შედეგი</h3>";
    echo "<table>";
    echo "<tr><td>სახელი</td><td>$saxeli</td></tr>";
    echo "<tr><td>გვარი</td><td>$gvari</td></tr>";
    echo "<tr><td>კურსი</td><td>$kursi</td></tr>";
    echo "<tr><td>სემესტრი</td><td>$semestri</td></tr>";
    echo "<tr><td>სასწავლო კურსი</td><td>$sagani</td></tr>";
    echo "<tr><td>ქულა</td><td>$kula</td></tr>";
    echo "<tr><td>შეფასება</td><td>$nishani — $teqsti</td></tr>";
    echo "<tr><td>ლექტორი</td><td>$leqtori_saxeli $leqtori_gvari</td></tr>";
    echo "<tr><td>დეკანი</td><td>$dekani_saxeli $dekani_gvari</td></tr>";
    echo "</table>";
}
?>
</div>

</body>
</html>
