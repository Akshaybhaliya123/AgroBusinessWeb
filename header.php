<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    
    <style>
         body{
            margin:0px;
            padding:0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        
        #topbar{
            color: black;
            background-color: rgb(128, 193, 255);
            position: sticky;
            box-shadow: 0px 0px 0px green, inset -5px -5px 10px grey;
        }
        .topbar::before{
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: -1;
        }
    
        .left img{
            margin-left: 10px;
            margin-top:5px;
        }
        .mid{  
        
         margin: 10px;
         background-color: rgb(23, 253, 6);
         color: black;
         border: 2px solid white;
         box-shadow: 0px 0px 0px green, inset -5px -5px 10px green;
         border-radius: 50px;
         text-align: center;
         justify-content: center;
         font-weight: 700;
         
        }
        .mid h4{
            padding-top:2px;
            font-weight:700;
        }
        .right{
           padding: 0px;
           margin-top: 10px;
           float: right;
        }
        .right img{
            margin-top: 7px;
            margin-right: 30px;  
            margin-bottom:10px;
        } 
   
        .navbar{ 
            border:2px solid rgb(128, 193, 255);
            width: 100%;
            margin: 30px auto;
            background-color:  rgb(128, 193, 255);  
            position: sticky;
            box-shadow: 0px 0px 0px green, inset -5px -5px 10px grey;
           }
           .navbar::before{
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: -1;
            opacity: 0.6; 
            
        }
        .nav{
            margin-left: 20%;
        }
        .nav li{
            display:inline-block;
            list-style: none;
            margin: 7px;
            padding: 2px;
 
        }
        .nav li a{
            color:black;
            text-decoration: none;
            padding: 7px;
            font-size: 15px;
            font-weight: 600;
            
        }
        .nav li a:hover,.nav li a.active{
            text-decoration: none;
            color:black;
            background-color: white;
            border: 2px solid green;
            border-radius: 15px;
        }

        /*dropdown menu*/ 
        .dropbtn {
         background-color:  rgb(128, 193, 255); 
         color: white;
         padding: 16px;
         box-shadow: 0px 0px 0px green, inset -5px -5px 10px grey;
         font-size: 16px;
         border: none;
         border-bottom-right-radius:10px;
        }


     .dropdown {
     position: relative;
     display: inline-block;
     }
   .dropdown-content {
    display: none;
    position: absolute;
    background-color:  rgb(128, 193, 255); 
    text-align:center;
     width: 100vw;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    cursor:pointer;
    }
 .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size: 15px;
  font-weight: 600;
}
.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown:hover .dropbtn {
    background-color: rgb(23, 253, 6);
}
        @media screen and (max-width:900px){
            #navbar{
                display:none;
            }
        }
        @media screen and (min-width:900px){
            .dropdown{
                display:none;
            }
        }
    </style>
</head>
<body>
<div class="row" id="topbar">
   <div class="col-lg-4">
        <div class="left">
           <center><img src="img/companylogo2.png" width="170px"></center>   
        </div>
   </div>
   <div class="col-lg-4">
         <div class="mid">
             <h4>JIYA ECO-PRODUCTS LIMITED</h4>
         </div>
    </div>
            
    <div class="col-lg-4">
  <center> <div class="right">
              <a href="#"><img src="img/twitter-icone.png " height="20px" width="20px"></a>
              <a href="#"><img src="img/facebook.png" height="20px" width="20px"></a>
              <a href="#"><img src="img/instagram.png" height="20px" width="20px"></a>
              <a href="#"><img src="img/linkdin.png"height="20px" width="20px"></a>
           </div>
  </center>
    </div>
</div>
 <div class="navbar" id="navbar">
            <ul class="nav">
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li> <a href="product.php">PRODUCT</a></li>
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="careers.php">CAREERS</a></li>
            <li> <a href="news.php">NEWS</a></li>
            <li><a href="help.php">HELP CENTER</a></li>
            <li> <a href="contact.php">CONTACT US</a></li>
            <li> <a href="admin/index.php">LOGIN</a></li>
           </ul> 
</div>
<div class="dropdown">
  <button class="dropbtn"><img src="img/menu.png" width="20px"></button>
  <div class="dropdown-content">
          <a href="home.php">HOME</a>
          <a href="about.php">ABOUT US</a>
          <a href="product.php">PRODUCT</a>
          <a href="service.php">SERVICE</a>
          <a href="careers.php">CAREERS</a>
          <a href="news.php">NEWS</a>
          <a href="help.php">HELP CENTER</a>
          <a href="contact.php">CONTACT US</a>
          <a href="admin/index.php">LOGIN</a>
  </div>
</div>
</body>
</html>