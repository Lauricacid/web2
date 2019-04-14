<?php require_once('lib/header.php');?>
<?php require_once('view/top.php')?>
        <a href="create.php?<?=toss_parameter('id')?>">create</a>
        <?php if(isset($_GET['id'])){?>
        <a href="update.php?=id<?=$_GET['id']?>">update</a>
        <form action="delete_process.php" method="post">
          <p>
            <select name="deck">
              <?php
              $list = scandir('data/'.$_GET['id']);
              foreach($list as $value){
                if($value != '.' && $value != '..'){
              ?>
              <option value=<?=$value ?>><?=$value ?></option>
              <?php
                }
              }
              ?>
            </select>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="submit">
          </p>
        </form>
        <?php }?>
<?php require('view/bottom.php');?>
