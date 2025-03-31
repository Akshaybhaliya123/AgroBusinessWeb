<?php
include '../connection.php'
?>
    <?php
 
  $id = $_GET['edi'];
  $query = "SELECT * FROM careerdata WHERE id=$id";
  $data = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($data);
  $name = $row['Nam'];                                     
  $Address = $row['Addres'];
  $Qualification = $row['Qualification'];
  $dob = $row['DoB'];
  $mobile = $row['Mobile'];
  $email = $row['Email'];
  $Workexp = $row['Exp'];
  $Skills = $row['Skill'];
  $Apply = $row['Applyfor'];
  $Jobtime = $row['JobTime'];
   ?>
     <?php
          if(isset($_POST['update'])){
                  $na = $_POST['na'];                                    
                  $Addr = $_POST['Addr'];
                 $Quali = $_POST['Qualifi'];
                 $doB = $_POST['doB'];
                 $mobil = $_POST['Mobil'];
                 $emai = $_POST['emai'];
                $Work = $_POST['work'];
                $Skill = $_POST['Skill'];
                $apply = $_POST['apply'];
                 $Jobtimes = $_POST['Jobtimes'];
                 $Statuss = $_POST['status'];
    $query = "UPDATE careerdata SET Nam='$na', Addres='$Addr', Qualification='$Quali', DoB ='$doB', Mobile='$mobil', Email='$emai',Exp='$Work',Skill='$Skill', Applyfor='$apply', JobTime='$Jobtimes', Statuss='$Statuss' WHERE id=$id";
    $data = mysqli_query($conn, $query);
    if($data){
      header("Location: careerdata.php");
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
     /*careerform form */
     .apply{
        background-color: rgb(232,255,232);
       }
       .formbody{
        border: 2px solid black;
        align-items: center;
        background-color: rgb(232, 232, 232);
        margin: 10px;
        padding: 10px;
        margin-top: 4%;
        margin-bottom: 4%;
       }
       .title{
        margin-top: 5%;
        margin-bottom: 5%;
       }
       .title h1{
        font-weight: 600;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border: 2px solid black;
        padding: 10px;
        width: 80%;
        background-color: white;
        box-shadow: 10px 10px 20px green;
       }
      .form{
        display: flex;
        flex-wrap: wrap;
      }
       .input-class{
        border: 2px solid black;
        background-color: greenyellow;
        box-shadow: 5px 5px 10px green;
        border-radius: 20px;
        margin-bottom: 20px;
        padding: 10px;
       }
       .statusclass{
        width:30%;
       }
       .form1{
        width: 80%;
        margin-bottom: 5%;
        margin-left:29%;
        
       }
       .form2{
        width: 80%;
        margin-bottom: 5%;
        margin-left:29%;
       }
       .name{
        border-top: 0;
        border-bottom: 0;
        border-right:0;
        font-size: 20px;
        width: auto;
       }
       .icon1{
        font-size: 15px;
        margin-right: 20px;
       }
       .icon2{
        font-size: 15px;
        margin-right: 20px;
       }
       select{
        padding:4px;
       }
       .btnn{
         font-size: 25px;
         font-weight: 800;
         margin-bottom: 20px;
         color: black;
         border-radius: 10px;
         background-color:greenyellow;
         box-shadow: 5px 5px 10px green;
       }
       .btnn:hover{
         font-size: 25px;
         font-weight: 800;
         margin-bottom: 20px;
         color: white;
         background-color:skyblue;
         border-radius: 10px;
         box-shadow: 5px 5px 10px green;
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
    <form action="editcareer.php?edi=<?php echo $id ?>" method="POST">
    <div class="row apply">
      <center> <div class="formbody">
            <div class="title"><h1>Job Application Form</h1></div>
            <div class="form">
            <div class="col-lg-5">
             <div class="form1">
            <div class="input-class">
                <span class="glyphicon glyphicon-user icon1"></span>
                <input type="text" name="na" class="name" placeholder="Name*" value="<?php echo $name ?>">
            </div>
            <div class="input-class">
                <img src="../img/addressicon.png"  width="20px" class="icon1">
                <input type="text" name="Addr" class="name" placeholder="Address*" value="<?php echo $Address ?>">
            </div>
            <div class="input-class">
                <span class="glyphicon glyphicon-calendar icon1"></span>
                <input type="text" name="doB" class="name" placeholder="YYYY-MM-DD*" value="<?php echo $dob ?>">
            </div>
            <div class="input-class">
                <span class="glyphicon glyphicon-phone icon1"></span>
                <input type="mobile" name="Mobil" class="name" placeholder="Mobile No*" value="<?php echo $mobile ?>">
            </div>
            <div class="input-class">
                <span class="glyphicon glyphicon-envelope icon1"></span>
                <input type="email" name="emai" class="name" placeholder="Email*" value="<?php echo  $email ?>">
            </div>
            </div>
            </div>
            <!-- form section 2 -->
            <div class="col-lg-5">
                <div class="form2">
                <div class="input-class">
                    <span class="glyphicon glyphicon-education icon2"></span>
                    <input type="text" name="Qualifi" class="name" placeholder="Qualification*" value="<?php echo $Qualification ?>">
                </div>
                <div class="input-class">
                    <span class="glyphicon glyphicon-list-alt icon2"></span>
                    <input type="text" name="work" class="name" placeholder="Work Experience*" value="<?php echo $Workexp ?>">
                </div>
                <div class="input-class">
                    <img src="../img/skill.png"  width="20px" class="icon2">
                    <input type="textarea" rows="5" name="Skill" class="name" placeholder="Skills*" value="<?php echo  $Skills ?>">
                </div>
                <div class="input-class">
                    <span class="glyphicon glyphicon-briefcase icon2"></span>
                    <input type="text" name="apply" class="name" placeholder="Apply For*" value="<?php echo $Apply ?>">
                </div>
                <div class="input-class">
                    <span class="glyphicon glyphicon-dashboard icon2"></span>
                    <select name="Jobtimes" class="name" value="<?php echo $Jobtime ?>">
                      <option>8:00AM TO 4:00PM</option>
                      <option>4:00PM TO 12:00AM</option>
                      <option>12:00AM TO 8:00AM</option>
                    </select>
                </div>     
                </div>
            </div>
        </div>
             <div class="input-class statusclass">
                <input type="text" name="status" class="name" placeholder="Status">
            </div>
             <button type="submit" name="update" class="btnn">Edit Now</button>
            </div></center>
           
         </div>
         </form> 
    </div>

  </div>
  </div>
 
</body>
</html>