<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=ADLaM Display' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>  
    <link href='https://fonts.googleapis.com/css?family=Croissant One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <style>
      .loginpage::before{
        content: "";
        position: absolute;
        background: url('../img/backgroundimg.jpeg') no-repeat center center/cover;
        height:100% ;
        width: 100%;
        z-index: -1;
        opacity: 3; 
        top: 0px;
        left: 0px;
        
    }
       .login{
        width: 40%;
        margin-top: 5%;
        padding-bottom: 3px;
        border-top-left-radius: 20%;
        border-bottom-right-radius: 20%;
        box-shadow: 20px 20px 40px grey;
       }
       .login h1{
        font-weight: 800;
        margin-bottom: 7%;
        padding-top: 10%;
       }
       .form-group{
        width: 60%;
        padding: 20px;
        
       }
       .form-control{
        font-size: 18px;
        font-weight: 700;
       }
       .login h2{
        text-align: center;
        justify-content: center;
        font-weight: 600;
       }
       .login p{
        font-size: 20px;
        font-weight: 400;
        margin-top: 20px;
       }
       #signinbtn{
        text-align: center;
        width: 180px;
        margin-bottom: 15%;
        border-radius: 20px;
        font-size: 20px;
        font-weight: 700;
        background-color: greenyellow;
        box-shadow: 5px 5px 20px green;
        padding: 10px;
       }
       #signinbtn:hover{
        background-color: rgb(149, 240, 11);
        font-size: 18px;
        color: white;
        box-shadow: 3px 3px 15px green;
       }
       .form-group a{
         font-size:20px;
       }
       @media screen and (max-width:900px){
        .login{
          width: 70%;
        }
       }
       @media screen and (max-width:550px){
        .form-group{
          width:100%;
        }
       }
    </style>
</head>
<body>
  <?php
  include '../connection.php';
  if(isset($_POST['signin'])){
           $uname = $_POST['username'];
           $password=$_POST['passwords'];
          if($uname != "" && $password != ""){
                  $sql_query = "SELECT count(*) as cntUser FROM `login` WHERE userName='".$uname."' and password='".$password."'";
                  $result = mysqli_query($conn,$sql_query);
                  $row = mysqli_fetch_array($result);
                 $count = $row['cntUser'];
                 if($count>0){
                       $_SESSION['uname'] = $uname;
                       header('Location: dashboard.php ');
                  }
                 else{
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Failed!</strong> Invalid username and password..!!.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                 }
          }
          else{
            echo "Please enter username and password..!!";
          }
   }
  ?>
    <section class="loginpage" id="loginpage">
    <div class="row">s
          
     <div class="col-lg-12">
    <center><div class="login">
         <center>  <h1>ADMIN LOGIN</h1></center> 
  
             <div class="inputsec">
               <form action="" method="post">
             <center>   <div class="form-group">
                    <input type="text" class="form-control" name="username" id="user" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="passwords" id="password" placeholder="Password">
                  </div>    
                  <div class="form-group">
                    <center><button type="submit" name="signin" id="signinbtn">LOGIN</button></center>
                    <a href="../home.php">Back to Home</a>
                  </div></center>
               </form>
             
             </div>
            </div>
          </center> 
        </div>
    </div>
</section>
</body>
</html>