<?php
if(isset($_POST['save']))
{
$n=$_POST['name'];
$c=$_POST['type'];
$vn=$_POST['vname'];
$hr=$_POST['hr'];
$g=$_POST['gender'];
$s=$_POST['source'];
$d=$_POST['dens'];
$dt=$_POST['date'];
$nod=$_POST['nod'];
$con=mysqli_connect("localhost","root","","project") or die("invalid database");
$q="INSERT into book VALUES('$n','$c','$vn','$hr','$g','$s','$d','$dt','$nod')";
$n=mysqli_query($con,$q) or die("invalid query");
$today = date('Y-m-d');
    if ($today > $dt) {
        echo "<script> alert('Invalid date');
                window.location.href='book.html';
        </script>";
        exit();
    }
        if($n>0)    
        {
              echo"
                 <script>
                     alert('YOUR BOOKING IS CONFIRMED!!!!THANK YOU!!DO VISIT AGAIN');
                      window.location.href='homefinal.html';
                 </script>;";
        }
        else{
            echo"
            <script>
                alert('OOPS!!!Can't insert your data.Retry it ');
                 window.location.href='book.html';
             </script>;";
            }
}
mysqli_close($con);
?>