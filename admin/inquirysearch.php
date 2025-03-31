<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INQUIRY DATA</title>
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
     #righthr{
      margin-bottom:2%;
     }
      
     .acc{
      margin-top:4%;
     }
     .rightside h3{
        font-weight:700;
        padding-top:5%;
     }
      /*search bar */
      .searchgroup{
        margin-bottom:3%;
        float:right;
        margin-right:70px;
      }
      #search{
        padding:3px;
        border:2px solid black;
        margin-right:3px;
        font-weight:600;
        border-radius:5px;
      }
      .searchbtn{
        margin-top:1px;
        padding:3px;
        background-color:green;
        color:white;
       font-weight:600;
       border-radius:5px;
      }
      .fa-search{
        padding-left:5px;
        padding-right:5px;
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
     /*edit delete button*/
     .databtn{
      background-color:green;
      color:white;
     } 
     .databtn a{
      text-decoration:none;
      color:white;
      font-weight:600;
     }
     .databtn:hover{
      background-color:blue;
      border:3px solid black;
      color:white;
     }
    </style>
</head>
<body>
  <div class="row">
    <div class="col-lg-2 leftside">
      <center><img src="../img/companylogo2.png" width="180px"></center>
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
    <div class="col-lg-10 rightside">
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
      <center>  <h3>INQUIRY DATABASE</h3><center>
        <hr id="righthr">
        <form action="search.php" method="GET">
              <div class="searchgroup">
                    <input type="text" id="search" name="search" placeholder="Search here....">
                    <button type="submit" name="searchbtn" class="searchbtn">Search<i class="fa fa-search" style="font-size:21px"></i></button>
                  </div> </form>
        <table class="table" border="4" style="width:90%">
  <thead>
    <tr>
      <th scope="col">Name</th>  
      <th scope="col">Mobile</th>                                         
      <th scope="col">Email</th>
      <th scope="col">Your Message</th>
      <th scope="col">DateandTime</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php
include '../connection.php'
?>
<?php

$search = $_GET['search'];
$query = "SELECT * FROM inquiry WHERE yourname='$search'";
$data = mysqli_query($conn,$query);
while($res= mysqli_fetch_assoc($data)){
    echo "
    <tr>                                      
    <td>".$res['yourname']."</td>
    <td>".$res['Mobile']."</td>
    <td>".$res['Email']."</td>
    <td>".$res['yourmessage']."</td>
    <td>".$res['DateandTime']."</td>
    <td>".$res['Statuss']."</td>
    <td><button class='databtn'><a href='editInquiry.php?edi=".$res['sno']."'>EDIT</a></button></td>
    <td><button onclick='return confirm(\"Are You sure you want to delete this data ??\")' class='databtn'><a href='deleteinquiry.php?del=".$res['sno']."'>DELETE</a></button></td>
    </tr>
    ";
}
 
?>
</table>
    </div>
  </div>
</body>
</html>