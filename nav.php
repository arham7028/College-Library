<?php
include "db.php";
  $prn=$_SESSION['prn'];
  $sql = "SELECT * FROM `myuser` WHERE `prn`='$prn' ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
$fn = $row['firstname'];
$ln = $row['lastname'];
$em = $row['email'];
$pass = $row['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCOEY</title>
    <link rel="stylesheet" href="nav.css">
    <style>
      /* NAVIGATION BAR: LOGO AND IMAGE  */
#logo img{
    height: 56px;
    margin: -4px 0px;
    margin-top: 1px;
}
.user-pic{
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    margin-left: 35%;
    z-index: 4;
    opacity: 10;

}
#navbar{
    display: flex;
    align-items: center;
    position: fixed;
    top: 0px;
    background-color: rgba(0, 0, 0, 0.836);
    opacity: 0.8;
    width: 100%;
    z-index: 3;
}
.user-info h3{
     font-weight: 500;
     color: white;
}
.name{
color: white;
}
.sub-menu-wrap.open-menu{
    max-height: 400px;
    background-color: black;
    
}
    </style>
</head>
<body>
  <div class="navbar1">
  <nav id="navbar">
        <div id="logo">
            <img src="gcoey.jpg" alt="gcoey">
        </div>
        <?php
        echo ' <a1 class="name">GCOEY|<span>'.$name.'</span></a1> ';
        ?>
        <ul>
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="inote.php">iNote</a></li>
            <li class="item"><a href="#">About</a></li>
            <li class="item"><a href="#contact">Contact</a></li>
            <!-- <li class="item"><a></a></li> -->
        </ul>
        <img src="user.png" class="user-pic" onclick="toggleMenu()">
    
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <img src="user.png">
          <h3><?php echo $row['firstname'].' '.$row['lastname'];?></h3>
        </div>
        <hr>
  
        <a href="profile.php" class="sub-menu-link">
          <img src="profile.png">
          <p>Edit Profile</p>
          <span>></span>
        </a>
        <a href="privacy.php" class="sub-menu-link">
          <img src="setting.png">
          <p>Settings & Privacy</p>
          <span>></span>
        </a>
        <a href="#" class="sub-menu-link">
          <img src="help.png">
          <p>Help & Support</p>
          <span>></span>
        </a>
        <a href="logout.php" class="sub-menu-link">
          <img src="logout.png">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>
    </div>
    </nav>
  </div>
   
    
    
      <script>
      let subMenu = document.getElementById("subMenu");
    
      function toggleMenu(){
        subMenu.classList.toggle("open-menu");
      }
    </script> 
</body>
</html>