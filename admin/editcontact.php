
<?php
include '../connection.php'
?>
    <?php
 
  $id = $_GET['edi'];
  $query = "SELECT * FROM contact WHERE id=$id";
  $data = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($data);
  $name = $row['username'];                                     
  $email = $row['Email'];
  $message = $row['usermessage'];
   ?>
     <?php
          if(isset($_POST['update'])){
                  $username = $_POST['uname'];                                    
                 $Email = $_POST['uemail'];
                 $Status = $_POST['statuss'];
                 $usermessage = $_POST['umessage'];
    $query = "UPDATE contact SET username='$username', Email='$Email', Statuss='$Status', usermessage='$usermessage' WHERE id=$id";
    $data = mysqli_query($conn, $query);
    if($data){
      header("Location: contactdata.php");
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your data has been Updated successfully..!!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else{
        echo "Data not updated";
    }
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
     /*contact form part*/
     .downpart{
             background: url('../img/contact3.jpeg') no-repeat center center/cover;
            width: 101%;
            margin-bottom: 3%;
            margin-left:-12px;
            padding-top:2%;
            padding-bottom:7%;
            
        }
         .contact-form{
            border: 2px solid black;
            background-color: white;
            border-radius: 20px;
            
            width: 30%;
            margin-top: 7%;
            margin-right: 0%;
            box-shadow: 0px 0px 0px grey, inset -10px -10px 20px grey;
            margin-bottom: 5%;
            
         }
         .top{
            border: 2px solid black;
            background-color: rgb(255, 196, 86);
            border-radius: 20px;
            color: black;
            margin: 20px;
            padding: 10px;
         }
         .top h2{
            font-family:'ADLaM Display';
            font-size: 20px;
         }
         .bottom{
            padding: 20px;
            margin: 5px;
         }
         .form-group{
            padding:10px;
            margin: 10px;
         }
        
         textarea{
            border-radius: 10px;
         }
         .btn{
            width:30%;
            margin-top: 5%;
            font-size: 20px;
            margin-bottom:20px;
         }
         .btn:hover{
            color: white;
            background-color: green;
            box-shadow: 5px 5px 10px grey;
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
     <center>   
      <div class="contact-form">
      <div class="top">
          <center><h2>Get In Touch</h2></center><br>
          <center><a href="#"><img src="../img/twitter-icone.png " height="30px" width="30px"></a>
          <a href="#"><img src="../img/facebook.png" height="30px" width="30px"></a>
          <a href="#"><img src="../img/instagram.png" height="30px" width="30px"></a></center>
      </div><br>
      <form action="editcontact.php?edi=<?php echo $id ?>" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" id="text" name="uname" aria-describedby="text" placeholder="Your Name..." value="<?php echo $name ?>">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="uemail" id="exampleInputPassword1" placeholder="Your Email..." value="<?php echo $email ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="statuss" id="exampleInputText" placeholder="Status..." >
          </div>
          <div class="form-group">
              <textarea rows="2" cols="80" class="form-control" name="umessage" placeholder="Enter your message" value="<?php echo $message ?>"></textarea>
            </div>
         
        <center>  <button type="submit" name="update" class="btn btn-primary">SEND</button></center>
        </form></center>
  </div>
     </div>
    </div>
  </div>
</body>
</html>