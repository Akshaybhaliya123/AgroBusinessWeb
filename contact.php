<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            margin:0px;
            padding:0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        
        .home::before{
            content: "";
            position: absolute;
            background: url('img/back5.jpg') no-repeat center center/cover;
            height: 500px;
            border-bottom-left-radius: 30%;
            border-bottom-right-radius: 30%;
            width: 100%;
            box-shadow: 10px 10px 20px grey;
            z-index: -1;
            opacity: 3; 
            top: 0px;
            left: 0px;
            
        }
        .home{
            margin-bottom: 2%;
        }
        .up{
            position: fixed;
            bottom:60px;
            right: 0;
            opacity: 0.9;
          }
          .up img:hover{
            width: 57px;
          }
        .fixed{
            position: fixed;
            bottom: 0;
            right: 0;
            opacity: 0.8;
        }
        /*contact section.... */
       
        .contact{
            margin-top: 5%;
            margin-bottom:5%;
        }
         .logo{
            width: 85%;
            border: 2px solid rgb(151, 255, 125);
            border-radius: 15px;
            background-color: rgb(216, 255, 182);
            box-shadow: 0px 0px 0px grey,inset -10px -10px 20px grey;
            margin: 20px;
            z-index: 2;
            
         }
         .logo h3{
            margin-top: 5%;
         }
         .logo img{
            margin-top: -20px;
         }
         .inner1{
            
            width: 80%;
            border: 2px solid black;
            border-radius: 20px;
            background-color: white;
            margin-top: 7%;
            margin-bottom: 15%;
            margin-left: 10%;
            padding-top: 20px;
            padding-bottom: 10px;
            box-shadow: 10px 10px 20px grey;
            
         }
         .inner1:hover{
            background-color: rgb(220, 245, 255);
            box-shadow: none;
         }
         .inner1 a{
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            margin-top: 10px;
         }
         .inner2{
           
            width: 80%;
            border: 2px solid black;
            border-radius: 20px;
            margin-left: 12%;
            background-color: white;
            margin-top: 7%;
            margin-bottom: 10%;
            padding: 20px;
            padding-top:30px;
            box-shadow: 10px 10px 20px grey;
         }
         .inner2:hover{
            background-color: rgb(220, 245, 255);
            box-shadow: none;
         }
         .inner2 p{
            
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            justify-content: center;
            color: blue;
            margin-left: 0%;
         
         }
         .inner2 img{
            margin-left: 0%;
         }
         .inner3{
           
            width: 80%;
            border: 2px solid black;
            border-radius: 20px;
            margin-left: 10%;
            background-color: white;
            margin-top: 7%;
            margin-bottom: 10%;
            padding: 25px;
            box-shadow: 10px 10px 20px grey;
         }
         .inner3:hover{
            background-color: rgb(220, 245, 255);
            box-shadow: none;
         }
         
         .inner3 img{
            margin-top: 3%;
            margin-left: 7%;
            margin-bottom: 10%;
         }
         #add{
           text-align: center;
           justify-content: center;
           font-weight: 500;
           font-size: 12px;
           color: blue;
         }
        
         .contact-back{
             background: url('img/contact3.jpeg') no-repeat center center/cover;
            width: 100%;
            border-top-right-radius: 20%;
            border-bottom-left-radius:20%;
            margin-bottom: 3%;
            margin-top:30rem;
            
        }
         .contact-form{
            border: 2px solid black;
            background-color: white;
            border-radius: 20px;
            height: 500px;
            width: 30%;
            margin-top: 7%;
            margin-right: 10%;
            float: right;
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
        

         iframe{
            margin-bottom: 5%;
            margin-top: 3%;
            border-top-right-radius: 20%;
            border-bottom-left-radius:20%;
         }
         @media screen and (max-width:600px){
            .home h4{
                   text-shadow:none;
                   color:white;
             }
         }
         @media screen and (max-width:550px){
            .inner2 p{
                margin-left: 0%;
                margin-top: 2%;
            }
            .inner2 img{
                margin-left: 0%;
                margin-top: 2%;
            }
            .inner3 img{
                margin-left: 0px;
            }
         }
         @media screen and (max-width:1550px){
            .contact-back::before{
                top: 0;
            }
            iframe{
                margin-top: 5%;
            }
         }
         @media screen and (max-width:690px){
            .contact-form{
                height: auto;
                padding-bottom: 20px;
                float: none;
                width: 80%;
            }
            .home{
               margin-bottom:10%;
            }
            iframe{
                margin-top: 25%;
            }  
         }
         @media screen and (max-width:500px){
            .home::before{
               height:460px;
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
              $username=$_POST['username'];
              $Email = $_POST['Email'];
              $usermessage = $_POST['usermessage'];
              $query = "INSERT INTO contact (username,Email,usermessage) VALUES('$username','$Email','$usermessage')";
              $data = mysqli_query($conn,$query);
              if($data){
               echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>Success!</strong> Your notes has been inserted successfully..!!.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
              }
             else{
                 echo "failed to insert data:".mysqli_connect_error();
              }
             }

           ?>
    <?php
      include 'header.php'
     ?>
        <div class="home">
            <center><h1 style="font-weight:600; font-size:55px; margin-top:10%;text-shadow:5px 5px 10px white">CONTACT US</h1></center>
            <center><h4 style="margin-bottom:4%;font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white">We are here to help.....</h4></center><br><br><br>
        </div>
        <section class="contactsec">
         <div class="row">
            <div class="col-lg-4 contact" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="logo">
                   <center> <img src="img/logo1.png" height="50px" width="50px"></center>
                <center> <h3 style="font-weight:600">Call us on this contact....</h3></center>
                    <div class="inner1">
                <center> <img src="img/calllogo.png" width="40px" style="margin-top:2%">
                    <a href="tel:9664806629" target="_blank">Mo: 9879219898 </a><br>
                    <img src="img/calllogo.png" width="40px" style="margin-top:2%">
                     <a href="tel:9377427987" target="_blank">Mo:9726466466</a><br>
                     <img src="img/calllogo.png" width="40px" style="margin-top:2%">
                    <a href="tel:6356125013" target="_blank">Mo:9377427987</a><br></center>
             </div>
                </div>
            </div>
            <div class="col-lg-4 contact" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="logo">
                    <center><img src="img/logo2.png" height="50px" width="60px"></center>
                <center>  <h3 style="font-weight:600">If any Query, Mail on this....</h3></center>
                <div class="inner2">
                <center> <img src="img/maillogo.png" width="30px"><br>
                   <p>Mail:info@jiyaeco.com</p><br>
                      <img src="img/maillogo.png" width="30px"> <br>
                    <p>Mail:jiyacustomercare@gmail.com</p></center><br>
                
                </div>
                </div>
            </div>
            <div class="col-lg-4 contact" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                 <div class="logo">
                    <center><img src="img/logo3.png" height="50px" width="60px"></center>
                    <center><h3 style="font-weight:600">Visit Our Company....</h3></center>
                    <div class="inner3">
                      <a href="#"><img src="img/companylogo2.png" width="180px"></a>
                        <p id="add">The registered office of Jiya Eco-Products Limited is at SURVEY NO. 202/2/1, NAVAGAM (G), TALUKA VALLABHIPUR, BHAVNAGAR</p>
                    </div>
                </div>
            </div><br>
            <!-- map and form.... -->
           
            <div class="row ">
           
            <div class="col-lg-12 contact-back">
         <center>   <div class="contact-form" data-aos="fade-left"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
      
                <div class="top">
                    <center><h2>Get In Touch</h2></center><br>
                    <center><a href="#"><img src="img/twitter-icone.png " height="30px" width="30px"></a>
                    <a href="#"><img src="img/facebook.png" height="30px" width="30px"></a>
                    <a href="#"><img src="img/instagram.png" height="30px" width="30px"></a></center>
                </div><br>
                <form action="contact.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" id="text" name="username" aria-describedby="text" placeholder="Your Name...">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="Email" id="exampleInputPassword1" placeholder="Your Email...">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" cols="80" class="form-control" name="usermessage" placeholder="Enter your message"></textarea>
                      </div>
                   
                  <center>  <button type="submit" name="data" class="btn btn-primary">SEND</button></center>
                  </form></center>
            </div>
        </div>
        </div>
        <div class="row">
           <div class="col-lg-12">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14774.105576600063!2d71.89872040493897!3d21.95841182682956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958b40cce0080b7%3A0x78c98256c62698a9!2sJiya%20Eco%20Products%20Ltd.!5e0!3m2!1sen!2sin!4v1707306422425!5m2!1sen!2sin" width="100%" height="620px"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div> 
           </div>
        </div>
</section>
<!-- footer section -->
<?php
  include 'footer.php'
  ?>
<div class="up">
    <a href="#navbar"><img src="img/up.png" id="top" width="40px"></a>
  </div>
    <div class="fixed">
        <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">
        <img src="img/wp1.png" width="40px"></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>
</html>