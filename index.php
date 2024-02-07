<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>E SPORT CLUB UITM (ESC UITMCK)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  

</head>
<body class="w3-black w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    
    <h4><b>E SPORTS</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
	<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT ESC</a> 
	<a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
	<a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a> 	
    <a href="#gallery" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>GALLERY</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
	<a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>E SPORTS Club UiTM Kelantan </b></h1>
   

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/game.png" alt="Me" style="width:70%"></p>
    </div>
    

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>E SPORTS CLUB</b></h4>
    <p>Welcome to the dynamic and enthusiastic world of UiTM Kelantan E SPORTS Club! Established with a passion for the sport and a gaming to fostering a sense of community, our club is a hub for students who share a love for E SPORTS community.</p>
    <hr>
    
    <!-- Team Section --> 
<div class="w3-container w3-black" style="padding:100px 16px" id="committee"> 
  <h3 class="w3-center"><b>TEAM</h3></b> 
  <p class="w3-center w3-large">CLUB HERITAGE</p> 
  <div class="w3-row-padding w3-center" style="margin-top:64px"> 
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/3.jpg" class="w3-padding-16" alt="John" style="width:65%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">MUHAMAD ISMAIL BIN AZMAN</h4></p> 
          <p class="w3-opacity w3-center">President</p> 
          <p class="w3-center">
          </p> 
          
        </div> 
      </div> 
    </div> 
     
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/2.jpg" class="w3-padding-16" alt="Jane" style="width:80%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">WAN IZZUDIN <br>MOHD FAUZI</h4></p> 
          <p class="w3-opacity w3-center">Vice President</p> 
          <p class="w3-center"></p> 
 
        </div> 
      </div> 
    </div> 
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/nisa.jpg" class="w3-padding-16" alt="Mike" style="width:80%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">WAN NUR ANISSA BINTI RAZAK</h4></p> 
          <p class="w3-opacity w3-center">Secretary</p> 
          <p class="w3-center"></p> 

           </div> 
      </div> 
    </div> 
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/1.jpg" class="w3-padding-16" alt="Mike" style="width:80%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">FATIN BINTI IZHAR</h4></p> 
          <p class="w3-opacity w3-center">Vice Secretary</p> 
          <p class="w3-center"></p> 
 
        

           </div> 
      </div> 
    </div> 
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/fredo.jpg" class="w3-padding-16" alt="Dan" style="width:80%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">FUAD <br>ALI</h4></p> 
          <p class="w3-opacity w3-center"></p> 
          <p class="w3-center"></p> 
           </div> 
      </div> 
    </div> 
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/ironpro.png" class="w3-padding-16" alt="Dan" style="width:80%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">AZAM <br>RAZAK</h4></p> 
          <p class="w3-opacity w3-center"></p> 
          <p class="w3-center"></p> 
           </div> 
      </div> 
    </div> 
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/uhigh.jpg" class="w3-padding-16" alt="Dan" style="width:60%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">DHIA ULHAQ<br></h4></p> 
          <p class="w3-opacity w3-center"></p> 
          <p class="w3-center"></p> 
           </div> 

      </div> 
    </div> 
    <div class="w3-col l3 m6 w3-margin-bottom"> 
      <div class="w3-card w3-white w3-hover-shadow"> 
        <img src="photo/mad.jpg" class="w3-padding-16" alt="Dan" style="width:80%"> 
        <div class="w3-container"> 
          <h4><p class="w3-center">AHMAD <br>ALI</h4></p> 
          <p class="w3-opacity w3-center"></p> 
          <p class="w3-center"></p> 
           </div> 




 
        </div> 
      </div> 
    </div> 
  </div> 
</div>

    <h4><b>E SPORTS Club Membership</b></h4>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	
	
	
	<p align="center"id="membership"><h3>Membership form for E SPORTS Club 2024</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center w3-white">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

	<!-- Activity Section--> 
<div class="w3-container w3-light-grey" style="padding:100px 16px" id="activity"> 
<h3 class="w3-center"><b>ACTIVITIES BY UiTM E SPORTS CLUB In 2022-2024</h3>
     <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a> 
    <p class="w3-center w3-large">Igniting Passion, One Activity at a Time.</p> 
    
 
  <table class="table table-hover text-center w3-white"> 
      <thead class="table-dark"> 
        <tr> 
          <th scope="col">Activity ID</th> 
          <th scope="col">Activity Name</th> 
          <th scope="col">Activity Date</th> 
          <th scope="col">In collaboration with</th> 
       
        </tr> 
      </thead> 
      <tbody> 
    
        <?php 
        $sql = "SELECT * FROM `activity`"; 
        $result = mysqli_query($conn, $sql); 
        while ($row = mysqli_fetch_assoc($result)) { 
        ?> 
          <tr> 
            <td><?php echo $row["activity_id"] ?></td> 
            <td><?php echo $row["activity_name"] ?></td> 
            <td><?php echo $row["activity_date"] ?></td> 
            <td><?php echo $row["club_name"] ?></td> 
          
          </tr> 
        <?php 
        } 
        ?> 
      </tbody> 
    </table> 
  </div>

	
    </p>
    <hr>
    
    <h4 id="gallery">GALLERY</h4>
   <div class="w3-container w3-center"> 
 
 <img src="photo/es3.jpeg" class="w3-padding-16" alt="John" style="width:40%"> 
 <img src="photo/es1.jpg" class="w3-padding-16" alt="John" style="width:40%"> 
  <img src="photo/es2.jpg" class="w3-padding-16" alt="John" style="width:40%"> 
  <img src="photo/es4.jpg" class="w3-padding-16" alt="John" style="width:40%"> 
 
 
</div>

  
  <!-- Contact Section --> 
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact"> 
  <h3 class="w3-center"><b>CONTACT</h3></b> 
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p> 
    <a href="add_contact.php" class="btn btn-dark mb-3">Add Message</a> 
 
    <table class="table table-hover text-center w3-white"> 
      <thead class="table-dark"> 
        <tr> 
          <th scope="col">Contact ID</th> 
          <th scope="col">Contact Name</th> 
          <th scope="col">Contact Student ID</th> 
          <th scope="col">Contact Number</th> 
          <th scope="col">Email</th> 
          <th scope="col">Comment</th> 
         
        </tr> 
      </thead> 
      <tbody> 
    
        <?php 
        $sql = "SELECT * FROM `contact`"; 
        $result = mysqli_query($conn, $sql); 
        while ($row = mysqli_fetch_assoc($result)) { 
        ?> 
          <tr> 
            <td><?php echo $row["contact_id"] ?></td> 
            <td><?php echo $row["contact_name"] ?></td> 
            <td><?php echo $row["contact_studid"] ?></td> 
            <td><?php echo $row["contact_phone"] ?></td> 
            <td><?php echo $row["contact_email"] ?></td> 
            <td><?php echo $row["contact_desc"] ?></td> 
 
            
            </td> 
          </tr> 
        <?php 
        } 
        ?> 
      </tbody> 
    </table> 
  </div>

 
    

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
