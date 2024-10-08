<?php
    $n=$_POST['un'];
    $p=$_POST['p'];
    $con=mysqli_connect("localhost","root","","project") or die("invalid database");
	$q="select *
		from login
		where un='$n' and p='$p'";
	$rs=mysqli_query($con,$q) or die ("invalid query");
	$row=mysqli_fetch_array($rs);
	if($row)
	{
		echo"
		<script>
		 	alert('login sucessful'); 
			window.location.href='book.html';
		 </script>;";
	}else
	{
		echo"
		<script>
			 alert('login unsuccessful you need to REGISTER first');
			 window.location.href='li.html';	 
		</script>;";
	}
	mysqli_close($con);
?>