<style>
body {
background-image: url('https://scontent-amt2-1.xx.fbcdn.net/v/t31.0-8/903341_401973593231744_960149180_o.jpg?_nc_cat=104&_nc_sid=a61e81&_nc_oc=AQlgexJQuzGIgNs6AGGyv75YHs2Jn6yV43dcOThIi6Ju7Tyq8IrmanvsMdzEZd1RroM&_nc_ht=scontent-amt2-1.xx&oh=fa277ded5189c6b6561a9625a72a31db&oe=5EFB6960');
background-repeat: no-repeat;
background-attachment: fixed;  
background-size: cover;
}

</style>
<?php 
// header includ
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/Header.php";
include($path);

// connectie met database
require_once('Database/connection.php');

// inlogen session
session_start();

// hier kan niet de user naar wellcome pagina comen zonder toegstaan of inlog gegevens.

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  if(isset($_POST['Login'])){

    if(empty($_POST['UName']) || empty($_POST['Password'])){

        header("location:index.php?Empty= Please Fill in the Blanks");

    }else{
      $query="select * from login where username='".$_POST['UName']."' AND password='".$_POST['Password']."'";
      $result=mysqli_query($con,$query);

      if(mysqli_fetch_assoc($result)){
          $_SESSION['User']=$_POST['UName'];
          echo"<div class='header-area '>
          <div class='header-top_area'>
              <div class='container-fluid'>
                  <div class='row'>
                      <div class='col-xl-6 col-md-12 col-lg-8'>
                          <div class='short_contact_list'>
                              <ul>
                                  <li><a href='tel:0685125822'> <i class='fa fa-phone'></i> 0031 685125822</a></li>
                                  <li><a href='mail:info@portoftroy.com'> <i class='fa fa-envelope'></i>info@portoftroy.com</a></li>
                                  <li> 
                                 
                                  </li>
                              </ul>
                              
                          </div>
                      </div>
  
                      <!-- Sociaal media button -->
  
                      <div class='col-xl-6 col-md-6 col-lg-4'>
                          <div class='social_media_links d-none d-lg-block'>
                              <a href='https://www.facebook.com/PortOfTroy/' target='_blank'>
                                  <i class='fa fa-facebook'></i>
                              </a>
                              <a href='https://www.facebook.com/PortOfTroy/' target='_blank'>
                              <i class='fa fa-twitter'></i>
                              </a>
                              <a href='https://www.facebook.com/PortOfTroy/' target='_blank'>
                                  <i class='fa fa-linkedin'></i>
                              </a>
                             
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id='sticky-header' class='main-header-area'>
              <div class='container-fluid'>
                  <div class='row align-items-center'>
                      <div class='col-xl-3 col-lg-3'>
                          <div class='logo'>
                              <a href='index.php'>
                                  <img  class='logoimg' src='img/port of troy logo.png' alt=''>
                              </a>
                          </div>
                      </div>
                      <div class='col-xl-9 col-lg-9'>
                          <div class='main-menu'>
                              <nav>
                                  <ul id='navigation'>
                                      <li><a href='wellcome.php'>home</a></li>
                                      <li><a href='contact_scherm.php'>Contact</a></li>
                                      <li><a href='#'>Reservatie <i class='ti-angle-down'></i></a>
                                          <ul class='submenu'>
                                              <li><a href='blog.html'>Reservatie</a></li>
                                              <li><a href='single-blog.html'>*****</a></li>
                                          </ul>
                                      </li>
                                      <li><a href='#'>pages <i class='ti-angle-down'></i></a>
                                          <ul class='submenu'>
                                              <li><a href='elements.html'>elements</a></li>
                                              <li><a href='Cause.html'>Cause</a></li>
                                          </ul>
                                      </li>
                                      
                                  </ul>
                              </nav>
                              
                          </div>
                      </div>
                      <div class='col-12'>
                          <div class='mobile_menu d-block d-lg-none'></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
    
  
  <!-- header-end ==========================================================-->";
          echo '<div class="inlogenscherm"> Welcome: <div class="nameUser">'.$_SESSION['User'].'</div> You Will Be Redirected To Your Website.';
          echo '<div id="countdown">
                  <div id="countdown-number"></div>
                  <svg>
                  <circle r="18" cx="20" cy="20"></circle>
                  </svg>
              </div> </div>';
          header("REFRESH:3;URL=wellcome.php");
      }
      else{
          header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
          }
      }
  }
    else{
        echo 'Not Working Now Guys';
        }

}else{

    echo'<div class="errorScherm"> Error: You Can\'t Brwose This Page Directaly</div>';

    echo'<div class="error404"> 404</div>';
    echo'<div class="notfond">
    <h2> Oops! This Page Could Not Be Found</h2>
    <p>SORRY BUT THE PAGE YOU ARE LOOKING FOR DOES NOT EXIST, HAVE BEEN REMOVED. NAME CHANGED OR IS TEMPORARILY UNAVAILABLE</p>
    <div class="buttonHome">
    <a href="index.php">Go To Homepage</a>
    </div>
    </div>';
  }


?>
<script>
var countdownNumberEl = document.getElementById('countdown-number');
var countdown = 5;

countdownNumberEl.textContent = countdown;

setInterval(function() {
  countdown = --countdown <= 0 ? 5 : countdown;

  countdownNumberEl.textContent = countdown;
}, 1000);
</script>