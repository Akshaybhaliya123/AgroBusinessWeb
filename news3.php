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
            border-bottom-left-radius: 30%;
            border-bottom-right-radius: 30%;
            width: 100%;
            z-index: -1;
            box-shadow: 10px 10px 20px grey;
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
            margin-left: 10%;
            margin-right: 5%;
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
          
            margin-left: 10%;
            margin-right: 5%;
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
                           <img src="img/news31.jpeg">
                         </div>
                       </div>
                    </center>
                    </marquee> 
                    <marquee direction="up">
                    <center>
                       <div class="news1">
                          <div class="part1">
                            <img src="img/news32.jpeg">
                          </div>
                       </div>
                    </center>
                     </marquee>  
                     <marquee direction="up">
                     <center>
                        <div class="news1">
                          <div class="part1">
                           <img src="img/news33.jpeg">
                         </div>
                        </div>
                    </center>
                     </marquee>
                    <marquee direction="up">
                    <center>
                      <div class="news1">
                        <div class="part1">
                         <img src="img/news34.jpeg">
                        </div>
                      </div>
                    </center>
                    </marquee>
                    <marquee direction="up">
                        <center>
                          <div class="news1">
                             <div class="part1">
                               <img src="img/news31.jpeg">
                             </div>
                           </div>
                        </center>
                        </marquee> 
                 </div>
                <div class="col-lg-6 newspart2">
                    <div class="part2">
                        <h1> SOIL HEALTH CARD SCHEME</h1> 
                       <b> <p>"Soil Health Card Scheme" એ એક યોજના છે, જે ભારતમાં કૃષિનાં ક્ષેત્રમાં વાતચીત રાખવાનો ઉદ્દેશ્ય ધરાવવામાં આવેલ છે.
                           આ યોજનાના તહેતરના વિશેષગત વાપરાશકરણનાં મુદ્દાઓનો આંતરાળિક મૂલ્યાંકન દ્વારા કૃષિક્ષેત્રમાં સુધારાઓ અને ઉન્નતિનાં સાધનાં પર ચિંહ કરવામાં આવે છે.
                           આ યોજનાથી કૃષકોને તમારા જમીનના સ્વાસ્થ્ય, મિટાનો વિશ્લેષણ અને તમારી ખેતીનો સસ્તો પ્રતિષ્ઠાનાં સાથે સંબંધિત માહિતી મળવામાં આવશે. 
                          આને ફળક પર આધાર રાખવામાં આવશે અને કૃષકોને સારવાર માટે મદદ કરવામાં આવશે.</p><br><br></b>
                               <ul> 
                                <li>The SHC scheme aims to improve soil health and fertility. It provides farmers with information about the nutrient status of their soil. </li><br>
                                <li>The SHC scheme also aims to promote sustainable agriculture. It encourages farmers to use judicious amounts of fertilizers and other inputs. </li><br>
                                <li>The SHC scheme also aims to increase awareness among farmers about the importance of soil health. It also creates awareness of the benefits of using a balanced fertilizer application.  </li><br>
                               
                               </ul>
                           <h2> Benificiaries of Soil Health Card Scheme</h2>
                           <ul> 
                             <li> This plan provides a card that allows the farmer to identify the soil type in his farm area.</li><br>
                             <li> Farmers can boost the yield of their farm soil, based on strategies under this scheme.</li><br>
                             <li> If farmers know the type of soil in their land, it will be easier for them to plant crops based on the quality of the soil, resulting in better farming and more earnings.</li><br> 
                             <li> The farmers will receive all information on their farm's soil via the Mudra Health Card.</li><br>
                             <li> This strategy aimed to increase farmers' revenue while also improving the soil's base and balance through applying fertilisers.</li><br>
                             <li> This strategy can also provide increased agricultural production at a cheaper cost.</li><br>
                             <li> The soil health card that will be supplied to farmers under this scheme will also include crop planting recommendations based on their lands.</li><br> 
                             <li> This card also informs farmers about how much soil is present in the soil and for which crop, how much fertiliser should be used, and which fertiliser should be used.</li><br>   
                             <li> Farmers' output will also grow due to the Soil Health Card Scheme</li><br>   
                           </ul>
        
                               <h2>Eligibility for Soil Health Card Scheme</h2>
                               <p>The Eligibility criteria for Soil Health Card Scheme is not defined. All the farmers can register for this scheme.</p>
                               <h2>Documents Required To Register Under Soil Health Card Scheme</h2>
                                   <ul>
                                   <li>  Aadhar card<br> </li>
                                   <li>  Address proof<br></li>
                                   <li>  Passbook copy<br></li>
                                   <li>  Registration form<br></li>
                                   </ul>
                                   <h2>How to register for Soil Health Card Scheme Online?</h2>
                                  <ul>
                                   <li>Here are the steps to register for the Soil Health Card Scheme Online.</li>
                                   <li> Step 1: Click the Registration tab on the Soil Health Card Scheme's Official website. This will open the registration form. </li><br>
                                   <li>Step 2: Fill out the online registration form and get the unique registration number.</li><br>
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