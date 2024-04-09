<?php
include 'connection.php'
?>
<?php

 if(isset($_POST['data'])){
    $email = $_POST['Email'];
  
    $query = "INSERT INTO footer (Email) VALUES('$email')";
    $data = mysqli_query($conn,$query);
    if($data){
        header('Location:home.php');
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
     #footer{
            background-color:  rgb(128, 193, 255);
            padding: 10px;
        }
        .footerclass h3{
            font-weight: 700;
            font-size: 25px;
            font-family:'ADLaM Display';
        }
        .foo1 img{
            margin-top: 50px;
            background-color: white;
            border-radius: 20px;
            margin-bottom: 30px;
        }
        .foo1 h4{
            font-size: 19px;
            font-weight: 800;
            text-align: justify;
            width: 80%;
            margin-left: 40px;
            font-family:'ADLaM Display';
        }
        .foo1 a{
            font-size:20px;
            text-decoration:none;
            color:black;
        }
        .roadmapsec{
            margin-left:17%;
        }
        .roadmapsec a{
             margin-left:10%;
            font-family:'ADLaM Display';
            text-align:center;
            font-size: 15px;
            color:white;
            padding:5px;
           
        }
        
        .foo2{
            border: 1px solid black;
            border-top: none;
            border-bottom: none;
            border-right: none;
            margin-top: 20px;
            padding-bottom:5px;
            text-align: center;
        }
        .foo2 h5{
            font-size: 15px;
            font-weight: 500;
            padding-left:5px;
        }
        .foo3{
            border: 1px solid black;
            border-top: none;
            border-bottom: none;
            border-right: none;
            margin-top: 22px;
            padding-bottom:4rem;
            text-align: center;
        }
        .link{
            margin-top: 40px;
            font-family:'ADLaM Display';
            
        }
       
        .link ul{
            text-align: center;
            list-style: none;
        }
        .link li{
            margin-bottom: 14px;
            padding:3px;
        }
        .link li a{
            font-size: 14px;
            list-style: none;
            text-decoration: none;
            color: black;
            font-weight: 400;
            
        }
        .link li a:hover{
            color: white;
            list-style: lower-greek;
        }
        .foo4{
            border: 1px solid black;
            border-top: none;
            border-bottom: none;
            border-right: none;
            margin-top: 20px;
            padding-bottom:8rem;
            text-align: center;   
        }
        .foo4a{
            margin-top: 70px;
            padding-bottom: 200px;
            margin-left:10px;
        }
        .foo4a a{
            margin-right: 20px;
        }
        .get{
            margin-top: -150px;
            padding-bottom: 5px;
            margin-left:10px;
        }
        .get p{
            padding:10px;
            font-size:18px;
            font-family:'ADLaM Display';
            
        }
        #get1{
            border: 2px solid black;
            padding: 7px;
            border-radius: 10px;
            margin-right: 10px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom:10px;
        }
    
        #get2{
            border: 2px solid black;
            color: white;
            background-color: green;
            border-radius: 10px;
            padding: 7px;
            font-size: 14px;
            width: 20%;
        }
        .copyrights{
            color: white;
            background-color: rgb(93, 93, 93);
            padding: 5px;
        }
        .copyrights p{
           font-size: 15px;
           font-weight: 400;
           margin-top:5px;
           font-family: cursive;
           text-align: center;
           justify-content: center;  
          
        }
        @media screen and (max-width:991px){
            .foo2{
                border:none;
            }
            .foo3{
                border:none;
            }
            .foo4{
                border:none;
            }
        }
        @media screen and (max-width:550px){
            .roadmapsec{
                margin-left:20%;
                margin-bottom:10%;
            }
            .roadmapsec a{
                font-size:18px;
            }
        }
    
    </style>
</head>
<body>

<section id="footer">
    <div class="row footerclass">
        <div class="col-lg-3">
            <div class="foo1">
            <center><img src="img/companylogo2.png" width="200px"></center>
            <h4>"Sowing Innovation, Growing Prosperity. Rooted in Excellence, Nurturing the Future."</h4><br>
            <div class="roadmapsec">
                
           <u> <a href="roadmap.php">RoadMap</a></u><br>
           <u> <a href="policy.php">Privacy and Policy</a></u><br>
           <u> <a href="term.php">Terms and Conditions</a></u><br>
           <u> <a href="security.php">Security</a></u>
            </div>
        </div>
        </div>
        <div class="col-lg-3">
            <div class="foo2">
            <h3>CONTACT</h3>
            <div class="link">
            <img src="img/maplogo.png" style="margin-top:2%;margin-bottom:2%" width="20px">
            <h5>Jiya Eco-Products Limited is at SURVEY NO. 202/2/1, NAVAGAM (G), TALUKA VALLABHIPUR, BHAVNAGAR</h5>
            <img src="img/maillogo.png" style="margin-top:2%; margin-bottom:2%" width="30px">
            <h5>jiyacustomercare@gmail.com</h5>
            <img src="img/calllogo.png" width="40px" style="margin-top:2%; margin-bottom:2%">
            <h5 style="padding-bottom:30px"><a href="tel:9664806629" target="_blank" style="text-decoration:none;color:black;">Call:9664806629</a></h5>
        </div>
        </div>
        </div>
        <div class="col-lg-3">
            <div class="foo3">
                <h3>QUICK LINKS</h3>
                <div class="link ">
                    <ul>
                    <li><a href="about.php">ABOUT US</a></li>
                   <li> <a href="product.php">PRODUCT</a></li>
                   <li><a href="service.php">SERVICE</a></li>
                   <li><a href="careers.php">CAREERS</a></li>
                   <li> <a href="news.php">NEWS</a></li>
                   <li><a href="help.php">HELP CENTER</a></li>
                   <li> <a href="contact.php">CONTACT US</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
           <div class="foo4">
            <h3>GET IN TOUCH</h3>
            <div class="foo4a">
            <a href="#"><img src="img/twitter-icone.png " width="30px"></a>
            <a href="#"><img src="img/facebook.png"  width="30px"></a>
            <a href="#"><img src="img/instagram.png"  width="30px"></a>
           <a href="#"><img src="img/linkdin.png"  width="30px"></a>
        </div>
        <div class="get">
            <p>Sign up for new product notification from us...</p>
            <form action="footer.php" method="post">
            <input type="email" name="Email" id="get1" placeholder="Enter email to give updates..">
            <button type="submit" name="data" id="get2">Send</button>
            </form>
            </div>
           </div> 
        </div>
    </div>

</section>
<div class="copyrights">
    <p>&copy; Copyright 2024 by Jiya Eco-Products Ltd.</p>
</div>
</body>
</html>