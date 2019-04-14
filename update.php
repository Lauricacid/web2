<?php require_once('lib/header.php');?>
<?php require_once('view/top.php')?>
        <a href="create.php?<?=toss_parameter('id')?>">create</a>
        <?php if(isset($_GET['id'])){?>
        <a href="update.php?=id<?=$_GET['id']?>">update</a>
        <form action="update_process.php" method="post">
          <p>
            <select name="tier">
              <?php
              $list = scandir('data/');
              foreach($list as $value){
                if($value != '.' && $value != '..'){
              ?>
              <option value=<?=$value ?> <?php if($value == $_GET['id']){echo "selected='selected'";} ?>><?=$value ?></option>
              <?php
                }
              }
              ?>
            </select>
          </p>
          <p>
            <textarea name="deck" placeholder="덱 이름"></textarea>
          </p>
          <p>
            <textarea name="code" placeholder="덱 코드"></textarea>
          </p>
          <p>
            <input type="submit" value="submit">
          </p>
        </form>
        <?php }?>
<?php require('view/bottom.php');?>
