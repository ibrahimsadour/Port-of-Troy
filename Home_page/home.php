<?php
// deze code is gemaakt met PHP om het reserveren form naar dataabse te sturen.


// connection with database
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

// arry met de all velden van de reservering form
$itmes = array(
    'bunglo_id',
    'begin_datuim',
    'eind_datuim',
    'bungalow_name',
    'handdoek',
    'kinderstoel',
    'internet',
    'wasmachine',
    'geslacht',
    'voornaam',
    'tussenvoegsel',
    'achternaam',
    'postcode',
    'huisnummer',
    'land',
    'email'

);


// als de gebruiker op de butto resrevering hebt hij geklikt wordt deze stukje code uitgevoerd
if(isset($_POST['action']) && $_POST['action'] == 'reserveren_form') {


    //all values van de reservering form
    $begien_tijd = $_POST['begin_datuim'];
    $eind_tijd = $_POST['eind_datuim'];
    $bungalow = $_POST['bungalow_name'];
    $handdoek = $_POST['handdoek'];
    $kinderstoel = $_POST['kinderstoel'];
    $internet = $_POST['internet'];
    $wasmachine = $_POST['wasmachine'];
    $geslacht = $_POST['geslacht'];
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $postcode = $_POST['postcode'];
    $straatenhuisnummer = $_POST['huisnummer'];
    $land = $_POST['land'];
    $email = $_POST['email'];


    // hier bij controleer ik als de begien datum van de nieuw gebruiker beziet of nee


    // $select_begien = "SELECT 

    // begin_datuim as begein,
    // eind_datuim as eind


    // FROM reservering 

    // LEFT JOIN bungolw

    // ON  reservering.bunglo_id = bungolw.id  WHERE bungolw.naam LIKE '%$bungalow%'";

    // $result = mysqli_query($mysqli, $select_begien);

    

    //     if($begin != $begien_tijd && $eind !=  $eind_tijd ){
        
        

    // select query om alle bengalow te halen van de database::
    $select_id_bungalow = "SELECT 

	bungolw.id as bungalow_id,
    bungolw.naam as bungolw_name,
    reservering.begin_datuim as begein,
    reservering.eind_datuim as eind


    FROM reservering 

    LEFT JOIN bungolw

    ON  reservering.bunglo_id = bungolw.id  WHERE bungolw.naam LIKE '%$bungalow%'";

    $select_bunglow_id = $conn->query($select_id_bungalow );

    foreach($select_bunglow_id as $itmes){
        
        // $begin = $itmes['begein'];
        // $eind = $itmes['eind'];
        // $bungalow_name_data = $itmes['bungolw_name'];

        // if($begin != $begien_tijd && $eind != $eind_tijd  && $bungalow_name_data != $bungalow ){


        $sql = "INSERT INTO reservering (

        bunglo_id,
        begin_datuim,
        eind_datuim,
        handdoek,
        kinderstoel,
        internet,
        wasmachine,
        geslacht,
        voornaam,
        tussenvoegsel,
        achternaam,
        postcode,
        Straatenhuisnummer,
        land,
        email
        )
        VALUES (

        '".$itmes['bungalow_id']."',
        '".$_POST["begin_datuim"]."',
        '".$_POST["eind_datuim"]."',
        '".$_POST["handdoek"]."',
        '".$_POST["kinderstoel"]."',
        '".$_POST["internet"]."',
        '".$_POST["wasmachine"]."',
        '".$_POST["geslacht"]."',
        '".$_POST["voornaam"]."',
        '".$_POST["tussenvoegsel"]."',
        '".$_POST["achternaam"]."',
        '".$_POST["postcode"]."',
        '".$_POST["huisnummer"]."',
        '".$_POST["land"]."',
        '".$_POST["email"]."'
        )";


        if ($conn->query($sql) === TRUE ) {

       

        $succes = '
        <div class="container" id="result_form" style="  padding-top: 150px; position: relative; right: 105px;" >
                <div class="col-12">
                    <div class="block_mede" id="block_mede"> <b>  Medewerkers Toevoegen</b> </div
                        <div id="mede" >     
                            <br><center><h1> ☺ uw bericht is verzonden  ☺ </h1></center><br>
                            <center><h2>  over drie werkdagen krijgt u een reactie van onze .... </h2></center> <br>
                            <center><a href="medewerkers_scherm.php">Click hier om te terug naar het home pagina</a></center>
                        </div>
                    </div>
                </div>
        </div>
        ';
        echo $succes;
        $conn->close();
        
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
       
    }  
    die();
    
}
?>




 <!-- css code voor de reserevering form -->
 <link rel="stylesheet" href="/Home_page/boking_form.css">

 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
 <link rel="stylesheet" href="/resources/demos/style.css">



 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <!-- java script code voor de reservering form -->
 <script>

