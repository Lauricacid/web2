<?php
function toss_parameter($param){
  if(isset($_GET[$param])){
    $basename = basename($_GET[$param]);
    return $param."=".$basename;
  }
}
function return_parameter($param){
  if(isset($_GET[$param])){
    $basename = basename($_GET[$param]);
    return $basename;
  }
}
function print_list(){
  $list = scandir("./data");
  $count = 0;
  while($count < count($list)){
    if($list[$count] != '.' && $list[$count] != '..'){
      echo "<li><a href=\"index.php?id=$list[$count]\">$list[$count]티어</a></li>\n";
    }
    $count++;
  }
}
function print_title(){
  if(isset($_GET['id'])){
    $title = htmlspecialchars($_GET['id']);
    echo $title."티어";
  }
}
function print_content(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    if($basename == '..'){
      $basename = '/';
    }
    echo "<ul>";
    $list = scandir("./data/".$basename);
    foreach($list as $value){
      $title = htmlspecialchars($value);
      if($value != '.' && $value != '..'){
        $content = htmlspecialchars(file_get_contents("data/".$basename."/".$value));
        echo "<li><strong>$title</strong></li>$content";
      }
    }
    echo "</ul>";
  } else{
    $content = file_get_contents("./index");
    echo $content;
  }
}
?>
