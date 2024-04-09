<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrier Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    
    <link rel="stylesheet" href="style.css">
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
            width: 100%;
            box-shadow: 10px 10px 20px grey;
            z-index: -1;
            border-bottom-left-radius: 30%;
            border-bottom-right-radius: 30%;
            opacity: 3; 
            top: 0px;
            left: 0px;
        }
        .home{
            margin-bottom: 2%;
        }
        /*carrier section*/
        .intro p{
            text-align: justify;
            justify-content: center;
            width:80%;
            font-family: 'Croissant One';
            font-size: 25px;
            padding-bottom:5%;
            font-weight: 600;
            margin-top: 8%;
        }    
        .carrierbody{
            background-color: rgb(232, 255, 232);
        }
        .cari{
            padding-top: 40px;
        }
        .cari1{
            margin-left: 40px;
        }
        .cari1 img{
           border:1px solid white;
           padding: 30px;
           background-color:black;
        }
        .cari2{
            background-color: black;
            text-align: center;
            justify-content: center;
            width: 80%;
            padding:30px;
            
        }
        .cariin{
            background-color:white;
            margin-top:-15px;
            margin-bottom:-18px;
        }
        .cari2 h1{
            padding-top: 8%;
            padding-bottom: 8%;
            font-size: 25px;
        }
        .cari2 p{
            font-size: 16px;
            font-weight: 600;
            padding-bottom: 5%;
            text-align:justify;
            font-family:'ADLaM Display';
            width:70%;
            color:blue;
            margin-bottom:5%;
        }
        .pos{
            padding: 5px;
            margin-right: 30%;
        }
        .posname{
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }
        .posname img{
            margin-right: 20px;
            height:30px;
            margin-top:6px;
        }
        .posname h3{
            margin-top: 10px;
            font-family:'ADLaM Display';
        }
    
        .work{
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }
        .work h5{
            font-size: 15px;
            margin: 10px;
            border: 2px solid black;
            padding: 10px;
            border-radius: 10px;
            background-color: rgb(232, 232, 232);
        }

        .carrier1{
            border:1px solid black;
            border-radius: 20px;
            margin-top: 2%;
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 2%;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            background-color:white;
        }
        .carrier1:hover{
            border: 5px solid blue;
            background-color: rgb(98, 211, 255);
        }
        .carrier2:hover{
            border: 5px solid blue;
            background-color: rgb(98, 211, 255);
        }
        .carrier2{
            border:1px solid black;
            border-radius: 20px;
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 2%;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            background-color: white;
        }
        .sal1{
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
            margin-top: 20px;
        }
        .sal1 img{
            margin-right: 10px; 
            margin-top: 10px;  
        }
        .sal1 h4{
            margin-top: 10px;
            font-family:'ADLaM Display';
        }
        .salary{
            float: right;
        }
       
        .btn-primary{
            width: 180px;
            height: 50px;
            margin-top: 17px;
            margin-left: 17px;
            font-size: 20px;
            border: 4px solid blue;
        }
        
       @media screen and (max-width:997px){
        .carrier1{
            width: 60%;
            align-items: center;
            padding-left: 10px;
            margin-bottom:3%;
            margin-left:0;
        }
        .carrier2{
            width: 60%;
            align-items: center;
            padding-left: 10px;
            margin-bottom:3%;
            margin-left:0;
        }
        .cari1{
            margin-bottom: 7%;
            margin-left: 10%;
        }
        .cari2{
            margin-left: 10%;
        }
        .posname img{
            margin-left: 50%;
            margin-bottom: 5%;
        }
        .posname h3{
            margin-left: 30%;
        }
        .work{
            margin-left: 20%;
        }
        .salary{
            margin-left: 5%;
        }
      }
        @media screen and (max-width:830px){
            .pos{
                margin-left:20%;
            }
            .salary{
                margin-left:30%;
            }
        }
       @media screen and (max-width:600px){
        .home::before{
            height:450px;
        }
        .home h4{
        text-shadow:none;
        color:white;
      }
      .intro{
        padding-top:5%;
        padding-bottom:5%;
      }
      .cari1 img{
        width:88%;
      }
      .cari2{
        margin-bottom:5%;
      }
      .carrier1{
        margin-bottom:10%;
      }
      .carrier2{
        margin-bottom:10%;
      }
       }
        .up{
            position: fixed;
            bottom:40px;
            right: 0;
            opacity: 0.9;
          }
          .up img:hover{
            width: 35px;
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
        include 'header.php';
     ?>
        <div class="home">
            <center><h1 style="font-weight:600; font-size:55px; margin-top:10%;text-shadow:5px 5px 10px white">CAREERS</h1></center>
            <center><h4 style="font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white">Ready to Join Our Team...</h4></center><br><br><br>
        </div>

        <div class="intro"  data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
           <center> <p>India needs three revolutions: Evergreen revolution in Agriculture, Yellow revolution in Food Processing and Blue revolution in Water Management. Well, Jiya Eco-Products Limited has inspired and speeded up transformation in each of these three critical areas impacting lives of millions of rural inhabitants. We complete the entire agricultural value chain from under one roof.</p></center>
        </div>
        <div class="carrierbody">
        <div class="row cari">
            <div class="col-lg-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
              <div class="cari1">
              <img src="img/carriimg.jpeg" width="80%">
              </div>
            </div>
            <div class="col-lg-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="cari2">
                <div class="cariin">
             <h1 style="font-family: 'Sofia'">we care about our employees. We prioritize your growth, work-life balance, and well-being.</h1>
           <center> <p>
                Careers are life's canvas, painted with skill,
                A journey of purpose, dreams to fulfill.
                They navigate challenges, learn and adapt,
                Professional landscapes where ambitions are mapped.
                In the pursuit of goals, fulfillment is unwrapped.</p></center>
            </div>
            </div>
            </div>
        </div>
      <center><h1 style="font-weight:600; font-size:40px; margin-top:2%;padding-top:30px">CURRENT OPENINGS...</h1></center>
            <center><h4>Ready to Join Our Team...</h4></center><hr><br>
        <div class="row job">
            <div class="col-lg carrier1" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="pos">
                    <div class="posname">
                      <img src="img/briefcase.png" width="40px">
                      <h3>Agriculture Engineer</h3>
                    </div>
                    <div class="work">
                       <h5>full-time</h5>
                       <h5>Part-time</h5>
                       <h5>Hybrid</h5>
                    </div>
                </div>
                <div class="salary">
                    <div class="sal1">
                      <img src="img/rupee.png" width="20px" height="20px">
                      <h4>200K-400K /Year</h4>
                    </div>
                    <div class="sal2">
                      <a href="careersform.php"> <button type="button" class="btn btn-primary">Apply Now</button></a>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row job">
            <div class="col-lg carrier2" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="pos">
                <div class="posname">
                 <img src="img/briefcase.png" width="40px" height="40px">
                  <h3>Produced Sales Manager</h3>
                </div>
                  <div class="work">
                    <h5>full-time</h5>
                    <h5>Part-time</h5>
                    <h5>onsite</h5>
                  </div>
                </div>
                <div class="salary">
                    <div class="sal1">
                        <img src="img/rupee.png" width="20px" height="20px">
                        <h4>400K-600K /Year</h4>
                      </div>
                      <div class="sal2">
                        <a href="careersform.php"> <button type="button" class="btn btn-primary">Apply Now</button></a>
                      </div>
                </div>
            </div> 
        </div>
        <div class="row job">
            <div class="col-lg carrier2" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="pos">
                <div class="posname">
                <img src="img/briefcase.png" width="40px" height="40px">
                  <h3>Agriculture Specialist</h3>
                  </div>
                  <div class="work">
                    <h5>part-time</h5>
                    <h5>part-time</h5>
                    <h5>Remote</h5>
                  </div>
                </div>
                <div class="salary">
                    <div class="sal1">
                        <img src="img/rupee.png" width="20px" height="20px">
                        <h4>300K-400K /Year</h4>
                      </div>
                      <div class="sal2">
                        <a href="careersform.php"> <button type="button" class="btn btn-primary">Apply Now</button></a>
                      </div>
                </div>
            </div>
            
        </div>
        <div class="row job">
            <div class="col-lg carrier2" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="pos">
                    <div class="posname">
                       <img src="img/briefcase.png" width="40px" height="40px">
                       <h3>Business Development</h3>
                    </div>
                    <div class="work">
                      <h5>full-time</h5>
                      <h5>Part-time</h5>
                      <h5>Hybrid</h5>
                    </div>
                </div>
                <div class="salary">
                    <div class="sal1">
                        <img src="img/rupee.png" width="20px" height="20px">
                        <h4>200K-300K /Year</h4>
                    </div>
                    <div class="sal2">
                        <a href="careersform.php"> <button type="button" class="btn btn-primary">Apply Now</button></a>
                    </div>
                </div>
            </div>    
        </div>
    </div>
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