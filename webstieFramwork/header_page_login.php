
    <div class='header-area '>
        <div class='header-top_area'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-xl-6 col-md-12 col-lg-8'>
                        <div class='short_contact_list'>
                            <ul>
                                <li><a href='tel:0685125822'> <i class='fa fa-phone'></i> 0031 685125822</a></li>
                                <li><a href='mail:info@portoftroy.com'> <i class='fa fa-envelope'></i>info@portoftroy.com</a></li>
                                <li> 
                                <?php
                                    if(isset($_SESSION['User'])){ 
                                        echo '<p style ="position: absolute;font-weight: 700;width: 100%; bottom:0px;">Welcome <span style="color: green;">'. $_SESSION['User'].'  </span>in your website , you are logged in</p>';
                                    }
                                    else{ 
                                        header("location:index.php");
                                    }
                                    ?>
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
                            <a href="logout.php?logout">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
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
                                    <li><a href='contac_scherm.php'>Contact</a></li>
                                    <li><a href='medewerkers_scherm.php'>Reservatie </a>
                                    </li>
                                    <li><a href='medewerkers_scherm.php'>Medewerkers </i></a>
                                    
                                    
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