$( function() {

$( "#datepicker" ).datepicker();

} );

$( function() {

$( "#datepicker1" ).datepicker();

} );
 </script>
 



<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="slider_text ">
                        <span>Get Started Today.</span>
                        <h3> Welcome to Port Of Troy Holiday Park</h3>
                        <p>Ga lekker zitten, ontspan en zie de kinderen zich vermaken op onze FUNTASTIC kinderspeelplaats.</p>
                        <a href="About.html" class="boxed-btn3">Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- popular_causes_area_start  -->
<div class="popular_causes_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span>Port Of Troy </span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="causes_active owl-carousel">
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/1.jpg" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div>
                                    </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: $5000.00 </span>
                                <span>Goal: $9000.00 </span>
                            </div>
                            <h4>Accommodation</h4>
                            <p>Kies uit ons brede assortiment volledig op zichzelf staande cederhutten of geniet van onze 
                        aangedreven sites privacy en bescherming.</p>
                            <a class="read_more" href="cause_details.html">Read More</a>
                        </div>
                    </div>
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/2.jpg" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div>
                                    </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: $5000.00 </span>
                                <span>Goal: $9000.00 </span>
                            </div>
                            <h4>Park Facilities</h4>
                            <p>Er is zoveel plezier te beleven in Belfast Cove, dat je misschien nooit meer weg wilt.
                                Van het verwarmde binnenzwembad.   </p>
                            <a class="read_more" href="cause_details.html">Read More</a>
                        </div>
                    </div>
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/3.jpg" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div>
                                    </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: $5000.00 </span>
                                <span>Goal: $9000.00 </span>
                            </div>
                            <h4>Specials</h4>
                            <p>Laat ons de zorgen wegnemen bij het plannen van uw volgende uitje.
                                Geweldige specials die we nu kunnen aanbieden</p>
                            <a class="read_more" href="cause_details.html">Read More</a>
                        </div>
                    </div>
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="img/causes/1.png" alt="">
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div>
                                    </div>
                            </div>
                            <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: $5000.00 </span>
                                <span>Goal: $9000.00 </span>
                            </div>
                            <h4>Help us to Send Food</h4>
                            <p>The passage is attributed to an 
                                unknown typesetter in the century 
                                who is thought</p>
                            <a class="read_more" href="cause_details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- latest_activites_area_start  -->
<div class="latest_activites_area">
    <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
        <a class="popup-video" href="https://www.youtube.com/watch?v=iFJt_Vcch3c">
            <i class="flaticon-ui"></i>
        </a>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="activites_info">
                    <div class="section_title">
                        <h3> <span>Ontdek Port Of Troy Holiday Park </span><br></h3>
                    </div>
                    <p class="para_1">Port Of Troy  biedt een perfecte balans tussen activiteit en rust.
                        Selecteer uw eigen stukje tuin om uw busje te parkeren.</p class="para_1">
                    <p class="para_2">L Zet de picknicktafel en de ligstoelen neer in de beschutting van de bomen.
                        Je kunt niet anders dan ontspannen in het zachte tempo van Port Fairy.
                        OF u kunt een van onze comfortabele en goed ingerichte cederhutten kiezen die in het park zijn genesteld. Elk met zijn eigen veranda,
                        is er een stijl voor alle smaken en budgetten.
                        Port Fairy werd onlangs gestemd in de Top 20 Dream Destinations die mensen op Pinterest wilden bezoeken.
                        Brochure downloaden - Port Of Troy  Brochure
                        Een momentopname van onze prachtige stad is te vinden in de onderstaande video ... Port of troy ... Inspirerend!</p>
                    <a href="#" data-scroll-nav='1' class="boxed-btn4">Een reservering maken</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- latest_activites_area_end  -->

