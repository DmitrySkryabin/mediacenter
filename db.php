<?php

  $connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
  );

  if(!$connection){
    echo "Ошибка подключения к базе данных, обратитесь к вашему системному админимтратору";
    echo mysqli_connect_error();
    exit();
  }
  else{
    mysqli_query($connection, "SET NAMES `utf8` COLLATE `utf8_general_ci`");
  }
 ?>
