<html>
<form method=post action="<?php $_SERVER['PHP_SELF']?>">
enter name:
<input type=text name=t1>
<br>
enter email:
<input type=email name=t2 />
<br>
<input type=submit name=b1 />
</form>
</html>
<?php
if(isset($_POST['b1']))
{
if(select name,email
from book b,login l
where b.name==l.name)
{
    echo"$name <br> $email";
}
else{
    echo"complete the login process";
}
}
?>