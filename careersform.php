<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
         body{
            background-color: rgb(232,255,232);
         }
       
       .apply{
        background-color: rgb(232,255,232);
       }
       .formbody{
        border: 2px solid black;
        align-items: center;
        background-color: rgb(232, 232, 232);
        margin: 10px;
        padding: 10px;
        margin-top: 4%;
        margin-bottom: 4%;
        width:80%;
       }
       .title{
        margin-top: 5%;
        margin-bottom: 5%;
       }
       .title h1{
        font-weight: 600;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border: 2px solid black;
        padding: 10px;
        width: 80%;
        background-color: white;
        box-shadow: 10px 10px 20px green;
       }
      .form{
        display: flex;
        flex-wrap: wrap;
      }
       .input-class{
        border: 2px solid black;
        background-color: greenyellow;
        box-shadow: 5px 5px 10px green;
        border-radius: 20px;
        margin-bottom: 20px;
        padding: 10px;
       }
       .form1{
        width: 80%;
        margin-bottom: 5%;
        
       }
       .form2{
        width: 80%;
        margin-bottom: 5%;
       }
       .name{
        border-top: 0;
        border-bottom: 0;
        border-right:0;
        font-size: 18px;
        width: auto;
       }
       .icon1{
        font-size: 15px;
        margin-right: 20px;
       }
       .icon2{
        font-size: 15px;
        margin-right: 20px;
       }
       select{
        padding:4px;
       }
       .btnn{
         font-size: 25px;
         font-weight: 800;
         margin-bottom: 20px;
         color: black;
         border-radius: 10px;
         background-color:greenyellow;
         box-shadow: 5px 5px 10px green;
       }
       .btnn:hover{
         font-size: 25px;
         font-weight: 800;
         margin-bottom: 20px;
         color: white;
         background-color:skyblue;
         border-radius: 10px;
         box-shadow: 5px 5px 10px green;
       }
      @media screen and (max-width:985px){
        .form1{
          width:100%;
        }
        .form2{
          width:100%;
        }
      }
       @media screen and (min-width:1000px){
        .form1{
            width: 70%;
        }
        .form2{
            width: 70%;
        }
       }
       @media screen and (max-width:450px){
        .title h1{
          margin-bottom: 50px;
        }
       }
       
    </style>
    <title>Job Application Form</title>
</head>
<body>
<?php
include 'connection.php'
?>
    <?php

 if(isset($_POST['data'])){
     $name = $_POST['name'];
     $Address = $_POST['Address'];
     $Qualification = $_POST['Qualification'];
     $dob = $_POST['dob'];
     $mobile = $_POST['Mobile'];
     $email = $_POST['Email'];
     $Workexp = $_POST['workexp'];
     $Skills = $_POST['skills'];
     $Apply = $_POST['Apply'];
     $Jobtime = $_POST['Jobtime'];
     $query = "INSERT INTO  careerdata (Nam,Addres,Qualification,DoB,Mobile,Email,Exp,Skill,Applyfor,JobTime) VALUES('$name','$Address','$Qualification','$dob','$mobile','$email','$Workexp','$Skills','$Apply','$Jobtime')";
     $data = mysqli_query($conn,$query);
     if($data){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your notes has been inserted successfully..!!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
     }
     else{
       echo "not inserted..";
     }
   }
 

   ?>
  
     <form action="careersform.php" method="POST">
    <div class="row apply">
      <center> <div class="formbody">
            <div class="title"><h1>Job Application Form</h1></div>
            <div class="form">
            <div class="col-lg-6">
             <div class="form1">
            <div class="input-class">
                <span class="glyphicon glyphicon-user icon1"></span>
                <input type="text" name="name" class="name" placeholder="Name*" required>
            </div>
            <div class="input-class">
                <img src="img/addressicon.png"  width="20px" class="icon1">
                <input type="text" name="Address" class="name" placeholder="Address*" >
            </div>
            <div class="input-class">
                <span class="glyphicon glyphicon-calendar icon1"></span>
                <input type="text" name="dob" class="name" placeholder="YYYY-MM-DD*" required>
            </div>
            <div class="input-class">
                <span class="glyphicon glyphicon-phone icon1"></span>
                <input type="mobile" name="Mobile" class="name" placeholder="Mobile No*" required>
            </div>
            <div class="input-class">
                <span class="glyphicon glyphicon-envelope icon1"></span>
                <input type="email" name="Email" class="name" placeholder="Email*" required>
            </div>
            </div>
            </div>
            <!-- form section 2 -->
            <div class="col-lg-6">
                <div class="form2">
                <div class="input-class">
                    <span class="glyphicon glyphicon-education icon2"></span>
                    <input type="text" name="Qualification" class="name" placeholder="Qualification*" required>
                </div>
                <div class="input-class">
                    <span class="glyphicon glyphicon-list-alt icon2"></span>
                    <input type="text" name="workexp" class="name" placeholder="Work Experience*">
                </div>
                <div class="input-class">
                    <img src="img/skill.png"  width="20px" class="icon2">
                    <input type="textarea" rows="5" name="skills" class="name" placeholder="Skills*" required>
                </div>
                <div class="input-class">
                    <span class="glyphicon glyphicon-briefcase icon2"></span>
                    <input type="text" name="Apply" class="name" placeholder="Apply For*" required>
                </div>
                <div class="input-class">
                    <span class="glyphicon glyphicon-dashboard icon2"></span>
                    <select name="Jobtime" class="name">
                      <option>8:00AM TO 4:00PM</option>
                      <option>4:00PM TO 12:00AM</option>
                      <option>12:00AM TO 8:00AM</option>
                    </select>
                </div>     
                </div>
            </div>
        </div>
             <button type="submit" name="data" class="btnn">Submit</button>
            </div></center>
           
         </div>
         </form>
        
</body>
</html>