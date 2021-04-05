<?php

$con=mysqli_connect('localhost','root','');
if($con==true)
{
mysqli_select_db($con, 'cyber_defence');
}
else
{
alert ("server connection failed");
}
?> 
