<?php
$server="localhost";
$username="root";
$passwords="";
$database="ecommerce";
$connection=mysqli_connect($server,$username,$passwords,$database);
if(!$connection){
    die("connection imposible".mysqli_connect_error());
}
$squl="insert into userinf(username,address,phoneno)values('Bikesh Thapa','sundharharicah-9','98000000')";
$result = mysqli_query($connection,$squl);
?>
