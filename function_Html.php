<?php 

function email_telefoonnummer (){
    echo"
        <div class='col-xl-6 col-md-12 col-lg-8'>
            <div class='short_contact_list'>
                <ul>
                    <li><a href='tel:0685125822'> <i class='fa fa-phone'></i> 0031 685125822</a></li>
                    <li><a href='mail:info@portoftroy.com'> <i class='fa fa-envelope'></i>info@portoftroy.com</a></li>
                </ul>
            </div>
        </div>"
    ;
}



function sociaal_media (){
    echo"
        <a href='https://www.facebook.com/PortOfTroy/' target='_blank'>
            <i class='fa fa-facebook'></i>
        </a>
        <a href='https://www.facebook.com/PortOfTroy/' target='_blank'>
            <i class='fa fa-twitter'></i>
        </a>
        <a href='https://www.facebook.com/PortOfTroy/' target='_blank'>
            <i class='fa fa-linkedin'></i>
        </a>"
    ;
}


function nav_bar (){
    echo"
    <nav>
        <ul id='navigation'>
            <li><a href='index.php'>home</a></li>
            <li><a href='About.php'>About</a></li>
            <li><a href='#'>blog <i class='ti-angle-down'></i></a>
                <ul class='submenu'>
                    <li><a href='blog.php'>blog</a></li>
                    <li><a href='single-blog.php'>single-blog</a></li>
                </ul>
            </li>
            <li><a href='#'>pages <i class='ti-angle-down'></i></a>
                <ul class='submenu'>
                    <li><a href='elements.php'>elements</a></li>
                    <li><a href='Cause.php'>Cause</a></li>
                </ul>
            </li>
            <li><a href='contact.php'>Contact</a></li>
        </ul>
    </nav>"
    ;
}



?> 
