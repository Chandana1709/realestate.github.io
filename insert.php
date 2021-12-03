<?php

//insert.php

include('database_connection1.php');

if(count($_FILES["images"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["images"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["images"]["tmp_name"][$count]));
  $query = "INSERT INTO tbl_images(images) VALUES ('$image_file')";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}


?>
