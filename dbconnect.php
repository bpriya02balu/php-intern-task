<?php
$a=$POST['name'];
$b=$POST['email'];
$c=$POST['pass'];
$d=$POST['address'];
$e=$POST['phoneno'];
$con=mysqli_connect("localhost","root"," ","task");
$sql="INSERT INTO 6decwed(name,email,pass,address,phoneno)values('$a','$b','$c','$d','$e')";
$r=$mysqli_query($con,$sql);
if($r)
{
    echo " STUDENT DETAILS ADDED SUCCESSFULLY";
}
else
{
    echo "STUDENT DETAILS NOT ADDED";
}
?>



