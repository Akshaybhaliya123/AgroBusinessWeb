<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            margin:0px;
            padding:0px;
            background-color: rgb(235, 255, 235);
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        
        .home::before{
            content: "";
            position: absolute;
            background: url('img/back5.jpg') no-repeat center center/cover;
            height:500px;
            width: 100%;
            z-index: -1;
            border-bottom-left-radius: 30%;
            border-bottom-right-radius: 30%;
            opacity: 3; 
            top: 0px;
            box-shadow: 10px 10px 20px grey;
            left: 0px;
            
        }
        .home{
            margin-bottom: 2%;
        }
        /* help section....*/
    
         .update{
          
            margin-top: 3%;
            color: blue;
            margin-bottom: 10%;
            width: 40%;
            background-color: white;
            box-shadow: 10px 10px 20px grey;
           
         }
         .update p{
            font-size: 17px;
            text-align: center;
            justify-content: center;
            font-weight: 400;
         }
         .help1{
          
            width: 85%;
            background-color: rgb(255, 255, 255);
            box-shadow: 0px 0px 0px grey, inset -10px -10px 20px grey;
            padding-bottom: 20px;
            margin-bottom: 10%;
         }
         .help1:hover{
            border-bottom:10px solid green;
            border-right:10px solid green;
            background-color:rgb(179,244,255);
         }
         .part1 img{
            margin-top: 20px;
         }
         .part2{
            padding: 10px;
            margin: 10px;
         }
         .part2 h3{
            text-align: center;
            justify-content: center;
            font-weight: 600;
            font-family:'ADLaM Display';
            margin-bottom: 25px;
         }
         .part2 p{
            text-align: justify;
            font-size: 12px;
            color: darkblue;
         }
         .inner{
            text-align: center;
            border: 2px solid black;
            border-radius: 20px;
            box-shadow: 10px 10px 0px green;
            margin: 10px;
            padding: 10px;
         }
         .inner a{
            font-size:12px;
         }
         .inner1{
            margin-bottom: 10%;
            margin-top:13%;
         }
         .inner2{
            margin-bottom: 10%;
            margin-top:13%;
         }
         .inner4{
            margin-bottom:10%;
            margin-top:13%;
         }
         
        /*gallery section*/
        .gallery{
            margin-top: 5%;
            height: 300px;
            width: 100%;
            padding: 20px;
            background-color: white;
            margin-bottom: 3%;
        }
      
        @media screen and (max-width:480px){
            .inner img{
                margin-left: 40%;
            }
            .call{
                margin-left: 25%;
            }
        }
        @media screen  and (max-width:988px){
            .update{
                width: 80%;
            }
        }
        @media screen and (max-width:930px){
            .help1{
                margin-left: 8%;
            }
        }
        @media screen and (max-width:600px){
            .home h4{
                   text-shadow:none;
                   color:white;
             }
         }
       @media screen and (max-width:650px){
        .home{
            margin-bottom:15%;
        }
       }
       @media screen and (max-width:480px){
         .inner img{
            margin-left:0px;
         }
         .inner a{
            margin-left:0px;
         }
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
    </style>
</head>
<body>
    
      <?php
        include 'header.php'
      ?>
        <div class="home">
            <center><h1 style="font-weight:600; font-size:55px; margin-top:10%;text-shadow:5px 5px 10px white">HELP CENTER</h1></center>
            <center><h4 style="margin-bottom:4%;font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white">We are here to help....</h4></center><br><br><br>
        </div>
        <section class="helpcenter">
        <div class="row help">
            <div class="col-lg-12">
           <center>     <div class="update">
                    <marquee width="100%" direction="up"> 
                        <p>What are the system requirements for using this service/platform?</p>
                        <p>Can you provide step-by-step instructions for common tasks or processes?</p>
                        <p>What should I do if I encounter an error message?</p>
                        <p>Is there a user guide or manual available for download?</p>
                        <p>Are there any known issues or service disruptions currently being addressed?</p>
                        <p>What is the process for submitting feedback or suggestions about the service?</p>
                        <p>Is there a glossary or FAQ section to explain common terms and terminology used in the service?</p>
                        <p>What are the system requirements for using this service/platform?</p>
                        <p>Can you provide step-by-step instructions for common tasks or processes?</p>
                        <p>What should I do if I encounter an error message?</p>
                       
                      </marquee> 
                </div></center>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                  <div class="help1 help11">
                         <div class="part1">
                           <center> <img src="img/helplogo1.png" height="60px" width="60px"></center>
                          </div>
                          <div class="part2">
                            <h3>SELLS HELP</h3>
                            <p>"Sellers help offers guidance and support for optimizing the selling experience, product listings, and marketplace queries."
                            </p>
                            <div class="inner inner1">
                                <img src="img/calllogo.png" width="50px"><br>
                                <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                                <img src="img/maillogo.png" width="40px"><br>
                                <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                                <img src="img/wp1.png"  width="40px"><br>
                                <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a><br>
                            </div>
                          </div>
                  </div>
            </div>
            <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="help1 help12">
                    <div class="part1">
                        <center> <img src="img/helplogo2.png" height="60px" width="60px"></center>
                        </div>
                        <div class="part2">
                            <h3>SERVICE HELP</h3>
                            <p>"Service help optimizes the overall experience, offering support for account management and troubleshooting."
                            </p>
                            <div class="inner inner2">
                                <img src="img/calllogo.png" width="50px"><br>
                                <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                                <img src="img/maillogo.png" width="40px"><br>
                                <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                                <img src="img/wp1.png"  width="40px"><br>
                                <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a>    
                            </div>
                        </div> 
                 </div>
            </div>
            <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="help1 help13">
                    <div class="part1">
                        <center>  <img src="img/helplogo3.png" height="60px" width="60px"></center>
                        </div>
                        <div class="part2">
                            <h3>INSTALLATION SUPPORT</h3>
                            <p>
                                "Installation help ensures a seamless experience with step-by-step guidance and troubleshooting for successful installations."</p>
                            <div class="inner inner3" style="margin-bottom:10%">
                                <img src="img/calllogo.png" width="50px"><br>
                                <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                                <img src="img/maillogo.png" width="40px"><br>
                                <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                                <img src="img/wp1.png"  width="40px"><br>
                                <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a>    
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="help1 help14">
                    <div class="part1">
                        <center>  <img src="img/helplogo3.png" height="60px" width="60px"></center>
                        </div>
                        <div class="part2">
                            <h3>CAREERS SUPPORT</h3>
                            <p>"Careers help optimizes the experience, offering support for shipping, tracking, and account management."</p>
                            <div class="inner inner4"  style="margin-bottom:10%">
                                <img src="img/calllogo.png" width="50px"><br>
                                <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                                <img src="img/maillogo.png" width="40px"><br>
                                <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                                <img src="img/wp1.png"  width="40px"><br>
                                <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a>    
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="gallery">
  <marquee> <img src="img/gallary1.jpg" height="270px">
            <img src="img/galary2.jpeg" height="270px">
            <img src="img/galary3.jpeg" height="270px">
            <img src="img/galary4.jpeg" height="270px">
            <img src="img/galary5.jpeg" height="270px">
            <img src="img/galary6.jpeg" height="270px">
            <img src="img/galary7.jpeg" height="270px">
            <img src="img/gallary1.jpg" height="270px">
            <img src="img/galary2.jpeg" height="270px">
            <img src="img/galary3.jpeg" height="270px">
            <img src="img/galary4.jpeg" height="270px">
            <img src="img/galary5.jpeg" height="270px">
            <img src="img/galary6.jpeg" height="270px">
            <img src="img/galary7.jpeg" height="270px">
 </marquee>
        </div>
    </section>
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