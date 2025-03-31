<?php
include '../connection.php';
?>
<?php

  $id = $_GET['edi'];
  $query = "SELECT * FROM servicedata WHERE id=$id";
  $data = mysqli_query($conn, $query);
  $res = mysqli_fetch_assoc($data);
  $userName = $res['userName'];
  $ServiceType = $res['ServiceType'];
  $Email = $res['Email'];
  $Contact = $res['Contact'];
  $Addres = $res['Addres'];
  $City = $res['City'];
  $Remark = $res['Remark'];
   ?>

<?php
          if(isset($_POST['update'])){
                  $myname = $_POST['myname'];                                    
                  $myservice = $_POST['myservice'];
                 $myemail = $_POST['myemail'];
                 $myphone = $_POST['myphone'];
                 $myaddress = $_POST['myaddress'];
                 $mycity = $_POST['mycity'];
                 $myremark = $_POST['myremark'];
                 $mystatus = $_POST['mystatus'];
                
    $query = "UPDATE servicedata SET userName='$myname', ServiceType='$myservice',Email ='$myemail', Contact='$myphone',  Addres='$myaddress', City='$mycity', Remark='$myremark', Statuss='$mystatus' WHERE id=$id";
    $data = mysqli_query($conn, $query);
    if($data){
     
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your data has been Updated successfully..!!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else{
        echo "Data not updated";
    }
    header("Location: servicedata.php");
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
     /* Edit service section */
     .downpart::before{
        content: "";
        position: absolute;
        background: url('../img/serviceform.jpeg') no-repeat center center/cover;
        height:127% ;
        width: 100%;
        z-index: -1;
        opacity: 3; 
        top: 0px;
        left: 0px;
        
    }
    .serveformdata{
        width:100%; 
    
    }
    .serveformdata h1{
        padding-top:3%;
        margin-bottom:3%;
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
        margin-bottom: 5%;
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
                     <p>Ghanshyam Dass</p>  </center>
         </div>
         <div class="dash">
            <ul>
              <center><li><a href="dashboard.php">DASHBOARD</a></li>
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
        <div class="downpart"><center>
        <div class="serviceform">
            <div class="serveformdata">
                <h1>UPDATE SERVICE </h1>
            <form action="editservice.php?edi=<?php echo $id ?>" method="POST">
    
                  <div class="form-group">
                    <input type="text" class="form-control" id="Yourname" name="myname" value="<?php echo $userName ?>" placeholder="Your Name" required>
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" id="servicetype" name="myservice" value="<?php echo $ServiceType ?>" placeholder="Service Type" required>
                  </div> 
                  <div class="form-group group1 group2">
                    <input type="email" class="form-control" id="email"name="myemail" value="<?php echo $Email ?>" placeholder="Email id" required>
                  </div>
                  <div class="form-group group1">
                  <input type="number" id="phone" class="form-control" name="myphone" value="<?php echo $Contact ?>" placeholder="Contact No" required>
                  </div>    
                  <div class="form-group">
                  <textarea  placeholder="Address" class="form-control" name="myaddress" value="<?php echo $Addres ?>" row="3" required></textarea>
                  </div>  
                  <div class="form-group">
                   <input type="text"  placeholder="City" class="form-control" name="mycity" value="<?php echo $City ?>" row="3" required>
                  </div>  
                  <div class="form-group">
                   <textarea  placeholder="Remark" class="form-control" name="myremark" value="<?php echo $Remark?>" row="3" required></textarea>
                  </div>  
                  <div class="form-group">
                   <input type="text"  placeholder="Status" class="form-control" name="mystatus" row="3">
                  </div>
                  <div class="form-group">
                    <center><button type="submit" name="update" id="servicebtn">Submit</button></center>
                  </div>
               </form> 
    
            </div>
        </div></center>
        </div>
   </div>
 </div>                        
</body>
</html>