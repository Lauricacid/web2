<?php require_once('lib/header.php');?>
<!DOCTYPE html>
<html>
  <head>
    <title>test</title>
    <meta charset="UTF-8">
    <!--link rel="stylesheet" type="text/css" href="style.css"-->
    <link rel="stylesheet" type="text/css" href="day.css">
    <link rel="stylesheet" type="text/css" href="default.css">
    <!--script src="colors.js"></script-->
    <script src="style.js"></script>
  </head>
  <body>
    <!--input type="button" value="night" onClick="nightDayHandler(this)"-->
    <input type="button" value="night" onClick="nightDayChanger(this)">
    <script>
    cookieCheck();
    </script>
    <h1><a href="index.php">하스스톤</a></h1>
    <div id="grid">
      <div id="left">
        <ol id=>
          <?php
          print_list();
          ?>
        </ol>
