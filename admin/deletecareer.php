
<?php
include '../connection.php'
?>
<?php

$id=$_GET['del'];
echo $id;
$query= "DELETE  FROM careerdata WHERE id=$id";
$data= mysqli_query($conn,$query);
if($data){
  header('Location: careerdata.php');
}
else{
    echo "data is not deleted";
}
?>