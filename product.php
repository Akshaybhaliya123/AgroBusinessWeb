<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
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
        border-bottom-left-radius: 30%;
        border-bottom-right-radius: 30%;
        z-index: -1;
        opacity: 3; 
        top: 0px;
        box-shadow: 10px 10px 20px grey;
        left: 0px;
        
    }
    .home{
      margin-bottom: 2%;
    }
    .fixed{
        position: fixed;
        bottom: 0;
        right: 0;
        opacity: 0.8;
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
        #proh1{
            margin-top: 10%;
            font-size: 55px;
            font-weight: 700;
        }
        
        .productbar{
            border:2px solid rgb(172, 255, 129);
            display:block;
            font-family:'ADLaM Display';
            width: 100%;
            margin-top: 10%;
            padding-top: 10px;
            background-color: rgb(172, 255, 100);  
            color: black;
           
           }
        
         .probar {
            margin-left: 0;
         }
        .probar li{
            display:inline-block;
            list-style: none;
            margin: 5px;
            padding: 5px;
           
            
        }
        .probar li a{
            color:black;
            text-decoration: none;
            padding: 5px;
            font-size: 17px;
            font-weight: 500;
            
        }
        .probar li a:hover,.nav li a.active{
            text-decoration: none;
            color:white;
            background-color: black;
            border: 2px solid green;
            border-radius: 10px;
        }
        .product h2{
          align-items: center;
        }
      /*        farming tools section             */
      
      #fth{
        margin-top: 3%;
        margin-bottom: 4%;
        font-weight: 700;
        border: 2px solid white;
        background-color: black;
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
          color: white;
          border-radius:10px;
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
  @media screen and (max-width:500px){
    .home::before{
      height:460px;
    }
  }
  @media screen and (max-width:600px){
    .product h4{
        text-shadow:none;
        color:white;
      
    }
  }
      
    </style>
