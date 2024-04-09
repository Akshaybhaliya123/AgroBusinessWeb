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
            border-bottom-left-radius: 30%;
            border-bottom-right-radius: 30%;
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
        .newspart2 p{
            text-align: justify;
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
            text-align: justify;
            justify-content: center;
           }
           .part2 h2{
            margin-top: 3%;
            margin-bottom: 2%;
            font-size: 25px;
            font-family: 'Croissant One';
            font-weight: 600;
            text-align: justify;
            justify-content: center;
           }
           
           .part2 p{
            font-size: 17px;
            font-weight: 400;
            text-align: justify;
            justify-content: center;
            margin-left: 10%;
            font-family: 'Fredoka';
            margin-right: 5%;
           }
           .p2{
            font-size: 17px;
            font-weight: 500;
            text-align: center;
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
                           <img src="img/news51.jpeg">
                         </div>
                       </div>
                    </center>
                    </marquee> 
                    <marquee direction="up">
                    <center>
                       <div class="news1">
                          <div class="part1">
                            <img src="img/news52.jpeg">
                          </div>
                       </div>
                    </center>
                     </marquee>  
                     <marquee direction="up">
                     <center>
                        <div class="news1">
                          <div class="part1">
                           <img src="img/news53.jpeg">
                         </div>
                        </div>
                    </center>
                     </marquee>
                    <marquee direction="up">
                    <center>
                      <div class="news1">
                        <div class="part1">
                         <img src="img/news54.jpeg">
                        </div>
                      </div>
                    </center>
                    </marquee>
                    <marquee direction="up">
                        <center>
                          <div class="news1">
                             <div class="part1">
                               <img src="img/news51.jpeg">
                             </div>
                           </div>
                        </center>
                        </marquee> 
                 </div>
                <div class="col-lg-6 newspart2">
                    <div class="part2">
                        <h1>PRADHAN MANTRI KISAN YOJANA</h1> 
                       <b> <p class="firdetail">દેશના કરોડો ખેડૂતોની આર્થિક સ્થિતિ સુધારવા માટે કેન્દ્ર સરકાર ખેડૂતો માટે અનેક યોજનાઓ લાવે છે.
                           સરકાર દેશમાં ઘણી યોજનાઓ ચલાવી રહી છે. જેના દ્વારા ખેડૂતોને આર્થિક લાભ આપવામાં આવે છે.
                            આવી જ એક યોજના PM Kisan Yojana છે. જે ફેબ્રુઆરી 2019માં શરૂ કરવામાં આવેલી પ્રધાનમંત્રી કિસાન સન્માન નિધિ યોજના છે.
                             જેના હેઠળ ખેડૂતોને દર વર્ષે છ હજાર રૂપિયાની રકમ આપવામાં આવે છે. આ રકમ ખેડૂતોને ત્રણ હપ્તામાં ટ્રાન્સફર કરવામાં આવે છે.</p><br><br></b>
                        <ul><li>PM Kisan is a Central Sector scheme with 100% funding from Government of India.</li><br>
                        <li>  It has become operational from 1.12.2018.</li><br>
                        <li>  Under the scheme an income support of 6,000/- per year in three equal installments will be provided to all land holding farmer families.</li><br>
                        <li>  Definition of family for the scheme is husband, wife and minor children.</li><br>
                        <li> State Government and UT administration will identify the farmer families which are eligible for support as per scheme guidelines.</li><br>
                        <li>   The fund will be directly transferred to the bank accounts of the beneficiaries.</li><br>
                        <li>   There are various Exclusion Categories for the scheme.</li></ul>
                           <h2>Eligible Candidates for PM Kisan Scheme</h2> 
                               <ul> 
                                <li> The eligible candidates to get benefits under the PM Kisan scheme are;</li><br>
                                <li>   With cultivable landholding families are eligible for this PM Kisan scheme</li><br>
                                <li>  Farmers from both the urban and rural areas are eligible for this scheme </li><br>
                                <li>  Small and marginal farmers families</li>
                               </ul>
       
                           <h2>Documents Required To Register Under PM Kisan</h2>
                           <ul>
                           <li> Aadhaar is mandatory.<br></li>
                           <li>  Other documents required to register for this scheme are a citizenship certificate, landholding papers, and bank account details.</li>
                           </ul>
                            <h2>How to Register For PM Kisan Samman Nidhi</h2>
                           <ul>
                            <li>   Firstly, farmers have to approach the local revenue officer</li> <br>
                            <li>   The Common Service Centers certified to do the farmer's registration for the PM Kisan scheme upon payment of fees.</li> <br>
                            <li>   For enrolment to the PM Kisan scheme, the farmer is required to approach the local Agriculture Assistant/revenue officer / Nodal Officer (PM Kisan) nominated by the State Government.</li> 
                            </ul>
                            <h2>PM Kisan Samman Nidhi Yojana Application Form</h2>
                               <p>This is an application form for PM Kisan (Pradhan Mantri Kisan Samman Nidhi Yojana) issued by the Central government to purchase crop and harvesting material for the farmers to provide financial assistance is to provide income support to all landholding farmers' families.</p>
                               
                                   <ul>
                                   <li> Details to be Mention in Pradhan Mantri Kisan Samman Nidhi Yojana Form are;</li>
                                   <li>  Farmer Personal Details<br> </li>
                                   <li>  Address<br></li>
                                   <li>  Details of the Family<br></li>
                                   <li>  Details of Collective Landholdings.<br></li>
                                   <li>  Bank Details<br></li>
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