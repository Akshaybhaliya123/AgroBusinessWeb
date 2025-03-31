
<?php
include '../connection.php'
?>
<?php

$id=$_GET['del'];
echo $id;
$query= "DELETE  FROM footer WHERE id=$id";
$data= mysqli_query($conn,$query);
if($data){
  header('Location: footerdata.php');
}
else{
    echo "data is not deleted";
}
?>