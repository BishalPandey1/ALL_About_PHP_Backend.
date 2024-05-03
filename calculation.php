<?php
$a=100;
echo"The value of a is:",$a;
$sub1=['name'];
$sub2=['sub1'];
$sub3=['sub3'];
$sub4=['sub4'];
$sub5=['sub5'];
$sub6=['sub6'];
$total=($sub1+$sub2+$sub3+$sub4+$sub5+$sub6);
// $per=($total)/100;
if($per>90)
{
    $greade >= "A";
}
else if($per>=80)
{
    $grade="A-";
}
else if($per>=70)
{
    $grade= "B+";
}
else if($per>= 60)
{
    $grade="B";
}
else if($per>= 50)
{
    $grade= "B-";
}
else{
    $grade="Fail";
}
echo $per;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:aliceblue;
            border:black solid;
        }
        header h1{
            border: rgb(74, 121, 74) solid;
            background-color: rgb(118, 234, 118);
            text-align: center;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
    <h1>This is for the Calculation of Your Marks.</h1>
    </header>
    <div>
    <form action="data.php" methond="post">
<div>
    <label for="name">Enter you name:</label>
    <input type="text" id="name" name="name" placeholder="enter you name here" name="nam">
</div>
<div>
    <label for="en">Enter you English Marks:</label>
    <input type="number" id="en" placeholder="enter your marks here" name="sub1"> 
</div>
<div>
    <label for="ne">Enter you Nepali Marks:</label>
    <input type="number" id="ne" placeholder="enter your marks here" name="sub2"> 
</div>
<div>
    <label for="sc">Enter you Science Marks:</label>
    <input type="number" id="sc" placeholder="enter your marks here" name="sub3"> 
</div>
<div>
    <label for="co">Enter you Computer Marks:</label>
    <input type="number" id="co" placeholder="enter your marks here" name="sub4"> 
</div>
<div>
    <label for="ma">Enter you Math Marks:</label>
    <input type="number" id="ma" placeholder="enter your marks here" name="sub5"> 
</div>
<div>
    <label for="Da">Enter you DSA Marks:</label>
    <input type="number" id="Da" placeholder="enter your marks here" name="sub6"> 
</div>
<div>
<div>
    <button type="submit" class="sub">submit</button>
</div>
</form>
    </div>
</body>
</html>