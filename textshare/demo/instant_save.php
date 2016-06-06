<?php

  include_once ('db/connect.php');

  $name = $_POST['name'];
  $text = $_POST['text'];

  if(mysql_query("INSERT INTO details VALUES('$name', '$text', NOW())"))
  	echo "successfully inserted";

    else 
      echo "insertion error";
  

?>
