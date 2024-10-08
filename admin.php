<?php
    $un=$_POST['t1'];
    $ps=$_POST['t2'];
    $con=mysqli_connect("localhost","root","","project") or die("invalid database");
	$q="select *
		from admin
		where t1='$un' and t2='$ps'";
	$rs=mysqli_query($con,$q) or die ("invalid query");
	$row=mysqli_fetch_array($rs);
	if($row)
	{
		echo"
		<script>
		 	alert('login sucessful'); 
			window.location.href='detial.html';
		 </script>;";
	}else
	{
		echo"
		<script>
			 alert('login unsuccessful you need to REGISTER first');
			 window.location.href='admin.html';	 
		</script>;";
	}
	mysqli_close($con);
?>