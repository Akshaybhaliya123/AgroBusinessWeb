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
       .privacy h3{
        font-weight:800;
        font-size:35px;
        padding:10px;
       }
       .privacy p{
        font-size:18px;
        text-align:justify;
        padding:10px;
        font-family:'ADLaM Display';
       }
       .privacy-img img{
        width:90%;
        margin-left:9%;
        border-bottom-left-radius:20%;
       }
       .priv{
        margin-bottom:5%;
       }
       .policies h3{
        font-weight:800;
        font-size:35px;
        padding:10px;
        text-align:right;
       }
       .policies p{
        font-size:18px;
        text-align:justify;
        padding:10px;
        font-family:'ADLaM Display';
       }
       .policies-img img{
        width:90%;
        border-top-right-radius:20%;
       }
        /*footer section*/
        @media screen and (max-width:600px){
            .home h4{
              text-shadow:none;
              color:white;
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
       <center><h1 style="font-weight:600; font-size:55px; margin-top:10%;text-shadow:5px 5px 10px white;">Privacy and Policies</h1></center>
       <center><h4 style="margin-bottom:4%;font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white">Protecting Trust, Honoring Privacy...</h4></center><br><br><br>
    </div>   
    <div class="row">
        <div class="col-lg-6 priv">
            <div class="privacy">
            <h3>PRIVACY</h3>
            <p>
            At our Agriculture business website, we prioritize your privacy above all else.
            We understand the sensitivity of your agricultural data and commit to safeguarding it with utmost care.
            Rest assured, your personal information and farming data are securely stored and only used for intended purposes.
            We adhere to strict privacy policies and industry standards to ensure the confidentiality of your data.
            Your trust is paramount to us, and we maintain transparent practices regarding data collection and usage.
            Our website employs advanced encryption technologies to protect your information from unauthorized access.
            We respect your right to control your data and provide options for managing your privacy preferences.
            Any data shared with us remains strictly confidential and is never sold or shared with third parties without your consent.
            Our commitment to privacy extends to every interaction you have with our website and services.
            Should you have any concerns regarding privacy, our dedicated support team is always available to address them promptly and effectively.
            </p>
            </div>
          </div>
          <div class="col-lg-6 priv">
          <div class="privacy-img">
            <img src="img/privacy.jpg">
            </div>
          </div>
    </div>
    <div class="row">
    <div class="col-lg-6 priv">
          <div class="policies-img">
            <img src="img/policy.jpg">
            </div>
          </div>
        <div class="col-lg-6 priv">
            <div class="policies">
            <h3>POLICIES</h3>
            <p>
            Our Agriculture business website operates under clear and transparent policies to ensure trust and reliability.
            We adhere to strict quality assurance policies to guarantee the excellence of our agricultural products and services.
            Our pricing policies are fair and competitive, reflecting our commitment to providing value to our customers.
            Environmental sustainability is at the core of our policies, guiding our practices to minimize ecological impact.
            We maintain strict adherence to safety protocols in accordance with industry standards to protect both our customers and employees.
            Our privacy policies prioritize the confidentiality and security of customer data, maintaining compliance with relevant regulations.
            We have robust return and refund policies in place to ensure customer satisfaction and confidence in our products.
            Ethical sourcing policies govern our procurement practices, promoting fair treatment of suppliers and producers.
            Accessibility policies are integrated into our website design to ensure equal access and usability for all visitors.
            Continuous improvement is driven by our commitment to review and update our policies to reflect evolving best practices and feedback from our stakeholders.
            </p>
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