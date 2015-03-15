<?php

session_start();

if($_REQUEST['uname']== 'rbcnet' && $_REQUEST['pwd']== 'net206')
{

$_SESSION['uname'] = 'rbcnet';

$_SESSION['pwd'] = 'net206';

header('Location: content.php');

}

else{

header('Location: form.php');

}

?>
