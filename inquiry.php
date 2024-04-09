<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Inquiry</title>
    <style>
         .inquirypage::before{
        content: "";
        position: absolute;
        background: url('img/inquiry.png') no-repeat center center/cover;
        height:100% ;
        width: 100%;
        z-index: -1;
        opacity: 3; 
        top: 0px;
        left: 0px;
        
    }
       .inqury{
        width: 40%;
        margin-top: 5%;
        padding-bottom: 3px;
        border-top-left-radius: 20%;
        border-bottom-right-radius: 20%;
        box-shadow: 20px 20px 40px grey;
       }
       .inquiry h1{
        font-weight: 800;
        margin-bottom: 3%;
        padding-top: 7%;
        color: white;
        font-family:'ADLam Display';
       }
       .form-group{
        width: 60%;
        padding: 20px;
        
       }
       .form-control{
        font-size: 18px;
        font-weight: 700;
       }
      
       #inquirybtn{
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
       #inquirybtn:hover{
        background-color: rgb(149, 240, 11);
        font-size: 18px;
        color: white;
        box-shadow: 3px 3px 15px green;
       }
       @media screen and (max-width:900px){
        .inquiry{
          width: 70%;
        }
       }
       @media screen and (max-width:600px){
        .inquiry{
          width:100%;
        }
        .form-group{
          width:80%;
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
    $productname=$_POST['productname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
  
    $query = "INSERT INTO inquiry (Product,yourname,Email,Mobile,yourmessage) VALUES('$productname','$name','$email','$phone','$message')";
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
<section class="inquirypage" id="inquirypage">
    <div class="row">
     <div class="col-lg-12">
    <center><div class="inquiry">
         <center>  <h1>Inquire Now</h1></center> 

             <div class="inputsec">
               <form action="inquiry.php" method="POST">
             <center>  
                  <div class="form-group">
                    <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name" required>
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div> 
                  <div class="form-group">
                    <input type="email" class="form-control" id="email"name="email" placeholder="Email id" required>
                  </div>
                  <div class="form-group">
                  <input type="number" id="phone" class="form-control" name="phone" placeholder="Contact No" required>
                  </div>    
                  <div class="form-group">
                   <textarea  placeholder="Send Message" class="form-control" name="message" row="3" required></textarea>
                  </div>  
                  <div class="form-group">
                    <center><button type="submit" name="data" id="inquirybtn">Submit</button></center>
                  </div></center>
               </form>
             
             </div>
            </div>
          </center> 
        </div>
    </div>
</section>

</body>
</html>