</head>
<body>
    
    <?php
       include 'header.php'
     ?>
    <div class="home">

    </div>
         <div class="product">
           <center> <h1 id="proh1" style="text-shadow:5px 5px 10px white">PRODUCTS</h1>  </center>
           <center><h4 style="font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white">We produce organic food here....</h4></center><br><br><br>
           <div class="productbar" id="productbar">
        <center><ul class="probar">
            <li><a href="#farmingtools">FARMING TOOLS</a></li>
             <li><a href="#dripirrigation">DRIP IRRIGATION</a></li>
             <li><a href="#sprinkler">SPRINKLER IRRIGATION</a></li>
             <li> <a href="#pvcpipe">PVC & HDPE PIPE</a></li>
             <li><a href="#plumbing">PLUMBING & DRAINAGE</a></li>
             <li><a href="#planting">PLANTING MATERIAL</a></li>
             <li> <a href="#eca">ECA</a></li>
             <li><a href="#gep">GEP</a></li></center>
            </ul> 
         </div>
         <section id="farmingtools">
           <center> <u><h1 id="fth">FARMING TOOLS</h1></u></center>
    
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
                
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
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
            </div>
         <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">SEEDERS</h2></u> 
                <div class="tools">
                <div class="row item">
                <div class="col-lg-3 " data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                  <div class="productitem">
                    <center>  <img src="productimg/seeder1.jpg" class="proimg" height="150px" width="60%"> </center>
                    <h5>Manual Seeder ( Hand Push ) KK- MSD- B1</h5>
                  <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                  </div>
                </div>
                 <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                  <div class="productitem">
                    <center>  <img src="productimg/seeder2.jpg" class="proimg" height="150px" width="60%"> </center>
                    <h5>Seeder Cum Fertilizer Double KK-MSD-SF02</h5>
                  <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                   </div>
                </div>
                 <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                  <div class="productitem">
                    <center>  <img src="productimg/seeder3.jpg" class="proimg" height="150px" width="60%"> </center>
                    <h5>Seeder Single Barrel (Manual) KK-MSD-S01</h5>
                  <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                  </div>
                </div>
                 <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">   
                  <div class="productitem">
                    <center>  <img src="productimg/seeder4.jpg" class="proimg" height="150px" width="60%"> </center>
                    <h5>Seedling Transplanter (Manual) KK-MBT-01</h5>
                  <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                  </div>
                </div>
            </div>
            </div>
         </section>
         <!-- Drip Irrigation section -->
         <section id="dripirrigation">
          <center> <u><h1 id="fth">DRIP IRRIGATION</h1></u></center>
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">DRIP LINE</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                 <center>  <img src="productimg/dripline1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Jain Turbo Cascade PC, PCNL & PCAS</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center> <img src="productimg/dripline2.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Jain Turbo Top PC & PCAS</h5> 
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div> 
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center>  <img src="productimg/dripline3.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Jain Turbo Top PC & PCAS</h5> 
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center>  <img src="productimg/dripline4.png" class="proimg" height="150px" width="60%">  </center>
                   <h5>Jain Mini Pepline</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
               </div>
              </div>
              <u> <h2 style="text-align: center; font-size:25px;font-weight:600">POLY TUBES</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/polytube1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Poly Tube</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/polytube2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Extension Tube</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>   
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/polytube3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Vinyl Tube</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/polytube4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Jain Spray Hose</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                  </div>
               </div>
           </div>
          </div>
             <u><h2 style="text-align: center; font-size:25px;font-weight:600">EMITTER / DRIPPER</h2></u>  
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/emmiter1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>J-SC-PC-Plus </h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/emmiter2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Micro Flapper™</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                  </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/emmiter3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Vari Flow ™ Dripper</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">  
                <div class="productitem">
                   <center>  <img src="productimg/emmiter4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Mini Inline Emitter</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
           </div>
          </div>
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">POLY-FITTINGS & ACCESSORIES</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/fitting1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Emitting Pipe Tee</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/fitting2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Dripline Joiner</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                  </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/fitting3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Poly Threaded Adaptor</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                  </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">   
                <div class="productitem">
                   <center>  <img src="productimg/fitting4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Power-Loc™ 90° Elbow</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
           </div>
           </div>
        </section>
        <!-- Sprinkler Irrigation -->
        <section id="sprinkler">
          <center> <u><h1 id="fth">SPRINKLER IRRIGATION</h1></u></center>
          
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">PLASTIC SPRINKLERS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                 <center>  <img src="productimg/plastic1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>5035 SD/UL Sprinkler</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center> <img src="productimg/plastic2.png" class="proimg" height="150px" width="60%"></center>
                   <h5>5035 SD LP Sprinkler</h5> 
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button> </center>
               </div> 
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center>  <img src="productimg/plastic3.png" class="proimg" height="150px" width="60%"></center>
                   <h5>5035 SD Sprinkler</h5> 
               <center>  <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center>  <img src="productimg/plastic4.png" class="proimg" height="150px" width="60%">  </center>
                   <h5>5035 SD PC Sprinkler</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
           </div>
          </div>
            <u>   <h2 style="text-align: center; font-size:25px;font-weight:600">METAL SPRINKLERS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/metal1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>JI - 1 Sprinkler</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/metal2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>JI - 2PC Sprinkler</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                   </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/metal3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>421P & 421P AG</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                   </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/metal4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>233 B PC</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
           </div>
          </div>
             <u> <h2 style="text-align: center; font-size:25px;font-weight:600">RAINGUNS(Long Range Sprinklers)</h2></u> 
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/rainguns1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5> JI5 Sprinkler</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/rainguns2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>280 PC Rainguns</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/rainguns3.png"class="proimg"  height="150px" width="60%"> </center>
                   <h5>Hydrojet AP 101</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                  </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">  
                <div class="productitem">
                   <center>  <img src="productimg/rainguns4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Twin 140 Plus</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
           </div>
           </div>
              <u><h2 style="text-align: center; font-size:25px;font-weight:600">GARDEN & LANDSCAPE ACURAIN SPRINKLERS</h2></u> 
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/garden1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Acurain PopStar Plus J1</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/garden2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Acurain PopStar Plus J3/J35</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>   
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/garden3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Acurain PopUp 805</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">   
                <div class="productitem">
                   <center>  <img src="productimg/garden4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Acurain 427 B</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
           </div>
           </div>
        </section>
        <section id="pvcpipe">
          <center> <u><h1 id="fth">PVC & HDPE Pipe</h1></u></center>
           
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">PVC INJECTION MODULEDED FITTINGS</h2></u>
               <div class="tools">
                <div class="row item">
                  <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                  <div class="productitem">
                 <center>  <img src="productimg/pvcinjected1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>End Cap Threaded</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center> <img src="productimg/pvcinjected2.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Reducing Tee</h5> 
               <center>  <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button> </center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center>  <img src="productimg/pvcinjected3.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Reducing Elbow 90º</h5> 
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center>  <img src="productimg/pvcinjected4.png" class="proimg" height="150px" width="60%">  </center>
                   <h5>Service Saddle</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
           </div>
          </div>
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">PVC FABRICATED FITTINGS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pvcfabri1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>PVC Solvent Cement Socket</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pvcfabri2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>PVC Solvent Cement Bend 30°</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>   
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/pvcfabri3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Bllind Flange</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/pvcfabri4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>PVC 225 MM TOP CAP WITH 80 MM</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
           </div>
           </div>
           <u>    <h2 style="text-align: center; font-size:25px;font-weight:600">PVC WELL CASING & SCREEN PIPE FITTINGS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pvccasing1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5> CASING MOULDED END CAP</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/pvccasing2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>CASING FABRICATED REDUCER</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pvccasing3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>CASING FABRICATED END CAP</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">  
                <div class="productitem">
                   <center>  <img src="productimg/pvccasing4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>CASING CENTRILIZER</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
           </div>
           </div>
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">VALVES</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pvcvalve1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Jain PVC Ball Valves® DU</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pvcvalve2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Gate Valve PL</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                   </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/pvcvalve3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Flush Valve</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/pvcvalve4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Jain Check Valves</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>  
               </div>
           </div>
          </div>
        </section>
        <!-- Plumbing & Drainage -->
        <section id="plumbing">
          <center> <u><h1 id="fth">Plumbing & Drainage</h1></u></center>
           
           <u>    <h2 style="text-align: center; font-size:25px;font-weight:600">CPVC HOT AND COLD WATER PLUMBING FITTINGS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                 <center>  <img src="productimg/cpvc1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>CPVC Coupler</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center> <img src="productimg/cpvc2.png" class="proimg" height="150px" width="60%"></center>
                   <h5>CPVC Female Threaded Adaptor </h5> 
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button> </center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center>  <img src="productimg/cpvc3.png" class="proimg" height="150px" width="60%"></center>
                   <h5>CPVC Ball Valve Heavy Duty</h5> 
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center>  <img src="productimg/cpvc4.png" class="proimg" height="150px" width="60%">  </center>
                   <h5>CPVC Pipe Clip</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
           </div>
          </div>
          
            <u>   <h2 style="text-align: center; font-size:25px;font-weight:600">UPVC ASTM PLUMBING FITTINGS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/upvc1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UPVC ASTM 90° Elbow</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/upvc2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UPVC ASTM Tank Connector </h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/upvc3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UPVC ASTM Male Threaded Adaptor</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/upvc4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UPVC ASTM Union</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
           </div>
           </div>
             <u> <h2 style="text-align: center; font-size:25px;font-weight:600">PVC SWR TRAPES & ACCESSORIES</h2></u> 
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/swr1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5> UPVC SWR Vent Cowl</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/swr2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UPVC SWR Nahani Trap With Jali</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                  </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/swr3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UPVC SWR Multi Floor Trap Jali</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">  
                <div class="productitem">
                   <center>  <img src="productimg/swr4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UPVC SWR Single Tee RR Type With Door </h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
           </div>
          </div>
            <u>   <h2 style="text-align: center; font-size:25px;font-weight:600">PVC UNDERG-ROUND DRAINAGE FITTINGS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/drainageunder1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UDS 11.25° SWEEP BEND SOLVENT TYPE</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/drainageunder2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UDS 90° SWEEP BEND SOLVENT TYPE</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                  </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/drainageunder3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UDS MOULDED  TEE SOLVENT TYPE</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">   
                <div class="productitem">
                   <center>  <img src="productimg/drainageunder4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>UDS 90° ELBOW SOLVENT TYPE</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
           </div>
           </div>
        </section>
        <!-- planting materials..... -->
        <section id="planting">
          <center> <u><h1 id="fth">Planting Material</h1></u></center>
           <u>    <h2 style="text-align: center; font-size:25px;font-weight:600">TISSUE CULTURE PLANTS
              </h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                 <center>  <img src="productimg/tplant1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Banana PH</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center> <img src="productimg/tplant2.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Pomegranate Premium</h5> 
               <center>  <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button> </center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center>  <img src="productimg/tplant3.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Jain Sweet Orange - RTB</h5> 
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center>  <img src="productimg/tplant4.png" class="proimg" height="150px" width="60%">  </center>
                   <h5>Guava - Premium</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
           </div>
          </div>
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600"">SEEDLINGS - VEGETABLES & FRUITS</h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/seedling1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Onion</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/seedling2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Tomato</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>   
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/seedling3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Mango</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/seedling4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Custard Apple</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
           </div>
           </div>
          
            <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">FORESTRY PLANTS </h2></u> 
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/foresty1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Alastonia</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/foresty2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Bamboo</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                  </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/foresty3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Kadamb</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">  
                <div class="productitem">
                   <center>  <img src="productimg/foresty4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Pimpal-Bhend</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
           </div>
           </div>
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">MEDICINAL PLANTS
              </h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/mplant1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Kadhipatta</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/mplant2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Tulsi</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/mplant3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Patharchatta</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem"> 
                   <center>  <img src="productimg/mplant4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Aloe Vera</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div> 
               </div>
           </div>
           </div>
        </section>
        <!-- Environment controlled agriculture... -->
        <section id="eca">
          <center> <u><h1 id="fth">Environment Controlled Agriculture</h1></u></center>
             <u>  <h2 style="text-align: center; font-size:25px;font-weight:600">PROTECTED ARICULTURE </h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                 <center>  <img src="productimg/protect1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Green House</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center> <img src="productimg/protect2.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Poly House</h5> 
               <center>  <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button> </center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center>  <img src="productimg/protect3.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Poly Tunnel</h5> 
               <center>  <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center>  <img src="productimg/protect4.png" class="proimg" height="150px" width="60%">  </center>
                   <h5>Net Houses</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
           </div>
           </div>
             <u> <h2 style="text-align: center; font-size:25px;font-weight:600">FUTURE FARMING
              </h2></u> 
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/future1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Soil-Less Growing</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/future2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Hydroponics Systems</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/future3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Aeroponics Systems</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/future4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Vertical Farming</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>  
                 </div>
               </div>
           </div>
           </div>
        </section>
        <!-- Green Energy Products.... -->
        <section id="gep">
          <center> <u><h1 id="fth">Green Energy Products</h1></u></center>
            <u>   <h2 style="text-align: center; font-size:25px;font-weight:600">SOLAR WATER HEATING SYSTEMS
              </h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                 <center>  <img src="productimg/solarwater1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Evacuated Tube Collector (ETC)</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center> <img src="productimg/solarwater2.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Flat Plate Collector(FPC) Systems</h5> 
               <center>  <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
               <center>  <img src="productimg/solarwater3.png" class="proimg" height="150px" width="60%"></center>
                   <h5>Jain SunPlast Collector Systems</h5> 
               <center>  <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
               <center>  <img src="productimg/solarwater4.png" class="proimg" height="150px" width="60%">  </center>
                   <h5>Commercial & Industrial Systems</h5>
               <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
               </div>
               </div>
           </div>
           </div>
              <u> <h2 style="text-align: center; font-size:25px;font-weight:600">SOLAR PHOTOVOLTAIC MODULE </h2></u>
               <div class="tools">
                <div class="row item">
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pv1.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>PV Module 10–100 Wp</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center>
                 </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                <div class="productitem">
                   <center>  <img src="productimg/pv2.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>PV Module 260–270 Wp</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                  
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/pv3.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>Modules 320 - 335 Wp</h5>
                 <center><button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                 
                </div>
               </div>
                <div class="col-lg-3" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500"> 
                <div class="productitem">
                   <center>  <img src="productimg/pv4.png" class="proimg" height="150px" width="60%"> </center>
                   <h5>BIPV Transparent Modules 260-270 Wp</h5>
                 <center> <button type="button" class="cart"><a href="inquiry.php">Inquiry Now</a></button></center> 
                </div>
               </div>
           </div>
          </div>
        </section>

         </div>
         <?php
           include 'footer.php'
          ?>
     <div class="up">
      <a href="#productbar"><img src="img/up.png" id="top" width="40px"></a>
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