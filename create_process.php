<?php
file_put_contents('data/'.basename($_POST['tier']).'/'.basename($_POST['deck']), $_POST['code']);
header('Location: /create.php?id='.$_POST['tier']);
?>
