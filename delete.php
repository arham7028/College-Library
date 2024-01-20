<?php
$err = false;
session_start();
$name = "Delete";
include "nav.php";
include "db.php";


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: log-in.php");
    exit;
} else {
    $prn = $_SESSION['prn'];
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cprn = $_POST["prn"];
    $pass = $_POST["pass"];
   if ($prn==$cprn) {
    $sql = "Select * from myuser where prn='$cprn'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($pass, $row['password'])) {
                $sql = "DROP TABLE `$prn`";
                $result= mysqli_query($conn,$sql);
                $sql = "DELETE FROM `myuser` WHERE `myuser`.`prn` = '$prn'";
                 $result= mysqli_query($conn,$sql);
                    if ($result) {
                        include "logout.php";
                    }
                } else {
                    echo "Enter a password carefully.";
                }
                
            }
        } else {
            echo "enter the form correctly.";
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
    <title>Change Password</title>
    <style>
        .err{
            text-align: center;
        }
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
    </style>
</head>
<body>
    <div class="nav1">

    </div>
 
<div id="contains">
<div class="hero">
  <div class="in-container">
<fieldset>
<legend>Delete Account</legend>
<div class="err">
<?php if ($err) {
    echo "Invalid prn";
}
?>
</div>
<form action="delete.php" method="post">
   <label for ="prn">PRN:</label><br>
   <input type="text" name="prn" id="prn" placeholder="enter your prn"><br>
   <label for ="pass">Password:</label><br>
   <input type="password" name="pass" id="pass" placeholder="enter your password"><br>

<button type="submit" >Delete Account</button>
</form>
</fieldset>
</div>
</div>
</div>
</body>

</html>