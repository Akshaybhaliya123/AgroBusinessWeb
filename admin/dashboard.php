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
     .dashbox{
      margin:20px;
      border:2px solid black;
      padding:20px;
      border-radius:20px;
      background-color:green;
      color:white;
      box-shadow:10px 10px 20px grey;
      cursor:pointer;
     }
     .dashbox:hover{
      margin:20px;
      border:2px solid black;
      padding:20px;
      border-radius:20px;
      background-color:skyblue;
      color:white;
      box-shadow:10px 10px 20px grey;
      cursor:pointer;
     }

     .dashbox img{
      border-radius:50%;

     }
    .dashcol{
      margin-top:4%;
    }
    .title{
      margin-top:5%;
      font-family: 'Bungee Spice';
      padding-bottom:3px;
      font-size:35px;
    }
    .dashrow{
      margin-left:17%;
    }
   #d-service{
      padding-bottom:7px;
   }
   .d-contact{
      padding-top:15px;
   }
   .d-pro{
      padding-top:10px;
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
          <div class="downpart">
           <center> <h3 class="title">DASHBOARD</h3><hr></center>
            <div class="row dashrow">
                <div class="col-lg-3 dashcol">
                  <a href="inquirydata.php">
                  <div class="dashbox">
                <center>  <img src="../img/dashproduct1.jpeg" width="90px">
                  <h4 class="d-pro">INQUIRY</h4></center>
                  </div></a>
                </div>
                <div class="col-lg-3 dashcol">
                <a href="servicedata.php">
                <div class="dashbox">
                <center>  <img src="../img/dashservice.jpeg" width="100px">
                  <h4 id="d-service" class="d-pro">SERVICE</h4></center>
                  </div></a>
                </div>
                <div class="col-lg-3 dashcol">
                <a href="careerdata.php">
                <div class="dashbox">
               <center>   <img src="../img/dashcareers1.jpeg" width="90px">
                  <h4 class="d-pro">CAREERS</h4></center>
                  </div></a>
                </div>
            </div>
            <div class="row dashrow">
                <div class="col-lg-3 dashcol">
                <a href="footerdata.php">
                <div class="dashbox">
                 <center> <img src="../img/dashupdate.jpeg" width="90px">
                  <h4 class="d-contact">UPDATE</h4></center>
                  </div></a>
                </div>
                <div class="col-lg-3 dashcol">
                <a href="contactdata.php">
                <div class="dashbox">
               <center>   <img src="../img/dashcontact.jpeg" width="90px">
                  <h4 class="d-contact">CONTACT</h4></center>
                  </div></a>
                </div>
                <div class="col-lg-3 dashcol">
                <a href="../policy.php">
                <div class="dashbox">
                <center>  <img src="../img/dashpolicy.jpeg" width="90px">
                  <h4 class="d-contact">POLICY</h4></center>
                  </div></a>
                </div>
            </div>
           
          </div>
   </div>
</div>
</body>
</html>