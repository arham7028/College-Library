<?php
 $login = false;
 $showError = false;
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
    $prn=$_POST["prn"];
    $pass=$_POST["pass"];
     
    $sql= "Select * from myuser where prn='$prn'";
    $result= mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num==1) {
      while($row=mysqli_fetch_assoc($result)){
          if (password_verify($pass, $row['password'])) {
              $login=true;
              session_start();
              $_SESSION['loggedin']=true;
              $_SESSION['prn']=$prn;
              header("location: home.php");
          }
          else {
            $showError ="Invalid Password!!!";
          }
        }
        }
    else {
       $showError ="Invalid Credentials!!!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="log-in.css">
</head>
<body>
<?php
    // if($login){
    //   echo'<div id="done">
    //           <div class="alert alert-warning alert-dismissible fade show" role="alert">
    //            <strong>Login Successfully!</strong> Now you can enjoy the online library world.
    //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //             <span aria-hidden="true">&times;</span>
    //             </button>
    //           </div>
    //         </div>';
    // }
     ?>
    <div class="container" id="container">
       <div class="rotate">
           <h2>Log-In</h2>
     <?php
      if($showError){
        echo'<div id="danger">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Oops!!</strong>'.$showError.'
        </div>
    </div>';
 }
 ?>
          <form action="/esolution/log-in.php" method="post">
            <label for="prn"><strong>Username</strong></label><br>
            <input type="text" name="prn" id="prn" placeholder="Enter Your PRN"><br>
            <label for="password"><strong>Password</strong></label><br>
            <input type="password" name="pass" id="pass" placeholder="Enter Your Password"><br>
            <button class="btn-1" id="login"><strong>Log-In</strong></button>
            <br><br>
            <hr>
            <div class="down">
            <p>Don't have an account</p>
            <a href="sign-up.php">Sign-Up</a>
            <!-- <button onclick="sign-up.html">Sign-Up</button> -->
            <h5>Forgot Password?</h5>
        </div>
        </form>
    </div>
</div> 
    
</body>
</html>