<?php
if(isset($_POST['save']))
{
    $n=$_POST['name'];
    $d=$_POST['dens'];
    $dn=$_POST['dname'];
    $con=mysqli_connect("localhost","root","","project") or die("invalid database");
    $q="insert into acc values('$n','$d','$dn')";
    $n=mysqli_query($con,$q);
    if($n>0)
    {
	    echo"
        <script>
             alert('YOUR CAR IS BOOKED!! THANKYOU. DO VISIT AGAIN!!'); 
            window.location.href='homefinal.html';
            </script>;";
    }
    else
    {
        echo"
        <script>
                alert('not inserted'); 
                window.location.href='homefinal.html';
        </script>;";
    }
    mysqli_close($con);
}
?>