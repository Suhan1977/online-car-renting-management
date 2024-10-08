<html>
<head>
    <link href="policy.css" rel="stylesheet"></link>
    <style>
        h3{
            background-color:thistle;
            color: white;
            text-align: center;
            font-size: xx-large;
            font-weight: bolder;
        }
    </style>
    <script lang="javascript">
       function display()
       {
                window.location.href=("email.html");
       }
    </script>
</head>
<h1>ADMIN PAGE</h1>
<table cellspacing="5" cellpadding="5">
    <tr>
            <ul>
                <td><li><a href="homefinal.html">Home</a></li></td>               	
                <td><li><a href="li.html">Login</a></li></td>
                <td><li><a href="ct.html">Our Car Types</a></li></td>
                <td><li><a href="aboutus.html">About Us</li></a></td>
                <td><li><a href="contact.html">Contact</li></a></td>
                <td><li><a href="terms.html">Terms</a> And <a href="policy.html">Policy</a></li>				</li>
            </ul>
    </tr>
    </table>
<center>
          <h3>login list</a>
                </h3>        <br>
                <?php
  $con=mysqli_connect("localhost","root","","project");
    $q="select * from login";
    echo"<table border=1>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>moblie number</th>
            <th>username</th>
            <th>password</th>
            </tr>";
    $rs=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rs))
    {
        echo"<tr>
        <td>".$row[0]."</td>
        <td>".$row[1]."</td>
        <td>".$row[2]."</td>
        <td>".$row[3]."</td>
        <td>".$row[4]."</td>
        </tr>";
    }
    echo"</table>";
   /* if(select name,email
        from book b,login l
        where b.name==l.name;)
        {
             echo"$name <br> $email";
        }
    else{
            echo"complete the login process";
        }*/
    mysqli_close($con);
?>
                <br>
               <h3> booking detials</a></h3>
                <br></h3>
                <?php
 $con=mysqli_connect("localhost","root","","project");
 $q="select * from book";
 echo"<table border=1>
     <tr>
         <th>name</th>
         <th>car type</th>
         <th>vehicle name</th>
         <th>hire range</th>
         <th>gender</th>
         <th>source</th>
         <th>denstination</th>
         <th>date</th>
         </tr>";
 $rs=mysqli_query($con,$q);
 while($row=mysqli_fetch_array($rs))
 {
     echo"<tr>
     <td>".$row[0]."</td>
     <td>".$row[1]."</td>
     <td>".$row[2]."</td>
     <td>".$row[3]."</td>
     <td>".$row[4]."</td>
     <td>".$row[5]."</td>
     <td>".$row[6]."</td>
     <td>".$row[7]."</td>
     </tr>";
 }
 echo"</table>";
 mysqli_close($con);
?>
<b><a href=email.html>send email</a></b>
</center>
                </html>