<?php
  include "../config.php";
  if(isset($_SESSION['username'])){
    function delete_objects($elements = array(), $db_table){
      global $connection;
      foreach ($elements as $element) {
        $query = "DELETE FROM `$db_table` WHERE `id`=" . $element;
        mysqli_query($connection, $query);
      }
    }
    function notactive_objects($elements = array(), $db_table){
      global $connection;
      foreach ($elements as $element) {
        $query = "UPDATE `$db_table` SET `active`=0 WHERE `id`=" . $element;
        mysqli_query($connection, $query);
      }
    }
    if($_POST){
      $count = 0;
      $id_elements = array();
      $i = 0;
      $val = 0;
      while ($_POST['id-of-news'][$i]!="&") {
        if ($_POST['id-of-news'][$i]!="?") {
          if($count == 0){
            $val = (int)$_POST['id-of-news'][$i];
            $count = 10;
          }else{
            $val = $val*$count + (int)$_POST['id-of-news'][$i];
          }
        }else{
          $count = 0;
          array_push($id_elements, $val);
        }
        $i++;
      }
      if(isset($_POST['delete'])){
        delete_objects($id_elements, "news_page");
        echo "delete succesful";
        print_r($id_elements);
      }
      if(isset($_POST['close'])){
        notactive_objects($id_elements, "news_page");
        echo "close succesful";
      }
    }
    header('Location: adminpage.php');
  }
 ?>
