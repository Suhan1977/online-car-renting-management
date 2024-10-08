<?php
if(isset($_POST['save']))
{
    $n=$_POST['n'];
    $e=$_POST['email'];
    $m=$_POST['pno'];
    $un=$_POST['un'];
    $p=$_POST['p'];
    $con=mysqli_connect("localhost","root","","project") or die("invalid database");
    $q="INSERT into login VALUES('$n','$e','$m','$un','$p')";
    $rs=mysqli_query($con,$q)or die("invalid query");
   
    if($rs>0)
    {
	    echo"
        <script>
             alert('record inserted'); 
            window.location.href='homefinal.html';
            </script>;";
    }
    else
    {
             echo"
                 <script>
                     alert('not inserted'); 
                      window.location.href='sp.html';
                 </script>;";
    }
    mysqli_close($con);
}
?>