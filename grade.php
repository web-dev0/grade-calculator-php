<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Finder</title>
    <style>
    textarea
    {
        display: inline-block;
        width: 100%;
        margin: 0 0 0 45px;
        font-size: 200%;
        font-weight: bold;
    }
    </style>
</head>
<body style="background-color:beige ">
    <h1>Find Grade</h1>
    <br>
    <p><b>Enter Your Marks Below Out Of 100:</b></p>
    <br>
    


<?php

$s1 = $s2 = $s3 = $s4 = $s5 = $s6 = $s7 = 0; 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (!empty($_POST["sub1"])) {
    $s1 = $_POST["sub1"];
    }
    if (!empty($_POST["sub2"])) {
        $s2 = $_POST["sub2"];
    }
    if (!empty($_POST["sub3"])) {
    $s3 = $_POST["sub3"];
    }
    if (!empty($_POST["sub4"])) {
        $s4 = $_POST["sub4"];
    }  
    if (!empty($_POST["sub5"])) {
        $s5 = $_POST["sub5"];
    }
    if (!empty($_POST["sub6"])) {
        $s6 = $_POST["sub6"];
    }
    if (!empty($_POST["sub7"])) {
        $s7 = $_POST["sub7"];
    }
}
$sum = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
$percent =  $sum/700*100;

$grade = '';

if ($percent>80) 
{
    $grade = 'A';
} 
else if ($percent>70) 
{
    $grade = 'B';
}
else if ($percent>60) 
{
    $grade = 'C';
}
else if ($percent>=50) 
{
    $grade = 'D';
}
else
{
    $grade = 'F';
}


?>
    <form action="grade.php" method="POST">
            <label>Subject 1</label> &nbsp; <input type="text" name="sub1" value="<?php echo htmlentities($s1); ?>"><br><br>
            <label>Subject 2</label> &nbsp; <input type="text" name="sub2" value="<?php echo htmlentities($s2); ?>"><br><br>
            <label>Subject 3</label> &nbsp; <input type="text" name="sub3" value="<?php echo htmlentities($s3); ?>"><br><br>
            <label>Subject 4</label> &nbsp; <input type="text" name="sub4" value="<?php echo htmlentities($s4); ?>"><br><br>
            <label>Subject 5</label> &nbsp; <input type="text" name="sub5" value="<?php echo htmlentities($s5); ?>"><br><br>
            <label>Subject 6</label> &nbsp; <input type="text" name="sub6" value="<?php echo htmlentities($s6); ?>"><br><br>
            <label>Subject 7</label> &nbsp; <input type="text" name="sub7" value="<?php echo htmlentities($s7); ?>"><br><br>
            <input type="submit" value="Get Grade">
    <div style="display: inline-block"> 
                <textarea name="result" rows="1" cols="1" disabled><?php echo $grade ?> </textarea>
    </div>
    </form>
</body>
</html>