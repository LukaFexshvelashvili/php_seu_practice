<html>
<head>
<meta charset="utf-8">
<title>სახელფასო უწყისი</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <a href="index.php">მთავარი</a>
    <a href="salary.php">დავალება 1</a>
    <a href="grades.php">დავალება 2</a>
    <a href="quiz.php">დავალება 3</a>
    <hr>

    <h2>სახელფასო უწყისი</h2>
    <p>მონაცემები მუშავდება $_GET მეთოდით</p>

    <form method="get" action="">
        სახელი:<br>
        <input type="text" name="saxeli"><br>

        გვარი:<br>
        <input type="text" name="gvari"><br>

        თანამდებობა:<br>
        <input type="text" name="tanamdeboba"><br>

        ხელფასი:<br>
        <input type="text" name="xelfasi"><br><br>

        საშემოსავლო გადასახადი:<br>
        <input type="radio" name="rejim" value="1" checked> ფიქსირებული 20%<br>
        <input type="radio" name="rejim" value="2"> არჩევითი პროცენტი:
        <select name="procenti">
            <option value="10">10%</option>
            <option value="15">15%</option>
            <option value="20">20%</option>
            <option value="25">25%</option>
            <option value="30">30%</option>
        </select>
        <br>

        <input type="submit" name="gagzavna" value="გამოთვლა">
    </form>

<?php
if(isset($_GET['gagzavna']))
{
    $saxeli = $_GET['saxeli'];
    $gvari = $_GET['gvari'];
    $tanamdeboba = $_GET['tanamdeboba'];
    $xelfasi = $_GET['xelfasi'];
    $rejim = $_GET['rejim'];

    // თუ ფიქსირებულია - 20%, თუ არა - არჩეული
    if($rejim == "1")
    {
        $procenti = 20;
    }
    else
    {
        $procenti = $_GET['procenti'];
    }

    $gadasaxadi = $xelfasi * $procenti / 100;
    $xelze = $xelfasi - $gadasaxadi;

    echo "<h3>შედეგი</h3>";
    echo "<table>";
    echo "<tr><td>სახელი</td><td>$saxeli</td></tr>";
    echo "<tr><td>გვარი</td><td>$gvari</td></tr>";
    echo "<tr><td>თანამდებობა</td><td>$tanamdeboba</td></tr>";
    echo "<tr><td>დარიცხული ხელფასი</td><td>$xelfasi ლარი</td></tr>";
    echo "<tr><td>გადასახადის %</td><td>$procenti%</td></tr>";
    echo "<tr><td>გადასახადის თანხა</td><td>$gadasaxadi ლარი</td></tr>";
    echo "<tr><td>ხელზე ასაღები</td><td>$xelze ლარი</td></tr>";
    echo "</table>";
}
?>
</div>

</body>
</html>
