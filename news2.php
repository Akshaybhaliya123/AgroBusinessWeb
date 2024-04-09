<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Fredoka' rel='stylesheet'>
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
        #news{
            background-color: white;
        }
        .newspart1{
            background-color: white;
            margin-top: 5%;
           
        }
        .newspart2{
            background-color:white;
            border-left: 2px solid black;
            margin-top: 5%;
        }
        .news1{
            margin-bottom: 4%;
            margin-top: 2%;
            width: 60%;
            border: 2px solid black;
            box-shadow: 5px 5px 10px green;
        }
        .part1 img{
            margin-bottom: 20px;
            width: 100%;
        }
        .part2 h1{
            font-size: 30px;
            font-weight: 600;
            font-family:'Bungee';
            margin-bottom: 5%;
            margin-top: 3%;
            padding-top: 5%;
            text-align:center;
            justify-content: center;
           }
           .part2 h2{
            margin-top: 3%;
            margin-bottom: 2%;
            font-size: 25px;
            font-family: 'Croissant One';
            font-weight: 600;
            text-align: center;
            justify-content: center;
           }
           .part2 p{
            font-size: 17px;
            font-weight: 400;
            text-align: justify;
            font-family: 'Fredoka';
            justify-content: center;
            width: 80%;
           }
           .p2{
            font-size: 17px;
            font-weight: 500;
            text-align: justify;
            font-family: 'Fredoka';
            justify-content: center;
            width: 80%;
           }
           .part2 li{
            text-align: left;
            justify-content: center;
            font-size: 17px;
            font-weight: 400;
            width: 80%;
            font-family: 'Fredoka';
            list-style: none;
            
           }
           #p1{
            font-size: 17px;
            font-weight: 400;
            font-family: 'Fredoka';
            text-align: center;
            justify-content: center;
           }
           @media screen and (max-width:600px){
            .home h4{
              text-shadow:none;
              color:white;
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
            <center><h1 style="font-weight:600; font-size:55px; margin-top:10%;text-shadow:5px 5px 10px white">NEWS AND UPDATES</h1></center>
            <center><h4 style="font-family:'ADLaM Display'; font-size:30px;margin-bottom:4%;text-shadow:5px 5px 10px white">We are here to give latest news and updates....</h4></center><br><br><br>
        </div>
        <section id="news">
           
            <div class="row">
                
               <div class="col-lg-6 newspart1">
                
                   <marquee direction="up">
                    <center>
                      <div class="news1">
                         <div class="part1">
                           <img src="img/news22.jpeg">
                         </div>
                       </div>
                    </center>
                    </marquee> 
                    <marquee direction="up">
                    <center>
                       <div class="news1">
                          <div class="part1">
                            <img src="img/news23.jpeg">
                          </div>
                       </div>
                    </center>
                     </marquee>  
                     <marquee direction="up">
                     <center>
                        <div class="news1">
                          <div class="part1">
                           <img src="img/news24.jpeg">
                         </div>
                        </div>
                    </center>
                     </marquee>
                    <marquee direction="up">
                    <center>
                      <div class="news1">
                        <div class="part1">
                         <img src="img/news25.jpeg">
                        </div>
                      </div>
                    </center>
                    </marquee>
                    <marquee direction="up">
                        <center>
                          <div class="news1">
                             <div class="part1">
                               <img src="img/news22.jpeg">
                             </div>
                           </div>
                        </center>
                        </marquee> 
                 </div>
                <div class="col-lg-6 newspart2">
                    <div class="part2">
                        <h1>PRADHAN MANTRI KRISHI SINCHAYE YOJANA</h1> 
                   <center>    <b> <p>"પ્રધાનમંત્રી કૃષિ સિંચાઈ યોજના" (PMKSY) એ ભારતમાં ચલતી એક યોજના છે જે કૃષિમાં પાણીના સર્વોત્તમ ઉપયોગ અને ઉન્નતિ માટે મુદ્દાઓનો સમાધાન કરવાની ઉદ્દેશથી બનાવવામાં આવેલ છે.
                           આ યોજનાના મુખ્ય લાભાર્થીઓમાં કૃષિક્ષેત્રના કિસ્તાડારો અને કૃષિના અન્ય સંકલન યોજવાનાં વ્યાવસાયિક ઉત્પાદકો શામેલ છે. 
                           આ યોજનાના માધ્યમથી વૃદ્ધિશીલ કૃષિ તંત્રોનો ઉપયોગ થાય છે અને કિસાનોને પાણીના સર્વોત્તમ ઉપયોગ અને ઉપલબ્ધતાને લાભાર્થી બનાવવાનો પ્રયાસ થાય છે.</p><br><br></b></center>
                           <h2>Objectives of Krishi Sinchai Yojana</h2>
                     <center>   <ul>
                        <li>  • Convergence of irrigation investments at the field level (preparation of district level and, if required, sub-district level water use plans).</li><br>
                        <li>  • Improve physical access to water on the farm and extend cultivable land under guaranteed irrigation (Har Khet ko Pani).
                        </li><br>
                        <li>
                         • Water source, distribution, and efficient usage are all integrated to make the greatest use of water through appropriate technology and practices.
                        </li><br>
                        <li>
                        • Improve the efficiency of on-farm water usage to decrease waste and improve availability in both duration and extent.
                        </li><br>
                        <li>• Increase the use of precision irrigation and other water-saving technology (More crop per drop).
                       </li></center>
                        
                           <h2> Benificiaries of Pradhan Mantri Krishi Sinchaye Yojana</h2>
                        <center>   <p>Farmers are the true beneficiaries of this scheme. There are several qualifying requirements that an applicant must meet in order to participate in the scheme.
                                The following are the PMKSY eligibility criteria: </p> </center>
                               <ul>  
                            <center>    <li>  • Farmers of any class or division are eligible to participate in the plan.</li><br>
                                <li>  • It is necessary for farmers to possess the land in order to benefit from the Yojana.</li><br>
                                <li>  • Members of self-help organizations, trust cooperative societies, and producer farmer groups are able to participate in this program by registering.</li><br>
                                <li>  • Farmers who cultivate land under a leasing arrangement may also apply for the PM Krishi irrigation project.</li><br>
                                <li>  • This program is only available to Indian citizens.</li><br>
                               </ul></center>
       
                               <h2>Documents Required To Register Under PM Krishi Sinchaye Scheme</h2>
                           <center>  <p>Some documents are necessary to participate in the Krishi Sinchai Yojana program.
                                Using this document, applicants can apply for registration online. The documents are as follows:</p></center>
                               <ul>
                            <center>       <li>  1.Adhar Card<br> </li>
                                   <li>  2.Address Proof<br></li>
                                   <li>  3.Caste Certificate<br></li>
                                   <li>  4.Domicile Certificate of State<br></li>
                                   <li>  5.Passport Sized Photographs<br></li>
                                   <li>  6.Mobile Number<br></li>
                                   <li>  7.Bank Account Passbook<br></li>
                                   <li>  8.Agricultural land Papers<br></li>
                                   <li>  9.House Certificate<br></li>  </center>
                                 </ul>
                       </div>
                 </div>
             </div>
        </center>  
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
</body>
</html>