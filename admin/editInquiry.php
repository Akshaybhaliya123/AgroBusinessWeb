<?php
include '../connection.php'
?>
<?php

  $id = $_GET['edi'];
  $query = "SELECT * FROM inquiry WHERE sno=$id";
  $data = mysqli_query($conn, $query);
  $res = mysqli_fetch_assoc($data);
  $product = $res['Product'];                                                                                               
  $yourname = $res['yourname'];
  $Email = $res['Email'];
  $Mobile = $res['Mobile'];
  $yourmessage = $res['yourmessage'];
   ?>

<?php
          if(isset($_POST['update'])){
                  $productname = $_POST['productname'];                                    
                  $name = $_POST['name'];
                 $phone = $_POST['phone'];
                 $email = $_POST['email'];
                 $message = $_POST['message'];
                 $Statuss = $_POST['status'];
                
    $query = "UPDATE inquiry SET Product='$productname', yourname='$name',Mobile ='$phone', Email='$email',  yourmessage='$message', Statuss='$Statuss' WHERE sno=$id";
    $data = mysqli_query($conn, $query);
    if($data){
     
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your data has been Updated successfully..!!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else{
        echo "Data not updated";
    }
    header("Location: inquirydata.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Spice' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <style>
     .leftside{
       
        background-color: green;
        color: white;
        padding-left: 30px;
        padding-top: 30px;
        padding-right: 30px;
        padding-bottom: 100px;
     }
     .leftside img{
        background-color: white;
        margin-bottom: 20%;
        margin-top:5%;
     }
     .leftside h3{
      text-align:center;
        font-size:20px;
        margin-bottom:10%;
        font-family: 'Bungee Inline';
     }
     .profile{
      margin-bottom:20%;
     }
     .profile img{
      border-radius:50%;
      margin-top:2%;
      margin-bottom:2%;
      border:4px solid black;
     }
     .profile p{
      font-size:20px;
      font-family:'ADLaM Display';
      font-weight:600;
      margin-bottom:10%;
     }
     .dash li{
        list-style: none;
        margin-bottom: 10%;
        text-align:justify;
        margin-left:20px;
     }
     .dash a{
        text-decoration: none;
        color: white;
        font-size: 18px;
        font-family: 'Bungee Spice';
        
     }
     .dash a:hover{
      color:black;
      background-color:white;
      padding:5px;
      border-radius:2px;

     }
     #lefthr{
      margin-bottom:20%;
     }
     
     .acc{
      margin-top:4%;
     }
     .uppart{
      padding:15px;
      margin-left:-13px;
      padding-bottom:60px;
      background-color:green;
     }
     .uppart1 img{
       float:left;
       margin-right:30px;
       margin-left:60px;
     }
     .uppart1 h2{
      color:white;
      font-weight:600;
      font-family: 'Bungee Spice';
     }
     .uppart1{
      width:50%;
     float:left;
     }

     .upright a{
      text-decoration:none;
     }
     .upright{
      float:left;
      margin-left:35%;
     }
     /*DROPDOWN BUTTON */
     .dropbtn {
       background-color: white;
       color: white;
       padding-top: 7px;
       padding-bottom:7px;
       padding-left:40px;
       padding-right:40px;
       font-size: 18px;
       font-family:'Bungee Spice';
       border: none;
       cursor: pointer;
      }
       /* The container <div> - needed to position the dropdown content */
     .dropdown {
        position: relative;
        display: inline-block;
        width:50%;
      }

    /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        display: none;
        position: absolute;
       background-color: #f9f9f9;
       font-family:'Bungee Spice';
       min-width: 145px;
       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
       z-index: 1;
       }

    /* Links inside the dropdown */
     .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
      }

/* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
     display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
     /*inquiry form */
     .downpart::before{
        content: "";
        position: absolute;
        background: url('../img/inquiry.png') no-repeat center center/cover;
        height:135% ;
        width: 100%;
        z-index: -1;
        opacity: 3; 
        top: 0px;
        left: 0px;
        
    }
     .inqury{
        width: 80%;
        margin-top: 5%;
        padding-bottom: 3px;
        border-top-left-radius: 20%;
        border-bottom-right-radius: 20%;
        box-shadow: 20px 20px 40px grey;
       }
       .inquiry h1{
        margin-left:-13px;
        margin-bottom: 3%;
        margin-top:7%;
        padding:10px;
        color: white;
        font-family: 'Bungee';
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
    </style>
</head>
<body>
    
  <div class="row">
    <div class="col-lg-2 leftside">
      <center><img src="../img/companylogo2.png" width="180px" ></center>
      <h3>Jiya Eco-Products Limited</h3>
      <hr id="lefthr">
      <div class="profile">
    <center> <img src="team3.jpg" width="80px" height="90px">
         <p>Ghanshyam Dass </p>  </center>
      </div>
      <div class="dash">
        <ul>
      <center>      <li><a href="dashboard.php">DASHBOARD</a></li>
           <li> <a href="inquirydata.php">INQUIRY</a></li>
           <li><a href="servicedata.php">SERVICE</a></li>
           <li><a href="careerdata.php">CAREERS</a></li>
           <li> <a href="footerdata.php">UPDATE</a></li>
           <li> <a href="contactdata.php">CONTACT US</a></li></center>
        </ul>
      </div>
    </div>
    <div class="col-lg-10">
    <div class="uppart">
             <div class="uppart1">
                  <img src="../img/dashboardlogo.png" width="50px">
                  <h2>ADMIN PANEL</h2>
            </div>
            <div class="upright">
                   <div class="dropdown">
                        <button class="dropbtn">ADMIN</button>
                           <div class="dropdown-content">
                                <a href="index.php">LOGOUT</a>
                          </div>
                    </div>
           </div>
        </div>
    <div class="downpart">
    <center><div class="inquiry">
         <center>  <h1>Update Inquire Information </h1></center> 

             <div class="inputsec">
             <form action="editInquiry.php?edi=<?php echo $id ?>" method="POST">
             <center>  
                  <div class="form-group">
                    <input type="text" class="form-control" id="productname" name="productname" placeholder="Product Name" value="<?php echo $product ?>" required >
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $yourname ?>" required>
                  </div> 
                  <div class="form-group">
                    <input type="email" class="form-control" id="email"name="email" placeholder="Email id" value="<?php echo $Email ?>" required>
                  </div>
                  <div class="form-group">
                  <input type="number" id="phone" class="form-control" name="phone" placeholder="Contact No" value="<?php echo $Mobile ?>"  required>
                  </div>    
                  <div class="form-group">
                   <input type="text"  class="form-control" name="status"  placeholder="Status" required></input>
                  </div>
                  <div class="form-group">
                   <textarea  class="form-control" name="message" row="3" placeholder="Send Message" value="<?php echo $yourmessage ?>"  required></textarea>
                  </div>  
                  <div class="form-group">
                    <center><button type="submit" name="update" id="inquirybtn">Update</button></center>
                  </div></center>
               </form>
             
             </div>
            </div>
          </center> 
    </div>
  </div>
  </div>
 
</body>
</html>