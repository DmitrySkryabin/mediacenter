<?php

  $connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
  );

  if(!$connection){
    echo "Ошибка подключения к базе данных, лбратитесь к вашему системному админимтратору";
    echo mysqli_connect_error();
    exit();
  }
 ?>
