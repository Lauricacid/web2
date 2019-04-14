<?php
unlink('data/'.$_POST['id'].'/'.$_POST['deck']);
header('Location: /delete.php?id='.$_POST['id']);
?>
