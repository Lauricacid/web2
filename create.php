<?php require_once('lib/header.php');?>
<?php require_once('view/top.php')?>
        <a href="create.php?<?=toss_parameter('id')?>">create</a>
        <?php if(isset($_GET['id'])){?>
        <a href="update.php?id=<?=$_GET['id']?>">update</a>
      <?php }?>
        <form action="create_process.php" method="post">
          <p>
            <select name="tier">
              <?php
              $count = 1;
              while($count<6){
              ?>
              <option value=<?=$count?> <?php if(isset($_GET['id'])){if($count == $_GET['id']){echo "selected='selected'";}} ?>><?=$count?></option>
              <?php
              $count++;
              }
              ?>
            </select>
          </p>
          <p>
            <input type="text" name="deck" placeholder="덱 이름">
          </p>
          <p>
            <textarea name="code" placeholder="덱 코드"></textarea>
          </p>
          <p>
            <input type="submit" value="submit">
          </p>
        </form>
<?php require('view/bottom.php');?>
