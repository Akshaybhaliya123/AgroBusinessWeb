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
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
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
        #news{
            background-color: white;
        }
        .newspart1{
            background-color: white;
            margin-top: 5%;
           
        }
        .newspart2{
            background-color:white;
            margin-top: 5%;
            border-left: 2px solid black;
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
            margin-bottom: 5%;
            margin-top: 3%;
            font-family:'Bungee';
            padding-top: 5%;
            text-align: justify;
            justify-content: center;
           }
           .part2 h2{
            margin-top: 3%;
            margin-bottom: 2%;
            font-size: 25px;
            font-weight: 600;
            font-family: 'Croissant One';
            text-align: justify;
            justify-content: center;
           }
           .part2 p{
            font-size: 17px;
            font-weight: 400;
            text-align: justify;
            justify-content: center;
           
           }
           .p2{
            font-size: 17px;
            font-weight: 500;
            text-align: justify;
            justify-content: center;
            
           }
           .part2 li{
            text-align: left;
            justify-content: center;
            font-size: 17px;
            font-weight: 400;
           
            
           }
           #p1{
            font-size: 17px;
            font-weight: 400;
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
            <center><h4 style="font-family:'ADLaM Display';font-size:30px;margin-bottom:4%;text-shadow:5px 5px 10px white">We are here to give latest news and updates....</h4></center><br><br><br>
        </div>
        <section id="news">
           
            <div class="row">
                
               <div class="col-lg-6 newspart1">
                
                   <marquee direction="up">
                    <center>
                      <div class="news1">
                         <div class="part1">
                           <img src="img/news41.jpeg">
                         </div>
                       </div>
                    </center>
                    </marquee> 
                    <marquee direction="up">
                    <center>
                       <div class="news1">
                          <div class="part1">
                            <img src="img/news42.jpeg">
                          </div>
                       </div>
                    </center>
                     </marquee>  
                     <marquee direction="up">
                     <center>
                        <div class="news1">
                          <div class="part1">
                           <img src="img/news43.jpeg">
                         </div>
                        </div>
                    </center>
                     </marquee>
                    <marquee direction="up">
                    <center>
                      <div class="news1">
                        <div class="part1">
                         <img src="img/news44.jpeg">
                        </div>
                      </div>
                    </center>
                    </marquee>
                    <marquee direction="up">
                        <center>
                          <div class="news1">
                             <div class="part1">
                               <img src="img/news41.jpeg">
                             </div>
                           </div>
                        </center>
                        </marquee> 
                 </div>
                <div class="col-lg-6 newspart2">
                    <div class="part2">
                        <h1>PRADHAN MANTRI FASAL BIMA YOJANA</h1> 
                       <b> <p>પ્રધાનમંત્રી ફસલ બીમા યોજના" (PMFBY) એ ભારતમાં ચલતી એક મહત્વપૂર્ણ કૃષિ બીમા યોજના છે, 
                           જે કૃષિક્ષેત્રમાં અને કિસાનોના હિતમાં કામ કરે છે. આ યોજનાની મધ્યમાં, કૃષિક્ષેત્રમાં ખેતી કરતા હોઈએ કેટલીક અનિયમિતતાઓ અથવા આતંકોના કારણે નુકસાનથી છૂટારું પરિચાર થવું પરિચારાતમક હતું. 
                           આ યોજનાએ કિસાનોને વર્ષભરમાં વ્યાપારિક કેટલીક ક્ષેત્રોમાં આંતરાષ્ટ્રીય બીમા કંપનિઓ દ્વારા સુરક્ષા પ્રદાન કરવાનો લક્ષ્ય સાધ્યું છે.
                            આ યોજનાના અંતર્ગત, કિસાનોને ખેતીની સમયગાળાનાં ખેતીકરીઓ, ઉત્પાદકો, અને ખેતીનો સંબંધિત સહાયક અંગોના મુકાબલામાં યોગદાન કરવામાં આવશે.</p><br><br></b>
                        <ul>
                           <li>Annual Commercial / Annual Horticultural crops, oilseeds, and food crops (Cereals, Millets, and Pulses) are covered under the scheme.</li><br>
                           <li> PMFBY is optional for the farmers who have not availed institutional credit, while all the farmers who have borrowed institutional loans from banks are covered under the scheme mandatorily.</li><br>
                           <li>The scheme is administered by the Ministry of Agriculture.</li><br> </ul>
                        
                           <h2> Benificiaries of PM Fasal Bima Yojana</h2>
                               <ul> 
                                   <li>Provides comprehensive insurance coverage against crop loss on account of non-preventable natural risks, thus helping in stabilizing the income of the farmers and encourage them for adoption of innovative practices.</li><br>
                                   <li> Increased risk coverage of Crop cycle pre-sowing to post-harvest losses.
                                   <li> Area approach for settlement of claims for widespread damage. Notified Insurance unit has been reduced to Village/Village Panchayat  for major crops.</li><br>
                                   <li>Actuarial/bidded premium but uniform maximum premium of only 2%, 1.5% and 5% to be paid by farmers for all Kharif crops, Rabi Crops and Commercial/ horticultural crops respectively.   </li><br>
                                   <li>Premium over and above these limits is shared by the Central and State Governments on 50 : 50 basis except in North Eastern Region where it is 90 : 10.</li><br>
                                   <li>The difference between premium and the rate of Insurance charges payable by farmers is provided as subsidy and shared equally by the Centre and State.</li><br>
                                  
                               </ul>
       
                               <h2>Documents Required To Register Under PM Fasal Bima Yojana</h2>
                               <p>Here is a rundown of all the documents required for the Pradhan Mantri Fasal Bima Yojana:</p>
                                   <ul>
                                   <li>  Passport size photograph of the farmer<br> </li>
                                   <li>  Identity proof of the farmer (Aadhar card, PAN card, Voter ID, Driving license, or Passport)<br></li>
                                   <li>  Address proof of the farmer (Aadhar card, Voter ID, Driving license, or Passport)<br></li>
                                   <li>  In case the crop is only sown in the field, evidence for the same need to be presented. <br></li>
                                   <li>  As evidence, the farmers should get a letter written from people such as Pradhan, Sarpanch, Goan Pradhan, Patwari, etc.<br></li>
                                   </ul>
                                   <h2>Steps to Complete Self-registration on the PMFBY Portal</h2>
                                  <ul>
                                   <li> Visit the PMFBY portal https://pmfby.gov.in/ </li><br>
                                   <li>The user next needs to click on the 'Register' tab to register themselves.</li><br>
                                   <li>Enter the personal and official information as required.</li><br>
                                   <li>The user then needs to verify the Aadhar number (automatically verified) and the mobile number (OTP verification).</li><br>
                                   <li> Once, the registration is approved, the user is notified via an SMS or an email upon approval/rejection.</li><br>
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