<?php
$n=$_POST['t1'];
$f=$_POST['t2'];
$con=mysqli_connect("localhost","root","","project")or die("invalid database");
$q="select * from feed where t1='$n'";
$rs=mysqli_query($con,$q)or die("invalid query");
$i='';
while($row=mysqli_fetch_array($rs))
{
    $i=$row['t1'];
    $i=$row['t2'];
    mysqli_close();
}
?>