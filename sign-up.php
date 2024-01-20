<?php
 $showAlert = false;
 $showError = false;
 $err = false;
 $er = false;
 $servername="localhost";
 $username = "root";
 $password ="";
 $database="users123";
 $conn= mysqli_connect($servername, $username, $password, $database);
 if (!$conn) {
   die("Sorry we failed to connect".mysqli_connect_error());
 } 
 else {
    
 }
 if ($_SERVER['REQUEST_METHOD'] =="POST") {
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $prn=$_POST["prn"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];

    $existsSql= "Select * from myuser where prn='$prn'";
    $result= mysqli_query($conn,$existsSql);
    $num = mysqli_num_rows($result);

 if ($firstname==""||$lastname==""||$prn==""||$email==""||$pass=="") {
  $er=true;
 }

  else {
  if($num > 0){
    $err = true;
 }
 else{
  if ($pass== $cpass) {
    $hash= password_hash("$pass", PASSWORD_DEFAULT); 
    $sql= "INSERT INTO `myuser` (`firstname`, `lastname`, `prn`, `email`, `password`, `date`) VALUES ('$firstname', '$lastname', '$prn', '$email', '$hash', current_timestamp())";
    $result= mysqli_query($conn,$sql);
    if($result){
      header("location:log-in.php");
          // $sql = "CREATE TABLE `users123`.`$prn` (`srno` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `description` TEXT NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`srno`)) ENGINE = InnoDB";
          // $result= mysqli_query($conn,$sql);
          if($result){
            header("location:log-in.php");
          }
      
    }
  } else {
       $showAlert =true;
  }
}
 }
 
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <title>Online Study Library</title>
    <link rel="stylesheet" href="sign-up.css">
  </head>
  <body>
   <div class="containers" id="containers">
       <h2>Sign-Up</h2>
       <?php
       if($err){
        echo '<div id="error">PRN Alraeady Taken!!!</div>';
      }
      if($er){
        echo '<div id="error">Fill The Info Properly!!!</div>';
      }
      if($showAlert){
        echo'<div id="error">Password Dont Match!!!</div>';
      }
      
if($showError){
  echo'<div id="danger">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Oops!!</strong>'.$showError.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
        </div>
    </div>';
 }
       ?>
       <form action="/esolution/sign-up.php" method="post">
           <label for ="name"><strong>Name</strong></label><br>
           <input type="text" minlength="2" name="firstname" id="firstname" placeholder="First Name">
           <input type="text" name="lastname" id="lastname" placeholder="Last Name"><br>
           <label for="prn" minlength="10" maxlength="12"><strong>PRN</strong></label><br>
           <input type="text" name="prn" id="prn" placeholder="Enter Your PRN"><br>
           <label for="email"><strong>E-mail</strong></label><br>
           <input type="email" name="email" id="email" placeholder="Enter Your Email"><br>
           <!-- <label for="gender"><strong>Gender</strong></label> &nbsp;</label><br>
       <div class="gend">
           <input type="radio" name="gender" id="male" value="male">
          <label for="male">Male</label>
           <input type="radio" name="gender" id="female" value="female">
           <label for="female">Female</label>
           <input type="radio" name="gender" id="other" value="other">
          <label for="other">Other</label><br>
       </div> -->
           <label for="password"><strong>Password</strong></label><br>
           <input type="password" name="pass" minlength="4" id="pass" placeholder="Enter Your Password"><br>
           <label for="cpassword"><strong>Confirm Password</strong></label><br>
           <input type="password" name="cpass" id="cpass" placeholder="Confirm Your Password"><br>
           <div class="terms">
           <input type="checkbox" name="terms" id="terms" value="terms">
           <label for="terms">I Accept <strong>Terms Of Use </strong></label>
           </div>
           <div class="sign">
           <button type="submit">Sign-In</button><br>
         </div>
           <a href="log-in.php"><strong>Back To Log-in</strong></a>
           <!-- <button onclick="signIn()">Sign-In</button> -->

       </form>
       <!-- <script>
         function signIn(){
           var x;
         if(confirm("Your Registration Successfully")) {
           x = window.location.href = "log-in.html";
         } else {
           x =window.location.href = "sign-up.html" ;
         }
         document.getElementById("container").innerHTML = x;
       }
       </script> -->



   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
