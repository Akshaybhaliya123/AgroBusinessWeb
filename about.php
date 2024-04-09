<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
     <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
   
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
             border-bottom-left-radius: 30%;
            border-bottom-right-radius: 30%;
            z-index: -1;
            opacity: 3; 
            top: 0px;
            left: 0px; 
        }
        .home{
          margin-bottom: 2%;
        }
       
        /*About section.... */
        #aboutsec{
            background-color: rgb(232, 255, 232);
        }
        /*history section*/
        .history{
            background-color: white;
        }
        .his1 img{
            border-radius: 50%;
            margin-top: 10%;
            margin-bottom: 5%;
           border-right: 20px solid green;
         }
         .his2{
            text-align: center;
         }
         .his2 h1{
            margin-top: 15%;
            font-size: 36px;
            font-weight: 700;
           
         }
         .his2 p{
            font-size: 15px;
            font-weight: 500;
            text-align: justify;
           margin-top: 5%;
            width: 80%;
            font-family:'ADLaM Display';
         }

        
         /*our vision and mission*/
        .vision{
            border: 2px solid black;
            border-bottom-left-radius: 10%;
            border-top-right-radius: 10%;
            margin-top: 15%;
            margin-left: 5%;
            width: 85%;
            margin-bottom: 5%;
            padding-bottom: 40px;
           background-color: white;
           box-shadow: 10px 10px 40px grey;
        }
       
        .mission{
            border:2px solid black;
            margin-top: 40%;
            margin-bottom: 5%;
            margin-left: 5%;
            width: 85%;
            padding-bottom: 40px;
            background-color: white; 
            border-bottom-left-radius: 10%;
            border-top-right-radius: 10%;
            box-shadow: 10px 10px 40px grey; 
        }
        .goal{
            border: 2px solid black;
            margin-top: 70%;
            margin-bottom: 5%;
            margin-left: 5%;
           background-color: white;
           padding-bottom: 20px;
           width: 85%;
           border-bottom-left-radius: 10%;
           border-top-right-radius: 10%;
           box-shadow: 10px 10px 40px grey;
        }
        .vision:hover{
          background-color: greenyellow;
          scale: 0.95;
       }
       .mission:hover{
          background-color: greenyellow;
          scale: 0.95;
       }
       .goal:hover{
          background-color: greenyellow;
          scale: 0.95;
       }
        .part1 img{
            border-top-right-radius: 10%;
            
        }
        .part2 h1{
            font-size: 30px;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 10px;
            text-align: center;
        }
        .part2 p{
            font-size: 16px;
            font-weight: 500;
            text-align: justify;
            width: 80%;
            margin-left: 10%;
            font-family:'ADLaM Display';                 
        }
       
        /* speciality section.........*/
        #spe{
            font-weight: 600;
            font-size: 35px;
            margin-bottom: 3%;
         }
         #final{
            width: 100%; 
            border: 2px solid black;
            border-top-left-radius: 20%;
            border-bottom-right-radius:20%;
            background:url(img/special1.jpg) no-repeat center center/cover;
            margin-bottom: 10%;
            
         }
         .spe1{
            border: 2px solid black;
            background-color: white;
            width: 40%;
            margin-top: 10%;
            margin-bottom: 5%;
            border-radius: 20px;
            margin-left: -300px;
            box-shadow: 10px 10px 40px white;
            border-bottom: 10px solid green;
            border-right: 10px solid green;
         }
         .spe1 h1{
            font-weight: 600;
            font-size: 30px;
         }
         .spe1 p{
            font-size: 16px;
            font-weight: 400;
            font-family:'ADLaM Display' ;
            padding-bottom: 20px;
         }
         .spe2{
            border: 2px solid black;
            background-color: white;
            width: 40%;
            margin-top: 10%;
            margin-bottom: 5%;
            border-radius: 20px;
            margin-left: 250px;
            box-shadow: 10px 10px 40px white;
            border-bottom: 10px solid green;
            border-right: 10px solid green;
         }
         .spe1:hover{
            box-shadow: none;
            border-bottom: 10px solid orange;
            border-right: 10px solid orange;
            background-color: #ddefff;
         }
         .spe2:hover{
            box-shadow: none;
            border-bottom: 10px solid orange;
            border-right: 10px solid orange ;
            background-color: #ddefff;
         }
         .spe2 h1{
            font-weight: 800;
            font-size: 35px;
         }
         .spe2 p{
            font-size: 16px;
            font-weight: 400;
            font-family:'ADLaM Display' ;
            padding-bottom: 20px;
         }
            /*achievement section.......*/
            #achieve{
                color: black;
                background-color: white;
              }
              .ach{
                border: 2px solid black;
                border-radius: 30%;
                width: 80%;
                background-color: white;
                border-top: 20px solid black;
                border-bottom: 20px solid black;
                margin-bottom: 20%;
                box-shadow: 10px 10px 20px silver;
                margin-top:20%;
    
              }
              .ach1{
                padding-bottom:1rem;
              }
              .ach2{
               padding-bottom:4rem;
              }
              .ach3{
                padding-bottom:4rem;
              }
              .ach4{
                padding-bottom:4rem;
              }
              .ach h3{
                font-weight: 500;
                font-family:'ADLaM Display';
                margin-bottom: 25px;
              }
        
          /* out team member.....*/
  
          .team1part1{
            margin-top:15%;
          }
          .team1 h4,.team2 h4,.team3 h4{
            font-family:'ADLaM Display';
          }
          .team1 h6,.team2 h6,.team3 h6{
            font-family:'ADLaM Display';
          }
          .team1part2 img{
            border-left:10px solid green;
            border-right:10px solid green;
          }
          .team2part1 img{
            border-left:10px solid green;
            border-right:10px solid green;
          }
          .team2part2{
            margin-top:15%;
          }
          .team3part1{
            margin-top:15%;
          }
          .team3part2 img{
            border-left:10px solid green;
            border-right:10px solid green;
          }
          .tt{
            background-color:white;
            border:2px solid black;
            box-shadow:10px 10px 20px grey;
            margin-bottom:5%; 
          }
          .tt:hover{
            background-color:skyblue;
            box-shadow:5px 5px 10px grey, inset -5px -5px 10px grey;
            cursor: pointer;
          }
          .tt1{
            margin-top:2%;
            width:60%;
          }
          .tp2{
            margin-left:66%;
          }
           
          /*  our value section*/
          .team{
            background-color: white;
          }
          .team h1{
            text-align: center;
            justify-content: center;
            font-weight: 600;
        }
        .team hr{
            margin-bottom: 5%;
        }
        .teamAll{
            margin-bottom: 10%;
        }
           .value{
            width: 80%;
            border-radius: 20px;
            padding: 20px;
           margin: 30px;
           background-color: white;  
           box-shadow: 10px 10px 20px grey;
           border-radius: 40px;
           cursor: pointer;   
           }
           .value:hover{
            background-color: #ddefff;
            box-shadow: 10px 10px 20px grey;
            border-bottom: 20px solid greenyellow;
            border-radius: 40px;

           }
           .value1,.value3{
            border-bottom: 20px solid blue;
           }
           .value3{
            padding-bottom:10%;
           }
           .value2{
            margin-top: 30%;
            border-bottom: 20px solid green;
           }
           .value4{
            margin-top: 30%;
            border-bottom: 20px solid green;
           }
           .value h4{
            font-weight: 700;
           }
           .value p{
            text-align: center;
            justify-content: center;
            font-family:'ADLaM Display';
            font-weight: 400;
            margin-top: 10%;
            font-size: 16px;
           }
           
           .value img{
            margin-bottom: 7%;
            width: 30%;
          }
           /*our testonomial.....*/
           .testo{
            background-color: white;
           }
           .testo1{ 
            width: 50%;
            text-align: center;
            justify-content: center;
            border: 2px solid black;
            border-radius: 20px;
            border-bottom:15px solid green;
            border-right: 15px solid green;
            background-color: #ddefff;
           }
           .testo h1{
              font-weight: 700;
              margin-bottom: 5%;
           }
           .test1{
            margin-top: -120px;
            margin-left: 40%;
            margin-bottom: 5%;
           }
           .test2{
            margin-top: -120px;
            margin-left: 40%;
            padding-bottom: 55px;
            margin-bottom: 5%;
           }
           .test3{
            margin-top: 5%;
           }
           .testo p{
            text-align: justify;
            width: 60%;
            margin-left: 15%;
            font-family:'ADLaM Display' ;
           }
          #boxes{
            
            margin: 10px;
            padding: 10px;
          }
          #boxes h3{
            font-weight: 700;
          }
          #boxes img{
            margin-bottom: 30px;
            box-shadow: 10px 10px 20px rgba(70, 69, 69, 0.855);
          }
          #boxes h5{
            margin-top: 10px;
            font-weight: 700;
          }
       
         
         /* partner section*/
         .partner{
            background-color: white;
         }
         .partners{
            background-color: white;
         }
         .ptr3{
          padding-top:20px;
         }
       
        /*footer section*/
      
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
      /*responsive*/
      @media screen and (max-width:991px){
        .mission{
          margin-top: 5%;
        }
        .goal{
          margin-top:5%;
        }
        .spe1{
          margin-left: 0;
        }
        .spe2{
          margin-left: 0;
        }
        .ach{
          margin-left: 10%;
          margin-top: 5%;
          margin-bottom: 2%;
        }
        .tp1{
          margin-left:30%;
          margin-bottom:8%;
          padding-bottom:5%;
        }
        .team1part1{
          margin-bottom:5%;
        }
        .tp2{
          margin-left:30%;
          margin-bottom:8%;
          padding-bottom:5%;
        }
    
        .tp3{
          margin-left:30%;
          margin-bottom:8%;
          padding-bottom:5%;
        }
        .team3part1{
          margin-bottom:5%;
        }
        .value1{
          margin-top: 8%;
          margin-left: 10%;
        }
        .value2{
          margin-top: 3%;
          margin-left: 10%;
        }
        .value3{
          margin-left: 10%;
        }
        .value4{
          margin-top: 3%;
          margin-left: 10%;
        }
      }
      @media screen and (max-width:590px){
        .test1{
          margin-top: 5%;
          margin-left: 25%;
          margin-bottom: 2%;
         }
         .test2{
          margin-top: 5%;
          margin-left: 25%;
          padding-bottom: 15px;
          margin-bottom: 5%;
         }
         .test3{
          margin-left: 25%;
         }
         .home h4{
         text-shadow:none;
          color:white;
         }
         #final{
          border: 2px solid black;
            border-top-left-radius: 0%;
            border-bottom-right-radius:0%;
            margin-top:10%;
         }
         #achieve{
               margin-top:10%;
              }
              .ourteam{
                margin-top:10%;
              }
              .ourh1{
                padding-top:10%;
              }
              .ourvalueh1{
                padding-bottom:10%;
              }
              .value{
                width:70%;
                margin-left:12%;
              }
              .testo1{
                width:60%;
                margin-left:20%;
              }
      }
      @media screen and (max-width:900px){
        #aboutsec{
          margin-top:10%;
        }
      }
      @media screen and (max-width:620px){
        #aboutsec{
          margin-top:20%;
        }
      }
    </style>
