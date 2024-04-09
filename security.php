<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy and Policies</title>
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
       .security h3{
        font-weight:800;
        font-size:35px;
        padding:10px;
       }
      
       .policies-img img{
        width:90%;
        margin-left:9%;
       }
       .priv{
        margin-bottom:5%;
       }
      
       .security h3{
        font-weight:800;
        font-size:35px;
        padding:10px;
        text-align:right;
       }
       .security ol li{
        font-size:18px;
        text-align:justify;
        padding:10px;
        font-family:'ADLaM Display';
       }
       .security-img img{
        width:90%;
       }
       @media screen and (max-width:600px){
        .security h3{
          margin-top:10%;
        }
        .home h4{
          text-shadow:none;
          color:white;
        }
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
    
    
      
    </style>
</head>
<body>
    <?php
       include 'header.php'
    ?>
    <div class="home">
       <center><h1 style="font-weight:600; font-size:55px; margin-top:10%;text-shadow:5px 5px 10px white;">SECURITY</h1></center>
       <center><h4 style="margin-bottom:4%;font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white">Protecting Your World, Securing Your Future...</h4></center><br><br><br>
    </div>   
    <div class="row">
        <div class="col-lg-6 priv sec">
            <div class="security">
            <h3>SECURITY</h3>
          
           <ol>
            <li>Jiya Eco-Products Limited, as an agriculture company, prioritizes robust security measures to safeguard its operations and assets.</li>
            <li>Implementing stringent access controls and surveillance systems ensures the physical security of Jiya Eco-Products Limited's agricultural facilities and equipment.</li>
            <li>Utilizing advanced biometric authentication and RFID technology enhances the security of sensitive areas and equipment, restricting access to authorized personnel only.</li>
            <li>Jiya Eco-Products Limited employs cutting-edge cybersecurity measures such as firewalls, encryption, and intrusion detection systems to protect digital assets and data integrity.</li>
            <li>Regular security assessments and audits are conducted to identify and address vulnerabilities within the company's infrastructure and applications promptly.</li>
           </ol>
            </div>
          </div>
          <div class="col-lg-6 priv sec">
          <div class="policies-img">
            <img src="img/security.jpg">
            </div>
          </div>
    </div>
    <div class="row">
    <div class="col-lg-6 priv">
          <div class="security-img">
            <img src="img/security1.jpeg">
            </div>
          </div>
        <div class="col-lg-6 priv">
            <div class="security">
           <ol type="i">
            <li>Comprehensive employee training programs on cybersecurity best practices empower staff to recognize and respond effectively to potential threats.</li>
            <li>Encryption protocols are applied to both transit and stored data, safeguarding against unauthorized access and data breaches.</li>
            <li>Jiya Eco-Products Limited maintains strict adherence to security policies and procedures, ensuring compliance with industry regulations and standards.</li>
            <li>Strategic partnerships with trusted vendors and service providers who prioritize security further enhance Jiya Eco-Products Limited's overall security posture.</li>
            <li>Continuous monitoring and adaptation of security measures enable Jiya Eco-Products Limited to stay ahead of emerging threats and maintain resilience in the face of evolving challenges.</li>
           </ol>
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
</body>
</html>