<!-- resereveren form 
hier bij kan de gebruiker reserveren maken voor bungulow
kan de gebruiker zijn gegevns toevoegen
-->

    <div data-scroll-index='1' class='make_donation_area section_padding'>
        <div class="booking-area"  id="boking_form">
            <div class="container">
                <div class="row">
 
                <div class="boking_form" id="first_boking_form">
                    <h2 class="form_title"> Bungalow reserveren</h2>

                    <div class="firest_form">

                        <ul style="    margin-right: 46px;">


                            <div class="firest_title">
                                <h3 class="panel-title">Informatie</h3>
                            </div>

                            <li>
                            <label>Begin tijd:<span style="color:red"> *</span></label>
                            <input type="date" size="60" name="begin_datuim" id="begin_datuim"/>
                            </li>

                            <li>
                                <label>Eind tijd:<span style="color:red"> *</span></label>
                                <input type="date" size="60" name="eind_datuim" id="eind_datuim"/>
                            </li>


                            <div class="firest_title">
                                <h3 class="panel-title">Reisgezelschap</h3>
                            </div>


                            <li><label>Bungalow<span style="color:red"> *</span></label>

                                <select class="form-control" name="RecreationBookForm[composition][8]" id="bungalow_name" name="bungalow_name"  >
                                <?php  
                                    $select_bunglow_id = "SELECT *
                                        
                                    FROM bungolw";
                                    $result_select_bunglow = $conn->query($select_bunglow_id);

                                    foreach($result_select_bunglow as $row){
                                        $bungalow_name=$row['naam'];
                                        $bungalow_id=$row['id'];

                                        echo "<option id='bunglow_id' value=$bungalow_name>$bungalow_name</option>";

                                    }
                                   
                                ?>
                                </select>
                            </li>


                            <div class="firest_title">
                                <h3 class="panel-title">Extra's</h3>
                            </div>

                            <li><label>Handdoekenpakket</label>

                                <select class="form-control" name="RecreationBookForm[composition][8]" id="handdoek" name="handdoek">
                                        <option value="0">---</option>
                                        <option value="0">NEE</option>
                                        <option value="1">JA</option>
                                </select>
                            </li>


                            <li><label>Kinderbed & stoel</label>

                                <select class="form-control" name="RecreationBookForm[composition][8]" id="kinderstoel" name="kinderstoel">
                                        <option value="0">---</option>
                                        <option value="0">NEE</option>
                                        <option value="1">JA</option>
                                </select>
                            </li>


                            <li><label> Internet (WIFI en bedraad)</label>

                                <select class="form-control" name="RecreationBookForm[composition][8]" id="internet" name="internet">
                                        <option value="0">---</option>
                                        <option value="0">NEE</option>
                                        <option value="1">JA</option>
                                </select>
                            </li>


                            <li><label>  Wasmachine extra</label>

                                <select class="form-control" name="RecreationBookForm[composition][8]" id="wasmachine" name="wasmachine">
                                        <option value="0">---</option>
                                        <option value="0">NEE</option>
                                        <option value="Ja">JA</option>
                                </select>
                            </li>

                            <li>

                                <label >Aanmelden nieuwsbrief</label>
                                <input type="hidden" value="" >
                                <label style="float: right;"><input  type="checkbox" >Mailing</label>

                            </li>

                        </ul>
                    </div>

                    <div class="second_form">
                        <ul style="    margin-right: 46px;">


                            <div class="firest_title">
                                <h3 class="panel-title">Nog geen gast?</h3>
                            </div>

                            <li style="border:1px inset darkgreen; border-radius: 5px;margin: 5px 0px;padding: 5px;">
                                <label>Aanhef <span style="color:red"> *</span></label>
                                    <p>Selecteer alstublieft uw geslacht:</p>

                                    <select id="geslacht" name="geslacht" class="field-select">
                                            <option value="--">---</option>
                                            <option value="Man">Man</option>
                                            <option value="vrouw">Vrouw</option>
                                            <option value="vrouw">Anders</option>
                                            </select>

                            </li>

                            <li class="form-group"><label>Voornaam<span style="color:red"> *</span></label>

                                <input type="text"  name="voornaam" itmes placeholder="Jouw voornaam" maxlenght='50' pattern="[A-Za-z]{4,}" id="voornaam" >
                            </li>

                            <li class="form-group" ><label>Tussenvoegsel<span style="color:red"> *</span></label>

                                <input type="text"  name="tussenvoegsel" itmes placeholder="Tussenvoegsel" maxlenght='50' pattern="[A-Za-z]{4,}" id="tussenvoegsel">
                            </li>

                            <li><label>Achternaam<span style="color:red"> *</span></label>

                                <input type="text"  name="achternaam" itmes placeholder="Jouw achternaam" maxlenght='50' pattern="[A-Za-z]{4,}" id="achternaam">
                            </li>
                            

                            
                            <li class="form-group" ><label>Postcode <span style="color:red"> *</span></label>

                                <input type="text"  name="postcode" itmes placeholder="Postcode " maxlenght='50' pattern="[A-Za-z]{4,}" id="postcode">
                            </li>


                            <li><label>Straat en huisnummer <span style="color:red"> *</span></label>

                                <input type="text"  name="huisnummer" itmes placeholder="Straat en huisnummer " maxlenght='50' pattern="[A-Za-z]{4,}" id="huisnummer">
                            </li>

                            
                            <li class="form-group" ><label>Land <span style="color:red"> *</span></label>

                                <input type="text"  name="land" itmes placeholder="land " maxlenght='50' pattern="[A-Za-z]{4,}" id="land">
                            </li>

                            <li><label>E-mailadres  <span style="color:red"> *</span></label>

                                <input type="text"  name="email " itmes placeholder="email" maxlenght='50' pattern="[A-Za-z]{4,}" id="email">
                            </li>

                        </ul>
                    </div>
                        <div class="form_butoon">
                            <button class="next-btn btn btn-primary" type="submit" name="yt0" id="buttonWin"> Reserveren</button>
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- dit stukje code is gemaakt met Ajax hier bij wordt alle itmes van de reserevern form in loclal server gestuurd
 en gechekt daarna wordt met POST method naar PHP code om in de database te platsen  -->
