<?php
file_put_contents('data/'.$_POST['tier']."/".basename($_POST['deck']), $_POST['code']);
header('Location: /update.php?id='.$_POST['tier']);
?>