</head>
<body>
    <?php
       include 'header.php'
    ?>
  
            <div class="home">
                <center><h1 style="font-weight:600; font-size:55px; margin-top:10%;text-shadow:5px 5px 10px white;">ABOUT US</h1></center>
                <center><h4 style="margin-bottom:4%;font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white;">We produce organic food here....</h4></center><br><br><br>
            </div>   
        <section id="aboutsec">
           <div class="row history">
                <div class="col-lg-6 " data-aos="fade-right"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    <div class="his2">
                    <h1>JIYA ECO PRODUCTS LTD</h1>
                 <center> <p>At JIYA ECO PRODUCTS LTD, we are passionate pioneers in the agricultural industry, dedicated to transforming traditional farming through innovation and sustainability.
                     Our commitment lies in empowering farmers with cutting-edge technologies, precision practices, and educational initiatives to enhance crop yields while minimizing environmental impact. With a mission to provide high-quality, responsibly cultivated products, we aim to lead the way in shaping a more resilient and eco-conscious future for agriculture.
                     Welcome to a company where progress meets tradition, and where we cultivate excellence for a sustainable tomorrow.</p></center>
                  </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    <div class="his1">
              <center><img src="img/historylogo1.jpg" width="90%"></center>
                    </div>
                </div>

           </div>
            <!-- vision and mission.... -->
            <div class="row vimi">
                <div class="col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    <div class="vision">
                      <div class="part1">
                    <center>   <img src="img/vision.jpeg" height="220px" width="100%"></center> 
                      </div>
                      <div class="part2">
                      <u> <h1>OUR VISION</h1></u>
                      <p>Our vision is to revolutionize agriculture through cutting-edge technologies and sustainable practices, ensuring global food security while minimizing environmental impact.
                         We aspire to be leaders in innovation, 
                        driving positive change in the industry by fostering a harmonious balance between productivity and ecological responsibility.</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    <div class="mission">
                        <div class="part1">
                     <center>       <img src="img/mission.jpeg"  height="220px" width="100%"></center>
                        </div>
                        <div class="part2">
                            <u> <h1>OUR MISSION</h1></u>
                            <p>Our mission is to empower farmers with advanced tools and sustainable practices, optimizing crop production and resource efficiency. 
                                We are committed to providing high-quality,
                                 responsibly cultivated products to meet global demand while fostering a resilient and environmentally conscious agricultural ecosystem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    <div class="goal">
                      <div class="part1">
                    <center>   <img src="img/goal1.png" height="220px" width="100%"></center> 
                      </div>
                      <div class="part2">
                      <u> <h1>OUR GOAL</h1></u>
                      <p>Our agriculture company is dedicated to achieving sustainable farming practices, 
                        focusing on precision agriculture and resource efficiency to enhance crop yield while minimizing environmental impact.
                        We strive for operational excellence through technological innovation, supply chain optimization, and a commitment to community engagement, ensuring a leading position in delivering high-quality, sustainable products.</p>
                      </div>
                    </div>
                </div>
                
            </div>

      
        <!-- our history -->
       
        <!-- our speciality -->
        <u><center><h1 id="spe">OUR SPECIALITY</h1></center></u>
           <div class="row" id="final">
                  <div class="col-lg-6">
             <center>  <div class="special1">
                       <div class="spe1" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                           <img src="img/hislogo1.png" width="80px">
                            <h1>5+</h1>
                            <p>Years Of Experience</p>
                       </div>
                       <div class="spe1" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                            <img src="img/hislogo2.png" width="80px">
                            <h1>50+</h1>
                            <p>Project Completed</p>
                        </div>
                  </div></center>
                  </div>
                  <div class="col-lg-6">
             <center> <div class="special2">
                      <div class="spe2" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                         <img src="img/hislogo3.png" width="100px">
                         <h1>90%</h1>
                         <p>Customer Satisfaction</p>
                      </div>
                      <div class="spe2" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                        <img src="img/hislogo4.png" width="100px">
                        <h1>10+</h1>
                        <p>Experts</p>
                      </div>
                    </div>
                    </center>
                 </div>
         </div>
             <!-- achievements  part......... -->
   <center> <u><h1 style="margin-top:5%; margin-bottom:2%;font-weight:600;font-size:35px">OUR ACHIEVEMENTS</h1></center></u>
   <div class="row" id="achieve">
            <div class="col-lg-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
               <div class="ach ach1">
                   <center>  <img src="img/award1.png" width="170px" style="margin-bottom:10px"></center>
                   <center>  <h3>Best Seller Award in Agricultural</h3></center>
               </div>
            </div>
           <div class="col-lg-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
               <div class="ach ach2">
                    <center>  <img src="img/award2.png" width="100px"style="margin-top:30px;margin-bottom:35px"></center>
                    <center>  <h3>Small Business Award in Agricultural</h3></center>
               </div>
           </div>
           <div class="col-lg-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
              <div class="ach ach3">
                 <center>   <img src="img/award3.png"width="130px" style="margin-top:30px;margin-bottom:5px"></center>
                  <center>  <h3>Small Business Award-2</h3></center>
              </div>
          </div>
          <div class="col-lg-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
             <div class="ach ach4">
                  <center> <img src="img/award4.png" width="130px" style="margin-top:30px;margin-bottom:12px"></center>
                  <center><h3>Farmers Weekly Awards</h3></center>
             </div>
          </div>
    </div>

        <!-- our team member...... -->
        <center> <u><h1 class="ourh1" style="font-size: 35px; font-weight:600;margin-bottom:4%;margin-top:5%">OUR TEAM</h1></center></u>
        <div class="ourteam">
        
        <div class="row tt1" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <div class="col-lg-12 tt tp1">
             <div class="team1">
                <div class="col-lg-6">
                <center>  <div class="team1part1">
                        <h4>Dr. Harishchandra Prasad Singh</h4>
                        <h6>Managing Director</h6>
                        <div class="lastlogo">
                            <a href="#"><img src="img/twitter-icone.png " height="20px" width="20px"></a>
                            <a href="#"><img src="img/facebook.png" height="20px" width="20px"></a>
                            <a href="#"><img src="img/instagram.png" height="20px" width="20px"></a>
                            <a href="#"><img src="img/linkdin.png"height="20px" width="20px"></a>
                        </div>  
                     </div></center>
                </div>
                <div class="col-lg-6">
                  <center>  <div class="team1part2">
                    <img src="team1.jpg" id="team1img" height="200px">
                    </div></center>
                </div>
             </div>
            </div>
         </div>
         <div class="row tt1" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
          <div class="col-lg-12 tt tp2">
                <div class="team2">
                <center> <div class="col-lg-6">
                    <div class="team2part1">
                    <img src="team2.jpg" id="team2img" height="200px">
                    </div>
                    </div></center>
               <center>   <div class="col-lg-6">
                <div class="team2part2">
                   <h4>Smt Radhika Pereira</h4>
                   <h6>HR Manager</h6>
                   <div class="lastlogo">
                        <a href="#"><img src="img/twitter-icone.png " height="20px" width="20px"></a>
                        <a href="#"><img src="img/facebook.png" height="20px" width="20px"></a>
                        <a href="#"><img src="img/instagram.png" height="20px" width="20px"></a>
                        <a href="#"><img src="img/linkdin.png"height="20px" width="20px"></a>
                   </div> 
                 </div>
                 </div></center>
                </div>
            </div>
            </div>
        <div class="row tt1" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <div class="col-lg-12 tt tp3">
                <div class="team3">
                 <center>   <div class="col-lg-6">
                      <div class="team3part1">
                         <h4>Shri Ghanshyam Dass</h4>
                    <h6>Technical Head</h6>
                    <div class="lastlogo">
                            <a href="#"><img src="img/twitter-icone.png " height="20px" width="20px"></a>
                            <a href="#"><img src="img/facebook.png" height="20px" width="20px"></a>
                            <a href="#"><img src="img/instagram.png" height="20px" width="20px"></a>
                            <a href="#"><img src="img/linkdin.png"height="20px" width="20px"></a>
                    </div>
                   </div>
                   </div></center>
                 <center>  <div class="col-lg-6">
                  <div class="team3part2">
                    <img src="team3.jpg" id="team3img" height="200px">
                   </div>
                  </div></center>
                </div>
            </div>
        </div>
        </div>
     <br><br>
        <!-- our values  section   -->
        <center>  <h5 style="font-size:23px;margin-top:2%; font-weight:500">Collaboration....</h5></center>
       <u> <center> <h1 class="ourvalueh1" style="font-size: 35px; font-weight:600;margin-bottom:2%">OUR VALUES</h1></center></u>
        <div class="team">
          <div class="row teamAll">
           <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <div class="value value1">
                  <center>  <img src="img/valuelogo1.png"height="80px" width="80px"></center>
                     <center> <h4>Reliability</h4></center>
                     <p>We're all about being rock-solid. At WebCodeGenie, we make sure our solutions are dependable, so you can count on us to consistently meet your needs.</p>
                  </div>
           </div>
           <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <div class="value value2">
                <center><img src="img/valuelogo2.png"height="80px" width="80px"></center>
                     <center> <h4 style="margin-top:-20px">Innovation</h4></center>
                     <p>We love thinking outside the box. Always exploring new and creative ways to solve challenges, we bring fresh ideas to help your business shine in the digital world</p>
                  </div>
           </div>
           <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <div class="value value3">
                <center>   <img src="img/valuelogo3.png"height="70px" width="80px"></center>
                  <center> <h4 style="margin-top:15px">Client-Focused</h4></center>
                  <p>You're at the center of what we do. We listen, understand, and customize our services to fit your unique needs. Your success is our main goal.</p>
                  </div>
          </div>
          <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="value value4">
            <center>   <img src="img/valuelogo4.png"height="80px" width="80px"></center>
            <center> <h4>Transparency</h4></center>
        <p>We believe in keeping it real. We share everything about our processes, timelines, and costs to build a trusting relationship with you.</p>
            </div>
    </div>
        </div>
      </div>

      <!-- Our testonomial...... -->
     <u> <center><h1 class="ourvalueh1" style="font-size: 35px; font-weight:600;margin-bottom:2%">OUR TESTONOMIAL</h1></center></u>
       <div class="row testo"> 
        <div class="col-lg-6" >
            <div class="testo1 test3" data-aos="fade-down-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000"> 
            <img src="img/t1.png"  width="60%">
            <h3>Mr. Sanjiv Puri</h3>
          <center>  <p class="post">Chairman And MD</p></center>
           <center><b> <h5>ITC Agribusiness Division</h5></b></center>
            <p>Puri was appointed as a Wholetime Director on the Board of ITC with effect from December 6, 2015. Chief Executive Officer in February 2017 and re-designated as the Managing Director in May 2018. He was appointed as the Chairman effective May 13, 2019. He is an alumnus of the Indian Institute of Technology, Kanpur, and the Wharton School of Business, USA.</p>
            </div>
            <div class="testo1 test1" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <img src="img/t2.png"  width="60%">
                <h3>Shree Alok Bhavarlal Jain</h3>
             <center><p class="post">ChairPerson Executive Directer</p></center>   
            <center><b><h5>Jain Irrigation Systems</h5></b></center>
                <p>Mr. Ashok Jain is the Chairman of Jain Irrigation Systems Limited and a well-known entrepreneur working for agriculture for the past over 4 decades. He is 56 years old and is the eldest son of Late Dr. Bhavarlal Jain, the Founder Chairman. Mr. Ashok Jain obtained his degree in Commerce from University of Pune. </p>
            </div>
        </div>
        <div class="col-lg-6" >
            <div class="testo1 test3" data-aos="fade-down-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <img src="img/t3.png"  width="60%">
            <h3>Mr.Sanjiv Lal </h3>
          <center> <p class="post">Managing Director & CEO</p></center> 
             <center><b> <h5>Rallis India Limited</h5></b></center>
             <p>Mr. Sanjiv Lal is a Chemical Engineering Graduate from the IIT New Delhi. Mr. Lal was the Chief Operating Officer of the India Chemicals Business of Tata Chemicals. he joined Tata Chemicals in 2004, he has handled its Agri Retail Business, headed the organizational transformation and business excellence function, headed the information technology function and was also nominated as the Joint Managing Director to IMACID, a JV in Morocco.</p>
            </div>
            <div class="testo1 test2" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <img src="img/t4.png" width="60%">
            <h3>Mr.Rahul Danuka</h3>
          <center>  <p class="post">Joint Managing Director</p></center>
             <center> <b> <h5> Dhanuka AgriTech Limited</h5></b></center>
            <p>Mr. Rahul Dhanuka Joint Managing Director Mr. Rahul Dhanuka, the vibrant and dynamic leader has been instrumental in building a strong and professional organization that stands tall in today's agriculture domain</p>
           </div>
        </div>
    </div>
  
    <!--partnership part..............-->
      
      <u>  <center><h1 class="ourvalueh1" style="font-size: 35px; font-weight:600;margin-bottom:2%;margin-top:5%">OUR PARTNERS</h1></center></u>
    <div class="row partners">
   <center> <div class="partner">
        <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr11.jpeg" height="200px"  width="300px"></div>
        <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr22.jpeg" height="200px"   width="300px"></div>
        <div class="col-lg-3 ptr3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr33.jpeg" height="180px" width="250px"></div>
        <div class="col-lg-3 ptr3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr4.jpeg" height="150px" width="250px"></div>
     </div></center>
    </div>
    <div class="row partners">
    <center> <div class="partner">
        <div class="col-lg-3 " data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr5.webp" height="200px"  width="300px"></div>
        <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr6.jpeg" height="200px"   width="300px"></div>
        <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr44.jpeg" height="200px" width="300px"></div>
        <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine"> <img src="img/ptr55.jpg" height="200px" width="300px"></div>
     </div></center>
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