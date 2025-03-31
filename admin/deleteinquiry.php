
<?php
include '../connection.php'
?>
<?php

$id=$_GET['del'];
echo $id;
$query= "DELETE  FROM inquiry WHERE sno=$id";
$data= mysqli_query($conn,$query);
if($data){
  header('Location: inquirydata.php');
}
else{
    echo "data is not deleted";
}
?>