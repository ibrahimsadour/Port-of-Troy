<?php 

// hier bij includ de header van de website

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/Header.php";
include($path);


// hier roep ik alle function die ik nodig heb in de website
$function = $_SERVER['DOCUMENT_ROOT'];
$function .= "/function/function_Html.php";
include($function);


// hier bij includ de home van de website allen op index page.
$header_page = $_SERVER['DOCUMENT_ROOT'];
$header_page .= "/includes/header_page.php";
include($header_page);


// deze code is gemaakt voor het ajax om het contact form naar dataabse te sturen   
$required = array('name', 'email', 'message','number');


if(isset($_POST['action']) && $_POST['action'] == 'save_win_form') {

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$sql = "INSERT INTO contact_form (message, name, email,number,deleted,weergeven)
VALUES ('".$_POST["message"]."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["number"]."',0,1)";
if ($conn->query($sql) === TRUE) {
    
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$succes = '
    <div id="contact_list" >     
        <br><center><h1> ☺ uw bericht is verzonden  ☺ </h1></center><br>
        <center><h2>  over drie werkdagen krijgt u een reactie van onze .... </h2></center> <br>
        <center><a href="index.php">Click hier om te terug naar het home pagina</a></center>
    </div>
';

echo $succes;
die();
}

?>




<!-- deze java script code is gemaakt om het inlogen form te laat zien  -->
<script> 
		var modal = document.getElementById('id01'); 
		window.onclick = function(event) { 
			if (event.target == modal) { 
				modal.style.display = 'none'; 
			} 
		} 
	</script> 

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
    
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                        
                    </script>
    
                </div>
    
    
                <div class="row" style="height:500px">
                    <div  id="form_win">
                        <div id="contact_list" >     

                            <div class="col-12">
                                <h2 class="contact-title">Neem contact op</h2>
                            </div>
                            <div class="col-lg-8">
                                
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" id="message" type="text" name="message"  required="required" cols="30" rows="9"  placeholder=" Voer bericht in"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid"  id="name" type="text" type="hidden" name="name" required="required" placeholder="Vul uw naam in">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="top: 9px;">
                                        <div class="form-group">
                                            <input class="form-control valid" style="padding: 12px 20px;" id="email" type="text" name="email"  required="required"placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="number" id="number" type="tel"  placeholder="Voer telefoonnummer in">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn" id="buttonWin" >Send</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>    
                    <div class="gegevens">
                        <div class="col-lg-3 offset-lg-1">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3>Port Of troy</h3>
                                    <p> Cypressehout 99, 1507 EK Zaandam, Nederland</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3>0685125822</h3>
                                    <p>Ma t/m Vr 09.00 tot 18.00 uur</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3>support@portoftroy.com</h3>
                                    <p>Stuur ons uw vraag op elk moment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

<?php // hier bij includ de footer van de website alle pagina.
$footer = $_SERVER['DOCUMENT_ROOT'];
$footer .= "/includes/footer.php";
include($footer);?>

    <script>

$("#buttonWin").click(function() {
	var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i);
	if ($("#name").val() == '' || $("#email").val() == '' || $("#message").val() == '') {
		alert("Vul alle velden in ... !!!!!!");
	} else if (!($("#email").val()).match(email)) {
		alert("Het ingevoerde e-mail adres klopt niet");
	} else {
		// alert("Het bericht is succesvol verzonden.");
		$.post('contact.php', {
			action:'save_win_form',
            message: $("#message").val(),
			name: $("#name").val(),
			email: $("#email").val(),
            number: $("#number").val()
			
		}, function(data){
			if(data != ' '){
			$("#contact_list").hide();
			$("#form_win").append(data)
			}else{
				$("#form_win").append(data)
			}
		
			
		});
		
	}
});
</script>