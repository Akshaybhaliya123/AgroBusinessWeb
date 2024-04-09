<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Spice' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
          .serviceform{
        content: "";
        position: absolute;
        background: url('img/serviceform.jpeg') no-repeat center center/cover;
        width: 100%;
        z-index: -1;
        opacity: 3; 
        top: 0px;
        left: 0px;
        
    }
    .serveformdata{
        width:70%;
        box-shadow:10px 10px 20px white;
        
    }
    .serveformdata h1{
        margin-top:5%;
        padding-top:3%;
        margin-bottom:5%;
        color:black;
    }
     .form-group{
        width: 60%;
        padding: 20px;
        
       }
       .group1{
        width:30%;
        float:left;
       }
       .group2{
        margin-left:20%;
       }
       .form-control{
        font-size: 18px;
        font-weight: 700;
       }
      
       #servicebtn{
        text-align: center;
        width: 180px;
        margin-bottom: 15%;
        border-radius: 20px;
        font-size: 20px;
        font-weight: 700;
        background-color: greenyellow;
        box-shadow: 5px 5px 20px green;
        padding: 10px;
       }
       #servicebtn:hover{
        background-color: rgb(149, 240, 11);
        font-size: 18px;
        color: white;
        box-shadow: 3px 3px 15px green;
       }
       @media screen and (max-width:800px){
        .group1{
          width:60%;
          float:none;
        }
        .group2{
          margin-left:0%;
        }
       }
       @media screen and (max-width:600px){
        .form-control{
          font-size:15px;
        }
       }
    </style>
</head>
<body>
<?php
include 'connection.php'
?>
<?php

 if(isset($_POST['data'])){
    $username=$_POST['Yourname'];
    $servicetype = $_POST['servicetype'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Address = $_POST['address'];
    $city = $_POST['city'];
    $remark = $_POST['remark'];
    $query = "INSERT INTO servicedata (userName,ServiceType,Email,Contact,Addres,City,Remark) VALUES('$username','$servicetype','$email','$phone','$Address','$city','$remark')";
    $data = mysqli_query($conn,$query);
    if($data){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your data has been inserted successfully..!!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   else{
    echo "failed to insert data:".mysqli_connect_error();
   }
  }

?>
   <div class="row">
    <div class="col-lg-12">
    <center>
        <div class="serviceform">
            <div class="serveformdata">
                <h1>SERVICE FORM</h1>
            <form action="serviceform.php" method="POST">
    
                  <div class="form-group">
                    <input type="text" class="form-control" id="Yourname" name="Yourname" placeholder="Your Name" required>
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" id="servicetype" name="servicetype" placeholder="Service Type" required>
                  </div> 
                  <div class="form-group group1 group2">
                    <input type="email" class="form-control" id="email"name="email" placeholder="Email id" required>
                  </div>
                  <div class="form-group group1">
                  <input type="number" id="phone" class="form-control" name="phone" placeholder="Contact No" required>
                  </div>    
                  <div class="form-group">
                  <textarea  placeholder="Address" class="form-control" name="address" row="3" required></textarea>
                  </div>  
                  <div class="form-group">
                   <input type="text"  placeholder="City" class="form-control" name="city" row="3" required>
                  </div>  
                  <div class="form-group">
                   <textarea  placeholder="Remark" class="form-control" name="remark" row="3" required></textarea>
                  </div>  
                  <div class="form-group">
                    <center><button type="submit" name="data" id="servicebtn">Submit</button></center>
                  </div>
               </form> 
    
            </div>
        </div>
        </center>
    </div>
   </div> 
</body>
</html>