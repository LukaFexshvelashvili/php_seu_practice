<html>
<head>
<meta charset="utf-8">
<title>სტუდენტის შემოწმება</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <a href="index.php">მთავარი</a>
    <a href="salary.php">დავალება 1</a>
    <a href="grades.php">დავალება 2</a>
    <a href="quiz.php">დავალება 3</a>
    <hr>

    <h2>სტუდენტის შემოწმება</h2>
    <p>მონაცემები მუშავდება $_POST მეთოდით</p>

<?php
if(isset($_POST['gagzavna']))
{
    $correct = 0;

    // ტესტური შეკითხვები
    if($_POST['k1'] == "b")
    {
        $correct = $correct + 1;
    }

    if($_POST['k2'] == "c")
    {
        $correct = $correct + 1;
    }

    if($_POST['k3'] == "a")
    {
        $correct = $correct + 1;
    }

    // ღია შეკითხვები
    if($_POST['k4'] == "php" || $_POST['k4'] == "PHP")
    {
        $correct = $correct + 1;
    }

    if($_POST['k5'] == "HyperText Markup Language" || $_POST['k5'] == "hypertext markup language")
    {
        $correct = $correct + 1;
    }

    echo "<h3>სწორი პასუხების რაოდენობა: $correct/5</h3>";
    echo "<a href='quiz.php'>ხელახლა გავლა</a>";
}
else
{
?>

    <form method="post" action="">

        <div class="kitxva">
            <b>1. რომელი სიმბოლოთი იწყება PHP ცვლადი? (ტესტური)</b><br>
            <input type="radio" name="k1" value="a"> #<br>
            <input type="radio" name="k1" value="b"> $<br>
            <input type="radio" name="k1" value="c"> @<br>
            <input type="radio" name="k1" value="d"> &
        </div>

        <div class="kitxva">
            <b>2. რომელი მეთოდი აგზავნის მონაცემებს URL-ში? (ტესტური)</b><br>
            <input type="radio" name="k2" value="a"> POST<br>
            <input type="radio" name="k2" value="b"> PUT<br>
            <input type="radio" name="k2" value="c"> GET<br>
            <input type="radio" name="k2" value="d"> DELETE
        </div>

        <div class="kitxva">
            <b>3. რომელი ტეგია ცხრილისთვის? (ტესტური)</b><br>
            <input type="radio" name="k3" value="a"> table<br>
            <input type="radio" name="k3" value="b"> form<br>
            <input type="radio" name="k3" value="c"> div<br>
            <input type="radio" name="k3" value="d"> list
        </div>

        <div class="kitxva">
            <b>4. რა ენაა .php ფაილი? (ღია)</b><br>
            <input type="text" name="k4">
        </div>

        <div class="kitxva">
            <b>5. რას ნიშნავს HTML? (ღია)</b><br>
            <textarea name="k5" rows="2" cols="40"></textarea>
        </div>

        <input type="submit" name="gagzavna" value="შემოწმება">
    </form>

<?php
}
?>
</div>

</body>
</html>
