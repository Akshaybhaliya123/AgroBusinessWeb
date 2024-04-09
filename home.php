<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
          margin-bottom: 5%;
        }
        /* About section*/
        .history{
            background-color: white;
           
        }
        .his1 img{
            border-radius: 50%;
            margin-top: 7%;
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
            font-family:'ADLaM Display'
           
         }
         .his2 p{
            font-size: 15px;
            font-weight: 500;
            text-align: justify;
           margin-top: 5%;
            width: 80%;
            font-family:'ADLaM Display';
         }
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
           cursor: pointer;
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
            cursor: pointer;
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
           cursor: pointer;
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
            font-family:'ADLaM Display'
        }
        .part2 p{
            font-size: 16px;
            font-weight: 500;
            text-align: justify;
            width: 80%;
            margin-left: 10%;
            font-family:'ADLaM Display';                 
        }
        @media screen and (max-width:991px){
    
            .mission{
              margin-top: 5%;
            }
            .goal{
              margin-top:5%;
            }
        }
        /*product section*/
        #fth{
            margin-top: 3%;
            margin-bottom: 4%;
            font-weight: 800;
            border: 2px solid white;
            background-color: black;
            font-family:'ADLaM Display';
            color: white;
          }
          
          .tools{
            margin-top: 5%;
            margin-bottom: 5%;
            background-color: white;
            padding: 20px;
            
          }
          .item{
            width: 100%;
          }
          .productitem{
            border: 2px solid black;
            border-radius: 40px;
            width: 80%;
            background-color: rgb(125, 255, 85);
            box-shadow: 0px 0px 0px gray, inset -10px -10px 20px grey;
          }
         .cart{
          margin-bottom: 10%;
          font-size: 15px;
          box-shadow: 10px 10px 20px grey;
          background-color: black;
          border-radius:10px;
          color: white;
         }
         .cart a{
          text-decoration:none;
          color:white;
         }
         .cart a:hover{
          color:black;
         }
         .cart:hover{
          color: black;
          background-color: white;
          box-shadow: none;
         }
         .proimg{
          margin-top: 10%;
          border: 2px solid black;
          box-shadow: 10px 10px 20px gray;
          border-radius: 20px;
         }
          .tools h5{
            text-align: center;
            justify-content: center;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 10%;
            margin-bottom: 8%;
          }
          @media screen and (max-width:971px){
            .productitem{
              margin-bottom: 5%;
              margin-left: 10%;
            }
          }
          /*service section*/
        
          .serve h1{
            font-size: 35px;
            font-weight: 700;
            text-align: center;
            justify-content: center;
            margin-bottom: 2%;
            margin-top:5%;
            font-family:'ADLaM Display'
           }
           .serve p{
            text-align: center;
            justify-content: center;
            font-size: 22px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 500;
            color: black;
            padding: 21px;
            background-color: rgb(186, 255, 107);
           }
           .service1{
            background-color: rgb(232, 255, 232);
           }
           
           .service1 img{
             margin-top: 8%;
             margin-bottom:5%;
             border: 2px solid black;
             box-shadow: 5px 5px 10px green;
           }
           .service1 img:hover{
            transform: scale(0.95);
            cursor: pointer;
           }
           .service1 h4{
            font-size: 15px;
            font-weight: 600;
           }
           .service1 h2{
            margin-top: 3%;
            font-size:25px;
            font-weight: 600;
           }
           .firpara{
            font-size: 14px;
            font-weight: 400;
            justify-content: center;
            text-align: center;
               }
           .secpara{
            font-size: 12px;
            text-align: center;
            justify-content: center;
           }
           .content{
            background-color: white;
            padding-bottom:3%
           }
           .btnpri{
            margin-bottom: 4%;
            height: 30px;
            width: 80px;
            font-weight: 400;
            font-size: 18px;
           }
           /*careers section......*/
           .careers{
            border: 2px solid white;
            box-shadow: 0px 0px 0px grey, inset -10px -10px 20px rgb(74, 74, 109);
           }
          .careerspart1 img{
            margin-top: 5%;
          }
           .careerspart2{
            border: 2px solid black;
            margin-top: 6%;
            margin-bottom: 7%;
            background-color:  rgb(125, 255, 85);
            margin-right: 5%;
            box-shadow: 10px 10px 20px rgb(74, 74, 89);
            border-bottom-left-radius: 30%;
           }
           .careerspart2 h2{
            font-size: 35px;
            font-weight: 700;
            color: blue;
            margin-bottom: 3%;
            margin-top: 3%;
           }
           .careerspart2 h4{
            font-size: 25px;
            font-weight: 600;
            color: blue;
            margin-bottom: 5%;
           }
           .careerspart2 p{
            font-size: 15px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 600;
            text-align: justify;
            width: 60%;
            margin-bottom: 2%;
           }
           .careerspart2 a{
            font-size: 20px;
            font-family:'ADLaM Display';
           }
           .goto{
            margin-bottom: 6%;
           }
           /* news and update section */
           .helpnews{
            background-color: white;
            padding-bottom: 5%;
          
           }
           #news{
            background-color: white;
        }
        .news1{
            border: 2px solid black;
            width: 60%;
            margin-top: 8%;
            margin-bottom: 7%;
            background-color: rgba(134, 255, 98, 0.938);
            padding-bottom: 5%;
            box-shadow: 0px 0px 0px grey, inset -10px -10px 20px grey;
            
        }
        .update1{
            margin-left: 30%;
        }
        .update2{
            margin-left: 10%;
        }
        .npart1 img{
            align-items: center;
            width: 80%;
            height: 250px;
            box-shadow: 10px 10px 20px grey;
            margin-bottom: 5%;
        }
        .npart2 h2{
            font-size: 25px;
            font-weight: 600;
            color: black;
        }
        .npart2 p{
            font-size: 15px;
            font-weight: 500;
            text-align: justify;
            width: 80%;
            color: black;
            margin-left: 60px;
        }
        @media screen and (max-width:1580px) and (min-width:980px){
            .npart2 p{
               
                margin-left: 30px;
            }
        }
        @media screen and (max-width:985px){
            .update1{
                margin-left: 20%;
            }
            .update2{
                margin-left: 20%;
            }
        }
        @media screen and (max-width:628px){
            .npart2 p{
                margin-left: 10px;
            }
        }
       .npart2 a{
        font-size:17px;
        margin-bottom: 2%;
       }
       /*help center section*/
       .help1{
          
        width: 85%;
        background-color: rgb(239, 239, 239);
        box-shadow: 0px 0px 0px grey, inset -10px -10px 20px grey;
        padding-bottom: 20px;
        border-radius: 7%;
        margin-bottom: 10%;
     }
     .help1:hover{
      border-bottom: 10px solid green;
      border-right: 10px solid green;
      background-color: rgb(179, 244, 255);
     
     }

     .hpart1 img{
        margin-top: 20px;

     }
     .hpart2{
        padding: 10px;
        margin: 10px;
     }
     .hpart2 h3{
        text-align: center;
        justify-content: center;
        font-weight: 600;
        font-family:'ADLaM Display';
        margin-bottom: 25px;
     }
     .hpart2 p{
        text-align: justify;
        font-size: 12px;
        color: darkblue;
     }
     .hinner{
        text-align: center;
        border: 2px solid black;
        border-radius: 20px;
        background-color: white;
        box-shadow: 10px 10px 0px green;
        margin: 10px;
        padding: 10px;
     }
    .hinner a{
      font-size:12px;
    }
     .hinner1{
        margin-bottom: 10%;
        margin-top:13%;
     }
     .hinner2{
        margin-bottom: 10%;
        margin-top:13%;
     }
     .hinner4{
      margin-bottom:10%;
      margin-top:13%;
     }
     
       /*contact us section....*/
       .contact-back{
       
        background: url('img/contact3.jpeg') no-repeat center center/cover;
        width: 100%;
        border-top-right-radius: 20%;
        border-bottom-left-radius:20%;
        margin-bottom: 3%;
        margin-top:20%;
    }
     .contact-form{
        border: 2px solid black;
        background-color: white;
        border-radius: 20px;
        width: auto;
        height: 500px;
        width: 30%;
        margin-top: 4%;
        margin-right: 10%;
        float: right;
        box-shadow: 0px 0px 0px grey, inset -10px -10px 20px grey;
        margin-bottom: 4%;
        
     }
     .top{
        border: 2px solid black;
        background-color: rgb(255, 196, 86);
        border-radius: 20px;
        color: black;
        margin: 10px;
        padding: 10px;
     }
     .top h2{
        font-family:'ADLaM Display';
        font-size: 20px;
     }
     .bottom{
        padding: 30px;
        margin: 5px;
     }
     .form-group{
        padding:10px;
        margin: 10px;
     }
     .form-group input{
      font-size:15px;
     }
     .contacta{
      font-size: 35px;
      font-weight: 700;
      font-family: 'ADLaM Display';
      margin-top: 20%;
      margin-left: 20%;
     }
     .contacta a{
      color: white;
     }
     .contacta a:hover{
      color: blue;
      box-shadow: 2px 2px 7px grey;
     }
    
     textarea{
        border-radius: 10px;
     }
     .btn{
        width:30%;
        margin-top: 5%;
        font-size: 20px;
     }
     
     .btn:hover{
        color: white;
        background-color: green;
        box-shadow: 5px 5px 10px grey;
     }
     @media screen and (max-width:1550px){
      .contact-back::before{
          top: 0;
      }
   }
   @media screen and (max-width:690px){
      .contact-form{
          height: auto;
          padding-bottom: 20px;
          float: none;
          width: 80%;
      }  
      .home h1{
        text-shadow:none;
        color:white;
      }
      .home h4{
        text-shadow:none;
        color:white;
      }
   }
   @media screen and (max-width:621px){
    .contacta{
      margin-top:-20px;
      margin-left:-10px;
      padding:20px;
    }
    .help1{
      margin-left:7%;
    }
    
   }

   @media screen and (max-width:520px){
    .home::before{
      height:560px
    }
    .home h1{
      font-size:35px;
       
   }
   .home h4{
      font-size:35px;
   }
   #ser2{
    margin-bottom:10%;
   }
   #newshead{
    padding-top:10%;
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
  include 'header.php'
  ?>
        <div class="home">
            <center><h1 style="font-weight:600; font-size:50px; margin-top:7%;text-shadow:5px 5px 10px white">WELLCOME</h1></center>
            <center> <h4 style="text-shadow:5px 5px 10px white">To</h4></center>
            <center><h4 style="font-weight:600; font-size:50px;text-shadow:5px 5px 10px white">JIYA ECO-PRODUCTS LIMITED...</h4></center><br><br><br>
        </div>
        <div class="row history">
            <div class="col-lg-6" data-aos="fade-right"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="his2">
                <h1>JIYA ECO PRODUCTS LTD</h1>
             <center> <p>At JIYA ECO PRODUCTS LTD, we are passionate pioneers in the agricultural industry, dedicated to transforming traditional farming through innovation and sustainability.
                 Our commitment lies in empowering farmers with cutting-edge technologies, precision practices, and educational initiatives to enhance crop yields while minimizing environmental impact. With a mission to provide high-quality, responsibly cultivated products, we aim to lead the way in shaping a more resilient and eco-conscious future for agriculture...</p>
                 <a href="about.html" style="font-size:15px;font-family:'ADLaM Display';">View more</a></center>
              </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="his1">
          <center><img src="img/historylogo1.jpg" width="90%"></center>
                </div>
            </div>
       </div>
       <div class="row vimi">
        <div class="col-lg-4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <div class="vision">
              <div class="part1">
            <center>   <img src="img/vision.jpeg" height="200px" width="100%"></center> 
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
             <center>       <img src="img/mission.jpeg"  height="200px" width="100%"></center>
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
            <center>   <img src="img/goal1.png" height="300px" width="100%"></center> 
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
    <!-- product section -->
    <section id="farmingtools">
        <center> <u><h1 id="fth">OUR MOST SELLING PRODUCTS</h1></u></center>
 
          <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">TRACTORS</h2></u>
             <div class="tools">
             <div class="row item">
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
               <div class="productitem">
               <center>  <img src="productimg/tractor1.webp" class="proimg" height="150px" width="60%"> </center>
                 <h5>Mahindra 275 DI XP Plus</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               
             </div>
             </div>
             
             <div class="col-lg-3 " data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
               <div class="productitem">
             <center> <img src="productimg/tractor2.webp" class="proimg" height="150px" width="60%"></center>
                 <h5>Mahindra 575 DI XP Plus</h5> 
             <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button> </center>
             </div>
             </div>
             
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
               <div class="productitem">
             <center>  <img src="productimg/tractor3.webp" class="proimg" height="150px" width="60%"></center>
                 <h5>Farmtrac 60 Powermaxx</h5> 
             <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
             </div>
             </div>
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
               <div class="productitem">
             <center>  <img src="productimg/tractor4.webp" class="proimg" height="150px" width="60%">  </center>
                 <h5>Mahindra 475 DI XP Plus</h5>
             <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
             </div>
            </div>
         </div>
         </div>
           <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">SHOVELS</h2></u>
             <div class="tools">
             <div class="row item">
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
               <div class="productitem">
                 <center>  <img src="productimg/shovel1.png" class="proimg" height="150px" width="60%"> </center>
                 <h5>INDO Plastic PVC Handle Nose Shovel</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
             </div>
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
               <div class="productitem">
                 <center>  <img src="productimg/shovel2.webp" class="proimg" height="150px" width="60%"> </center>
                 <h5>Plastic Shovel Handle & Pick Axe Handle</h5>
               <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
             </div>
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
               <div class="productitem">
                 <center>  <img src="productimg/shovel3.webp" class="proimg" height="150px" width="60%"> </center>
                 <h5>Wooden Handle Shovel</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
               </div>
             </div>
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
               <div class="productitem">
                 <center>  <img src="productimg/shovel4.webp" class="proimg" height="150px" width="60%"> </center>
                 <h5>Ms handle shovel</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
               </div>
             </div>
         </div>
         </div>
           <u><h2 style="text-align: center; font-size:25px;font-weight:600">RAKES</h2></u>  
             <div class="tools">
            <div class="row item">
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
               <div class="productitem">
                 <center>  <img src="productimg/rake1.jpg" class="proimg" height="150px" width="60%"> </center>
                 <h5>Tools Bae - Garden 6 Teeth Rake </h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
             </div>
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
               <div class="productitem">
                 <center>  <img src="productimg/rake2.jpg" class="proimg" height="150px" width="60%"> </center>
                 <h5>Falcon FRWH-12 Steel Garden Rake</h5>
               <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                </div>
             </div>
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
               <div class="productitem">
                 <center>  <img src="productimg/rake3.jpg" class="proimg" height="150px" width="60%"> </center>
                 <h5>Sharpex Telescopic Metal Rake</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                </div>
             </div>
             <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
               <div class="productitem">
                 <center>  <img src="productimg/rake4.jpg" class="proimg" height="150px" width="60%"> </center>
                 <h5>Telescopic Metal Small Rake</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
               </div> 
             </div>
         </div>
         </div> </section>
         <!-- services section -->
         <div class="row serve">
            <div class="col-lg-12">
            <u> <h1>OUR SERVICES...</h1></u><br><br>
            <p>"Agriculture services encompass a range of vital support mechanisms, including crop consulting, soil analysis, and precision farming technologies, aimed at optimizing crop yields and promoting sustainable farming practices. "</p>
                </div>
             </div>    <br><br>
         <div class="row service1">
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
             <center> <img src="img/farming1.jpeg" width="80%"></center>
                
            </div>
            <div class="col-lg-6 content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center> <u>  <h2>DRIP IRRIGATION SERVICES</h2></u> </center><br><br>
              <p class="firpara">A drip irrigation system is a type of irrigation method that delivers water directly to the base of plants,
                 providing a controlled and efficient way to water crops. Various components make up a drip irrigation system, 
                 and the specific setup can vary based on the scale and requirements of the irrigation project.</p>
                  <br>
                <center>  <b><h4>Drip Emitters:</h4></b></center>
                  <p class="secpara">Drip emitters or drippers release water directly to the soil at the plant's root zone. They come in various types, including pressure-compensating drippers,
                     non-pressure compensating drippers, and adjustable drippers.</p><br>
                <center>   <b><h4>Monitoring and Sensors:</h4></b></center> 
                     <p class="secpara">Some advanced systems may include soil moisture sensors, weather sensors, and other monitoring tools to optimize water usage based on environmental conditions.</p>
                  <center>  <button type="button" class="btn btn-primary btnpri">Book Now</button></center> 
            </div>
         </div>
           <!-- services 2 -->
           <div class="row service1">
            <div class="col-lg-6 content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center> <u>  <h2>ADVANCED TECHNOLOGY SERVICES</h2></u> </center><br><br>
              <p class="firpara">"Experience the forefront of innovation with our advanced technology services, 
                delivering bespoke solutions tailored to elevate your business in the rapidly evolving digital landscape."</p>
                  <br>
                <center>  <b><h4>Precision Farming Technology Integration:</h4></b></center>
                  <p class="secpara">Elevate agricultural practices with our advanced technology services, focusing on the seamless integration of precision farming technologies. </p><br>
                <center>   <b><h4>Smart Irrigation Systems:</h4></b></center> 
                     <p class="secpara">Revolutionize water management in agriculture with our advanced technology services,
                         implementing smart irrigation systems. By incorporating sensors, automation, and data analytics, we ensure precise and efficient water distribution, minimizing waste and maximizing crop health.</p>
                  <center>  <button type="button" class="btn btn-primary btnpri">Book Now</button></center> 
                <center>  <a href="service.php" style="font-size:19px;font-family:'ADLaM Display';margin-top:2%">View more Services...</a></center>
            </div>
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <center> <img id="ser2" src="img/advance1.jpg" width="80%"></center> 
            </div>
         </div>
         <!-- careers section -->
        <div class="row careers">
            <div class="col-lg-6" data-aos="fade-right"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
               <div class="careerspart1">
           <center><img src="img/homecareers.png" width="80%"></center> 
               </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="careerspart2">
             <center> <h2>HELLO FRIENDS...</h2></center><br><br>
              <center> <h4>We are providing best opportunity,</h4></center>
           <center>  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Quaerat sed nihil distinctio odit consectetur! Dolorum, 
                 culpa et explicabo iste commodi sint voluptates facilis.</p></center> 
                 <div class="goto"> 
                 <center> <a href="careers.php">Current Opening..</a></center>
                 </div>
                </div>
            </div>

        </div>
         <!-- news and update section -->
         <center><h1 id="newshead" style="font-weight:600; font-size:40px;font-family:'ADLaM Display'; margin-top:5%;text-shadow:5px 5px 10px white">NEWS AND UPDATES</h1></center>
         <center><h4 style="margin-bottom:4%;font-family:'Sofia';font-size:20px">We are here to give latest news and updates....</h4></center><br><br>
         <div class="row helpnews">
            <div class="col-lg-6 newspart1" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
           
               <div class="news1 update1">
                   <div class="npart1">
                    <center> <img src="img/news11.jpeg"></center> 
                   </div>
                   <div class="npart2">
                       <marquee><u> <h2>PM KISAN YOJANA</h2></u></marquee>
                       <p>દેશના કરોડો ખેડૂતોની આર્થિક સ્થિતિ સુધારવા માટે કેન્દ્ર સરકાર ખેડૂતો માટે અનેક યોજનાઓ લાવે છે.
                          સરકાર દેશમાં ઘણી યોજનાઓ ચલાવી રહી છે. જેના દ્વારા ખેડૂતોને આર્થિક લાભ આપવામાં આવે છે.
                          આવી જ એક યોજના PM Kisan Yojana છે. જે ફેબ્રુઆરી 2019માં શરૂ કરવામાં આવેલી પ્રધાનમંત્રી કિસાન સન્માન નિધિ યોજના છે.
                          જેના હેઠળ ખેડૂતોને દર વર્ષે છ હજાર રૂપિયાની રકમ આપવામાં આવે છે. આ રકમ ખેડૂતોને ત્રણ હપ્તામાં ટ્રાન્સફર કરવામાં આવે છે.</p>
                         <center> <a href="news1.php">View more...</a></center>
                   </div>
           
               </div>
            </div>
            
            <div class="col-lg-6 newspart2" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                <div class="news1 update2">
                    <div class="npart1">
                     <center>  <img src="img/news12.jpeg"></center>
                    </div>
                    <div class="npart2">
                          <marquee>  <u> <h2>PM Krishi Sinchaye Yojna</h2></u> </marquee> 
                        <p>"પ્રધાનમંત્રી કૃષિ સિંચાઈ યોજના" (PMKSY) એ ભારતમાં ચલતી એક યોજના છે જે કૃષિમાં પાણીના સર્વોત્તમ ઉપયોગ અને ઉન્નતિ માટે મુદ્દાઓનો સમાધાન કરવાની ઉદ્દેશથી બનાવવામાં આવેલ છે.
                          આ યોજનાના મુખ્ય લાભાર્થીઓમાં કૃષિક્ષેત્રના કિસ્તાડારો અને કૃષિના અન્ય સંકલન યોજવાનાં વ્યાવસાયિક ઉત્પાદકો શામેલ છે. 
                          આ યોજનાના માધ્યમથી વૃદ્ધિશીલ કૃષિ તંત્રોનો ઉપયોગ થાય છે અને કિસાનોને પાણીના સર્વોત્તમ ઉપયોગ અને ઉપલબ્ધતાને લાભાર્થી બનાવવાનો પ્રયાસ થાય છે.</p>
                        <center> <a href="news2.php">View more...</a></center>
                    </div>
                 </div>
             </div> 
          <center><a href="news.php" style="font-size:30px;font-family:'ADLaM Display'">Click here to see more news...</a></center>    
       </div>
       <!-- help center section -->
       <center><h1 style="font-weight:600; font-size:40px;font-family:'ADLaM Display'; margin-top:5%;text-shadow:5px 5px 10px white">HELP CENTER</h1></center>
       <center><h4 style="margin-bottom:4%;font-family:'Sofia';font-size:27px">We are here to help....</h4></center><br>
       <div class="row">
        <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <div class="help1 help11">
                     <div class="hpart1">
                       <center> <img src="img/helplogo1.png" height="60px" width="60px"></center>
                      </div>
                      <div class="hpart2">
                        <h3>SELLS HELP</h3>
                        <p>"Sellers help offers guidance and support for optimizing the selling experience, product listings, and marketplace queries."
                        </p>
                        <div class="hinner hinner1">
                            <img src="img/calllogo.png" width="40px"><br>
                            <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                            <img src="img/maillogo.png" width="30px"><br>
                            <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                            <img src="img/wp1.png"  width="30px"><br>
                            <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a><br>
                        </div>
                      </div>
              </div>
        </div>
        <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <div class="help1 help12">
                <div class="hpart1">
                    <center> <img src="img/helplogo2.png" height="60px" width="60px"></center>
                    </div>
                    <div class="hpart2">
                        <h3>SERVICE HELP</h3>
                        <p>"Service help optimizes the overall experience, offering support for account management and troubleshooting."
                        </p>
                        <div class="hinner hinner2">
                            <img src="img/calllogo.png" width="40px"><br>
                            <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                            <img src="img/maillogo.png" width="30px"><br>
                            <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                            <img src="img/wp1.png"  width="30px"><br>
                            <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a>    
                        </div>
                    </div> 
             </div>
        </div>
        <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <div class="help1 help13">
                <div class="hpart1">
                    <center>  <img src="img/helplogo3.png" height="60px" width="60px"></center>
                    </div>
                    <div class="hpart2">
                        <h3>INSTALLATION SUPPORT</h3>
                        <p>
                            "Installation help ensures a seamless experience with step-by-step guidance and troubleshooting for successful installations."</p>
                        <div class="hinner hinner3" style="margin-bottom:10%">
                            <img src="img/calllogo.png" width="40px"><br>
                            <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                            <img src="img/maillogo.png" width="30px"><br>
                            <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                            <img src="img/wp1.png"  width="30px"><br>
                            <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a>    
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-lg-3" data-aos="zoom-in"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <div class="help1 help14">
                <div class="hpart1">
                    <center>  <img src="img/helplogo3.png" height="60px" width="60px"></center>
                    </div>
                    <div class="hpart2">
                        <h3>CAREERS SUPPORT</h3>
                        <p>"Careers help optimizes the experience, offering support for shipping, tracking, and account management."</p>
                        <div class="hinner hinner4"  style="margin-bottom:10%">
                            <img src="img/calllogo.png" width="40px"><br>
                            <a href="tel:9664806629" target="_blank" class="call">Mo:9664806629</a><br>
                            <img src="img/maillogo.png" width="30px"><br>
                            <a href="mailto:ithubsoftware@gmail.com"  target="_blank">Mail:ithub software@gmail.com</a><br>
                            <img src="img/wp1.png"  width="30px"><br>
                            <a href="https://api.whatsapp.com/send?phone=919377427987&text=Website%20Visiter">Send:Message via Whatsapp</a>    
                        </div>
                    </div>
            </div>
        </div>
    </div>
         <!-- contact us section -->
         <div class="row">
          <div class="col-lg-12 contact-back">
       <center>   <div class="contact-form" data-aos="fade-left"  data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <div class="top">
                  <center><h2>Get In Touch</h2></center><br>
                  <center><a href="#"><img src="img/twitter-icone.png " height="20px" width="20px"></a>
                  <a href="#"><img src="img/facebook.png" height="20px" width="20px"></a>
                  <a href="#"><img src="img/instagram.png" height="20px" width="20px"></a></center>
              </div><br><br>
              <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="text" aria-describedby="text" placeholder="Your Name...">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your Email...">
                  </div>
                  <div class="form-group">
                      <textarea rows="2" cols="80" class="form-control" placeholder="Enter your message"></textarea>
                    </div>
                 
                <center>  <button type="submit" class="btn btn-primary">SEND</button></center>
                </form></center>
                <div class="contacta"> 
                   <center> <a href="contact.php">Contact Now</a></center> </div>  
                </div>
         
      </div>
      </div>
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