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
            box-shadow: 10px 10px 20px grey;
            top: 0px;
            left: 0px;
            
        }
        .home{
            margin-bottom: 2%;
        }
        #news{
            background-color: white;
        }
        .news1{
            border: 2px solid black;
            width: 60%;
            margin-top: 8%;
            padding-bottom: 5%;
            box-shadow: 0px 0px 0px grey, inset -10px -10px 20px grey;
            
        }
        .update1{
            margin-left: 30%;
            margin-bottom:10%;
        }
        .update2{
            margin-left: 10%;
            margin-bottom:10%;
        }
       
        .part1 img{
            align-items: center;
            width: 80%;
            height: 300px;
            box-shadow: 5px 5px 10px grey;
            margin-bottom: 5%;
        }
        .part2 h2{
            font-size: 30px;
            font-weight: 600;
        }
        .part2 p{
            font-size: 15px;
            font-weight: 500;
            text-align: justify;
            width: 80%;
            margin-left: 60px;
        }
        .part2 a{
        font-size:20px;
        margin-bottom: 2%;
       }
       @media screen and (max-width:550px){
        .part1 img{
            width: 80%;
            height: 200px;
        }
       }
        @media screen and (max-width:1580px) and (min-width:980px){
            .part2 p{
               
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
            .part2 p{
                margin-left: 10px;
            }
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
            <center><h4 style="margin-bottom:4%;font-family:'ADLaM Display';font-size:30px;text-shadow:5px 5px 10px white">We are here to give latest news and updates....</h4></center><br><br><br>
        </div>
     <section id="news">
            <div class="row">
                 <div class="col-lg-6 newspart1" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                
                    <div class="news1 update1">
                        <div class="part1">
                         <center> <img src="img/news11.jpeg"></center> 
                        </div>
                        <div class="part2">
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
                         <div class="part1">
                          <center>  <img src="img/news12.jpeg"></center>
                         </div>
                         <div class="part2">
                               <marquee>  <u> <h2>PM Krishi Sinchaye Yojna</h2></u> </marquee> 
                             <p>"પ્રધાનમંત્રી કૃષિ સિંચાઈ યોજના" (PMKSY) એ ભારતમાં ચલતી એક યોજના છે જે કૃષિમાં પાણીના સર્વોત્તમ ઉપયોગ અને ઉન્નતિ માટે મુદ્દાઓનો સમાધાન કરવાની ઉદ્દેશથી બનાવવામાં આવેલ છે.
                               આ યોજનાના મુખ્ય લાભાર્થીઓમાં કૃષિક્ષેત્રના કિસ્તાડારો અને કૃષિના અન્ય સંકલન યોજવાનાં વ્યાવસાયિક ઉત્પાદકો શામેલ છે. 
                               આ યોજનાના માધ્યમથી વૃદ્ધિશીલ કૃષિ તંત્રોનો ઉપયોગ થાય છે અને કિસાનોને પાણીના સર્વોત્તમ ઉપયોગ અને ઉપલબ્ધતાને લાભાર્થી બનાવવાનો પ્રયાસ થાય છે.</p>
                             <center> <a href="news2.php">View more...</a></center>
                         </div>
                      </div>
                  </div>
                
                       
            </div>
            <div class="row">
                    <div class="col-lg-6 newspart3" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                        <div class="news1 update1">
                            <div class="part1">
                             <center>  <img src="img/news13.jpeg"></center>
                            </div>
                        <div class="part2">
                             <marquee> <u>  <h2> Soil Health Card Scheme</h2></u></marquee> 
                             <p>"Soil Health Card Scheme" એ એક યોજના છે, જે ભારતમાં કૃષિનાં ક્ષેત્રમાં વાતચીત રાખવાનો ઉદ્દેશ્ય ધરાવવામાં આવેલ છે.
                                આ યોજનાના તહેતરના વિશેષગત વાપરાશકરણનાં મુદ્દાઓનો આંતરાળિક મૂલ્યાંકન દ્વારા કૃષિક્ષેત્રમાં સુધારાઓ અને ઉન્નતિનાં સાધનાં પર ચિંહ કરવામાં આવે છે.
                               આ યોજનાથી કૃષકોને તમારા જમીનના સ્વાસ્થ્ય, મિટાનો વિશ્લેષણ અને તમારી ખેતીનો સસ્તો પ્રતિષ્ઠાનાં સાથે સંબંધિત માહિતી મળવામાં આવશે. 
                                આને ફળક પર આધાર રાખવામાં આવશે અને કૃષકોને સારવાર માટે મદદ કરવામાં આવશે.</p>
                             <center>  <a href="news3.php">View more...</a></center>
                         </div>
                       </div>
                    </div>
                   <div class="col-lg-6 newspart4" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                        <div class="news1 update2">
                            <div class="part1">
                             <center>  <img src="img/news14.jpeg"></center>
                            </div>
                            <div class="part2">
                                <marquee>  <u> <h2>PM Fasal Bima Yojana </h2></u></marquee> 
                                <p>પ્રધાનમંત્રી ફસલ બીમા યોજના" (PMFBY) એ ભારતમાં ચલતી એક મહત્વપૂર્ણ કૃષિ બીમા યોજના છે, 
                                 જે કૃષિક્ષેત્રમાં અને કિસાનોના હિતમાં કામ કરે છે. આ યોજનાની મધ્યમાં, કૃષિક્ષેત્રમાં ખેતી કરતા હોઈએ કેટલીક અનિયમિતતાઓ અથવા આતંકોના કારણે નુકસાનથી છૂટારું પરિચાર થવું પરિચારાતમક હતું. 
                                 આ યોજનાએ કિસાનોને વર્ષભરમાં વ્યાપારિક કેટલીક ક્ષેત્રોમાં આંતરાષ્ટ્રીય બીમા કંપનિઓ દ્વારા સુરક્ષા પ્રદાન કરવાનો લક્ષ્ય સાધ્યું છે.
                               કિસાનોને ખેતીની સમયગાળાનાં ખેતીકરીઓ, ઉત્પાદકો..</p>
                                 <center><a href="news4.php">View more...</a></center>
                            </div>
                        </div>
                    </div>
           </div>
          
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
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>
</html>