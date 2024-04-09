<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fredoka' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
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
            box-shadow: 10px 10px 20px grey;
            border-bottom-right-radius: 30%;
            z-index: -1;
            opacity: 3; 
            top: 0px;
            left: 0px;
            
        }
        .home{
            margin-bottom: 2%;
        }
       /* farming services section*/
       .serve h1{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 30px;
        font-weight: 700;
        text-align: center;
        justify-content: center;
        margin-bottom: 2%;
        margin-top: 2%;
       }
       .serve p{
        text-align:justify;
        font-size: 22px;
        font-family:'ADLaM Display';
        font-weight: 500;
        color: black;
        
        padding: 21px;
        background-color: rgb(186, 255, 107);
       }
       .service1{
        background-color: rgb(232, 255, 232);
       }
       
       .fs{
         margin-top: 15%;
         border: 2px solid black;
         box-shadow: 5px 5px 10px green;
       }
       .ms{
         margin-top: 10%;
         border: 2px solid black;
         box-shadow: 5px 5px 10px green;
       }
       .es{
         margin-top: 10%;
         border: 2px solid black;
         box-shadow: 5px 5px 10px green;
       }
       .fs,.ms,.es:hover{
        transform: scale(0.95);
        cursor: pointer;
       }
       
       .service1 h4{
        font-size: 16px;
        font-weight: 600;
        font-family: 'Croissant One';
       }
       .service1 h3{
        margin-top: 8%;
        font-weight: 600;
        font-family:'Bungee';
       }
       .firpara{
        font-size: 16px;
        font-weight: 400;
        font-family: 'Fredoka';
        text-align: justify;
           }
       .secpara{
        font-size: 14px;
        text-align: justify;
        font-family: 'Fredoka';
       }
       .content{
        background-color: white;
        padding-bottom:20px;
       }
       .btn-primary{
        margin-bottom: 5%;
        height: 40px;
        width: 200px;
        font-weight: 400;
        font-size: 16px;

       }
       .btna{
        color:white;
        text-decoration:none;
        font-weight: 400;
        font-size: 16px;
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
        @media screen and (max-width:600px){
          .home h4{
            text-shadow:none;
            color:white;
          }
          .fs,.ms,.es{
            margin-bottom:10%;
          }
          .firpara,.secpara{
            font-size:18px;
          }
          .service1 h4{
            font-size:22px;
          }
         
        }
        @media screen and (max-width:550px){
          .home::before{
            height:450px;
          }
        }
    </style>
</head>
<body>
    
<?php  
  include 'header.php'
?>

        <div class="home">
            <center><h1 style="font-weight:600; font-size:55px; margin-top:10%; margin-bottom:1%;text-shadow:5px 5px 10px white">SERVICES</h1></center>
        <center><h4 style="font-family:'ADLaM Display'; font-size:30px;text-shadow:5px 5px 10px white">Delivering Excellence With Our Services....</h4></center>
    <br><br><br></div>
         <div class="row serve" id="farming">
            <div class="col-lg-12" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <u> <h1 style="margin-top:5%">FARMING SERVICES...</h1></u><br><br>
            <p>"Farming services provide essential support to agricultural operations, offering expertise in crop management,
                 pest control, and equipment maintenance. These services contribute to increased efficiency and sustainable practices, 
                 ensuring farmers can optimize their yields and meet the demands of a growing population."</p>
                </div>
             </div>    <br><br>
         <div class="row service1">
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
             <center> <img src="img/farming1.jpeg" width="80%" class="fs"></center>
                
            </div>
            <div class="col-lg-6 content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center> <u>  <h3>DRIP IRRIGATION SERVICES</h3></u> </center><br><br>
              <p class="firpara">A drip irrigation system is a type of irrigation method that delivers water directly to the base of plants,
                 providing a controlled and efficient way to water crops. Various components make up a drip irrigation system, 
                 and the specific setup can vary based on the scale and requirements of the irrigation project.</p>
                  <br>
                <center>  <b><h4>Drip Emitters:</h4></b></center>
                  <p class="secpara">Drip emitters or drippers release water directly to the soil at the plant's root zone. They come in various types, including pressure-compensating drippers,
                     non-pressure compensating drippers, and adjustable drippers.</p><br>
                <center>   <b><h4>Monitoring and Sensors:</h4></b></center> 
                     <p class="secpara">Some advanced systems may include soil moisture sensors, weather sensors, and other monitoring tools to optimize water usage based on environmental conditions.</p>
                  <center>  <button type="button" class="btn btn-primary"><a class="btna" href="serviceform.php">Book Now</a></button></center> 
            </div>
         </div>
         <!-- services 2 -->
         <div class="row service1">
            <div class="col-lg-6 content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center>  <u> <h3>SPRINKLER IRRIGATION SERVICES</h3></u> </center><br><br>
              <p class="firpara">"Sprinkler irrigation services efficiently distribute water over agricultural fields or landscaped areas,
                 ensuring uniform coverage for optimal plant growth.
              </p>
                  <br>
                <center>  <b><h4>Precision Sprinkler Installation:</h4></b></center>
                  <p class="secpara">Our expert team specializes in designing and installing precision sprinkler systems tailored to the specific needs of your agricultural or landscaping project. 
                    With cutting-edge technology, we ensure efficient water distribution, minimizing waste and promoting healthy plant growth.
                    </p><br>
                <center>   <b><h4>Routine Maintenance and Repairs:</h4></b></center> 
                     <p class="secpara">Trust our skilled technicians to keep your sprinkler system in top condition. Our comprehensive maintenance services include regular inspections, cleaning, and prompt repairs to guarantee uninterrupted and reliable irrigation,
                         allowing you to focus on the success of your crops or the beauty of your landscape.</p>
                  <center>  <button type="button" class="btn btn-primary"><a class="btna" href="serviceform.php">Book Now</a></button></center> 
            </div>
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <center> <img src="img/farming2.jpeg" width="80%" class="fs"></center> 
            </div>
         </div>
         <!-- service 3 -->
         <div class="row service1">
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
             <center> <img src="img/farming3.jpg" width="80%" class="fs"></center>
                
            </div>
            <div class="col-lg-6 content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center> <u>  <h3>LAND MANAGEMENT SERVICES</h3></u> </center><br><br>
              <p class="firpara">"Our land management services offer comprehensive solutions for sustainable and efficient land use.
                 From ecological restoration to resource optimization, our expert team ensures responsible and environmentally friendly practices,
                  promoting the long-term health and productivity of your land."</p>
                  <br>
                <center>  <b><h4>Ecological Restoration and Conservation:</h4></b></center>
                  <p class="secpara">Our land management services include specialized programs for ecological restoration, enhancing biodiversity, and preserving natural habitats. </p><br>
                <center>   <b><h4>Land Resource Optimization and Planning:</h4></b></center> 
                     <p class="secpara">Harness the full potential of your land with our resource optimization and planning services.
                       Our team conducts thorough assessments to develop tailored land management strategies, optimizing land use for agriculture, forestry, 
                       or development while considering environmental conservation and sustainable practices.</p>
                  <center>  <button type="button" class="btn btn-primary"><a class="btna" href="serviceform.php">Book Now</a></button></center> 
            </div>
         </div>
        <!-- maintenance services -->
        <div class="row serve" id="maintanance">
            <div class="col-lg" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
            <u><h1 style="margin-top:5%">MAINTENANCE SERVICES...</h1></u><br><br>
            <p>"Specialized agricultural maintenance services ensure the optimal functioning of farm equipment and infrastructure, fostering sustainable and efficient farming practices. From machinery upkeep to irrigation system maintenance,
               these services play a crucial role in enhancing productivity and promoting long-term agricultural success."</p>
                </div>
         </div>    </div> <br><br>
         <div class="row service1">
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
             <center> <img src="img/maintenance1.png" width="80%" class="ms"></center>
                
            </div>
            <div class="col-lg-6 content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center><u>   <h3>GREEN HOUSE MAINTENANCE SERVICES</h3></u> </center><br><br>
              <p class="firpara">"Our greenhouse services offer a seamless blend of technology and expertise, providing customized solutions for controlled-environment agriculture. 
                From design and installation to climate control systems, we empower clients with the tools needed to maximize crop yields and ensure year-round productivity in a sustainable manner."</p>
                  <br>
                <center>  <b><h4>Climate Control System Maintenance:</h4></b></center>
                  <p class="secpara">Ensure optimal growing conditions with our greenhouse maintenance services, focusing on the meticulous upkeep of climate control systems.</p><br>
                <center>   <b><h4>Structural Integrity Inspections and Repairs:</h4></b></center> 
                     <p class="secpara">Preserve the longevity of your greenhouse infrastructure with our maintenance expertise. We offer routine inspections and prompt repairs to address any structural issues, 
                        ensuring the durability and stability of the greenhouse framework, covering everything from glazing to frame integrity.</p>
                  <center>  <button type="button" class="btn btn-primary"><a class="btna" href="serviceform.php">Book Now</a></button></center> 
            </div>
         </div>
         <!-- services 2 -->
         <div class="row service1">
            <div class="col-lg-6 content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center><u>   <h3>MACHINERY REPAIR AND MAINTAIN SERVICES</h3></u> </center><br><br>
              <p class="firpara">Our machinery repair and maintenance services are dedicated to keeping your equipment in peak operating condition. With a team of skilled technicians, 
                we provide timely repairs and proactive maintenance, ensuring the reliability, efficiency, and longevity of your machinery for uninterrupted productivity."</p>
                  <br>
                <center>  <b><h4>Preventive Maintenance Programs:</h4></b></center>
                  <p class="secpara">Maximize the lifespan and performance of your machinery with our preventive maintenance services. </p><br>
                <center>   <b><h4>Emergency Breakdown Repairs:</h4></b></center> 
                     <p class="secpara">Count on our responsive team for swift and effective emergency breakdown repairs. Whether it's a sudden malfunction or unexpected downtime,
                         our skilled technicians are available around the clock to diagnose, troubleshoot, and resolve issues promptly, ensuring minimal disruption to your operations.</p>
                  <center>  <button type="button" class="btn btn-primary"><a class="btna" href="serviceform.php">Book Now</a></button></center> 
            </div>
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <center> <img src="img/maintenance2.jpeg" width="80%" class="ms"></center> 
            </div>
         </div>
         <!-- Engineering and technology services -->
         <div class="row serve" id="engineering">
            <div class="col-lg" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
           <u> <h1 style="margin-top:5%">ENGINEERING AND TECHNOLOGY SERVICES...</h1></u><br><br>
            <p>"Engineering and technology services in agriculture encompass the development and implementation of cutting-edge solutions, such as precision farming techniques and smart sensor systems,
               to enhance crop yield and resource efficiency. These services integrate innovation into farming practices, promoting sustainable and technologically-driven advancements in the agricultural sector." </p>
         </div>
         </div>  </div> <br><br>
         <!-- services 2 -->
         <div class="row service1">
            <div class="col-lg-6 content" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center> <u>  <h3>ADVANCED TECHNOLOGY SERVICES</h3></u> </center><br><br>
              <p class="firpara">"Experience the forefront of innovation with our advanced technology services, 
                delivering bespoke solutions tailored to elevate your business in the rapidly evolving digital landscape."</p>
                  <br>
                <center>  <b><h4>Precision Farming Technology Integration:</h4></b></center>
                  <p class="secpara">Elevate agricultural practices with our advanced technology services, focusing on the seamless integration of precision farming technologies. </p><br>
                <center>   <b><h4>Smart Irrigation Systems:</h4></b></center> 
                     <p class="secpara">Revolutionize water management in agriculture with our advanced technology services,
                         implementing smart irrigation systems. By incorporating sensors, automation, and data analytics, we ensure precise and efficient water distribution, minimizing waste and maximizing crop health.</p>
                  <center>  <button type="button" class="btn btn-primary"><a class="btna" href="serviceform.php">Book Now</a></button></center> 
            </div>
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <center> <img src="img/advance1.jpg" width="80%" class="es"></center> 
            </div>
         </div>
         <!-- service 3 -->
         <div class="row service1">
            <div class="col-lg-6 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
             <center> <img src="img/advance2.png" width="80%" class="es"></center>
                
            </div>
            <div class="col-lg-6 content" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
              <center><u> <h3>RESEARCH SERVICES</h3></u> </center><br><br>
              <p class="firpara">"Empower your insights with our research services,
                 dedicated to providing comprehensive and tailored solutions that drive informed decision-making across diverse industries."
              </p>
                  <br>
                <center>  <b><h4>Crop Genetics Research:</h4></b></center>
                  <p class="secpara">Dive into the future of agriculture with our specialized research services in crop genetics.
                     Our experts explore and analyze genetic traits to develop crops with enhanced resilience, higher yields,
                     and improved nutritional profiles, contributing to sustainable and productive farming practices.</p><br>
                <center>   <b><h4>Sustainable Agriculture Practices Studies:</h4></b></center> 
                     <p class="secpara">Navigate the path to sustainable farming through our research services focusing on sustainable agriculture practices. We conduct in-depth studies to evaluate and recommend environmentally friendly methods, resource-efficient technologies,
                         and regenerative farming approaches to enhance agricultural productivity while minimizing ecological impact.</p>
                  <center>  <button type="button" class="btn btn-primary"><a class="btna" href="serviceform.php">Book Now</a></button></center> 
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