<?php
$err = false;
$success = false;
include "db.php";
session_start();
$name = "Update";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: log-in.php");
    exit;
} else {
    $prn = $_SESSION['prn'];
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
     if(($firstname=="")&&($lastname=="")&&($email=="")){
        $err = true;
     }
     else{
        $sql = "UPDATE `myuser` SET `firstname` = '$firstname' ,`lastname` =  '$lastname' ,`email` =' $email' WHERE `myuser`.`prn` = '$prn'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success = true;
        }
     }
     


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="home.css">
    
    <style>
 
        input {
            margin-top: 10px;
            margin-bottom: 10px;
            width: 80%;
            text-align: center;
        }

        .in-container {
            /* text-align: center; */
            justify-content: center;
            margin-top: 120px;
            border: 2px solid rgba(22, 22, 22, 0.719);
            padding: 25px 0px;
            width: 37%;
            margin-left: 30%;
        }

        form {
            padding: 11px;
            margin-left: 41px;
            width: 100%;
        }

        fieldset {
            margin: 10px 53px;
        }

        button {
            margin: 10px;
            background-color: rgb(0, 71, 164);
            height: 36px;
            width: 75px;
            border-radius: 11px;
            color: white
        }

        .container-ep {
            margin-top: 10px;
        }
        .err{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="nav1">
        <?php include "nav.php"; ?>
    </div>
   <div class="err">
   <?php if ($err) {
    echo "Fill all the form.";
}
?>
    <?php if ($success) {
     echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
     <strong>Success!</strong> Your note has been updated successfully
     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>×</span>
     </button>
   </div>";
}
?>
   </div>
    <?php

    echo '  
<div id="contains">
<div class="hero">
  <div class="in-container">
<fieldset>
<legend>Update Info</legend>
<form action="profile.php" method="post">
<label for ="firstname">First name:</label><br>
   <input type="text" minlength="2" name="firstname" id="firstname" value="'.$fn.'"><br>
   <label for ="lastname">Last name:</label><br>
   <input type="text" name="lastname" id="lastname" value="'.$ln.'"><br>
   <label for="email">Email:</label><br>
   <input type="email" name="email" id="email" value="'.$em.'"><br>
<button type="submit" >Submit</button>
</form>
</fieldset>
</div>
</div>
</div>';
    ?>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>