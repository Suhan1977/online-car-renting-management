<?php

if($_POST['b1'])
{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $s=$_POST['subject'];
    $m=$_POST['message'];
    $h="from:mulchandanisuhani5@gmail.com";
    if(mail($e,$s,$m,$h))
    {
        echo"email send";
    }
    else{
        echo"failed";
    }
}
?>