<script>

$("#buttonWin").click(function() {
	
	if ($("#datepicker").val() == ''  || $("#datepicker1").val() == ''  || $("#voornaam").val() == ''  || $("#achternaam").val() == ''  || $("#bungalow_name").val() == '' ) {
		alert("Vul alle velden in ... !!!!!!");
	} else {
		// alert("Het bericht is succesvol verzonden.");
		$.post('index.php', {
			action:'reserveren_form',
            begin_datuim: $("#begin_datuim").val(),
            eind_datuim: $("#eind_datuim").val(),
            bungalow_name: $("#bungalow_name").val(),
            bungalow_id: $("#bunglow_id").val(),
            handdoek: $("#handdoek").val(),
            kinderstoel: $("#kinderstoel").val(),
            internet: $("#internet").val(),
            wasmachine: $("#wasmachine").val(),
            geslacht: $("#geslacht").val(),
            voornaam: $("#voornaam").val(),
            tussenvoegsel: $("#tussenvoegsel").val(),
            achternaam: $("#achternaam").val(),
            postcode: $("#postcode").val(),
            huisnummer: $("#huisnummer").val(),
            land: $("#land").val(),
            email: $("#email").val(),

            

		
		}, function(data){
			if(data != ' '){
			$("#first_boking_form").hide();
			$("#boking_form").append(data)
			}else{
				$("#boking_form").append(data)
			}
           
		});
        
      
	}
});
</script>


