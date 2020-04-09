<style>

/* hier bij de alle css code van deze  pagina en hier wordt als internal toegevoegd */
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
padding-left: 20px;
border: 1px solid #ddd;
padding: 8px;
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #142c5d;
color: white;
padding-bottom: 20px;
}
td{
    text-align: center;
    padding-bottom: 20px;
    border: 1px solid black;
    background-color: ;
}
tr:nth-child(even){
    background-color: #f2f2f2;
    }
tr:hover {
    background-color: #ddd;
    }
.button_reag{

    background-color: green;
    padding: 5px 1px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 80%;
    font-size: 20px;
    text-align: center;
    margin-left: 20px;

}
.medewerk{
    
    text-align: center !important;
    margin-right: 300px !important;
    margin-left: 100px !important;
    position: relative;
    top: 150px;
}
.block_mede{

    text-align: center;
    border: none;
    background: radial-gradient(black, transparent);
    font-family: sans-serif;
    font-size: 20px;
}

.form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
/* .send{

    position: relative;
    top: 140px;
    padding: 10px 20px;
    width: 50%;
} */
.geen_toegaan{

    margin-top: 17px;
    border: 1px solid black;
    background-color: aquamarine;
    margin-bottom: 11px;
}

</style>

<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/Header.php";
include($path);

session_start(); 



// connectie met database
require_once('Database/connection.php');

// <!-- header ================================================== -->

// hier bij includ de home van de website allen op index page.
$header_page = $_SERVER['DOCUMENT_ROOT'];
$header_page .= "/webstieFramwork/header_page_login.php";
include($header_page);

//<!-- header-start -->
?>

<!-- deze code hier is gemaakt op de inhoud van de toevoegen form van de medewerker te sturen naar de database -->
<?php
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
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$gebruikernaam = $_POST['gebruikernaam'];
$wachtwoord = $_POST['wachtwoord'];
$email = $_POST['email'];
$geslacht = $_POST['geslacht'];
$land = $_POST['land'];
$park = $_POST['park'];

$sql = "INSERT INTO medewerkers (voornaam, achternaam, gebruikersnamen,wachtwoord,email,geslacht,land,park,deleted,weergeven)

VALUES (
'".$_POST["voornaam"]."',
'".$_POST["achternaam"]."',
'".$_POST["gebruikersnamen"]."',
'".$_POST["wachtwoord"]."',
'".$_POST["email"]."',
'".$_POST["geslacht"]."',
'".$_POST["land"]."',
'".$_POST["park"]."',
0,
1
)";
if ($conn->query($sql) === TRUE) {
    
            




$succes = '
<div class="container" id="result_form" style="  padding-top: 150px; position: relative; right: 105px;" >
        <div class="col-12">
            <div class="block_mede"> <b>  Medewerkers Toevoegen</b> </div
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
die();
}

?>
<?php 

// controleren wie heeft ingelogd op de basiss van de session en de rechten_id
foreach($_SESSION as $username){
        
    $sql_select_login_admin = " SELECT rechten_id FROM `login` WHERE username LIKE '%$username%' ";
    $result_login = $con->query($sql_select_login_admin);
    foreach($result_login as $dtaauser){
        $rechten = $dtaauser['rechten_id'];
        // als de admin van de website heeft ingelogd , krigt hij deze code 
        if($rechten === '1'){
           


                       echo' <div class="container" id="medewerker_form" style="  padding-top: 150px; position: relative; right: 105px;" >
                        <div class="row" id="mede">
                            <div class="col-12">
                                <div class="block_mede"> <b>  Medewerkers Toevoegen</b> </div>  

                                    <ul class="form-style-1">
                                        <li>
                                            <label>Full Name <span class="required">*</span></label>
                                            <input type="text" id="voornaam" name="voornaam" class="field-divided" placeholder="voornaam" />
                                            <input type="text" id="achternaam" name="achternaam" class="field-divided" placeholder="achternaam" />
                                        </li>
                                        <li>
                                            <label>Inloggegevens <span class="required">*</span></label>
                                            <input type="text" id="gebruikernaam" name="gebruikernaam" class="field-divided" placeholder="Gebruikersnamen" /> 
                                            <input style="padding:8px" id="wachtwoord" name="wachtwoord" class="field-divided" placeholder="wachtwoord" type="password"/>
                                        </li>

                                        <li>
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" id="email" name="email" class="field-long" />
                                        </li>
                                        <li>
                                            <label>Geslacht</label>
                                            <select id="geslacht" name="geslacht" class="field-select">
                                            <option value="Man">Man</option>
                                            <option value="vrouw">Vrouw</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Land</label>
                                            <select id="land" name="land" class="field-select">
                                            <option value="Nederland">Nederland</option>
                                            <option value="duitsland">duitsland</option>
                                            <option value="England">England</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Park</label>
                                            <select  id="park" name="park" class="field-select">
                                            '; for($i=1; $i<10; $i++){
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                            } echo'
                                            
                                            </select>
                                        </li>
                                        <li>
                                            <button style=" color: antiquewhite;ont-weight: 700;" id="buttonWin">Opslaan</button>
                                        </li>
                                    </ul>       
                            </div> 
                        </div>
                </div>';
    
        // als de medewerker heeft ingelogd krijgt hij deze pagina en zo heeft hij geen toegaan naar het aanpassen en bijwerken van de website
        }else{ 

            echo'
            <div class="container" style="  padding-top: 150px; position: relative; right: 105px;">
                <div class="row ">
                    <div class="col-12">

                        <div class="block_mede"> <b> Medewerkers Toevoegen</b> </div>  

                        <div class="geen_toegaan"><center> <b  style="color:red;" > U hebt geen toegaan naar deze pagina !!!! </b></center></div>

                    </div> 
                </div>
            </div>';

            
        }
   

    }

}

?>
           
    <div class="container" style="  padding-top: 50px; padding-bottom: 150px;     position: relative; right: 105px;">
        <div class="row ">
            <div class="col-12">
            <div class="block_mede"> <b> Alle medewerkers</b> </div>   
                <table>
                    
                    
                        <tr>
                            <th>ID</th>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Gebruikersnamen</th>
                            <th>Wachtwoord</th>
                            <th>Email</th>
                            <th>Geslacht</th>
                            <th>Land</th>
                            <th>Park</th>
                            
                        </tr>

<?php 
foreach($_SESSION as $username){
        
    $sql_select_login_admin = " SELECT rechten_id FROM `login` WHERE username LIKE '%$username%' ";
    $result_login = $con->query($sql_select_login_admin);
    foreach($result_login as $dtaauser){
        $rechten = $dtaauser['rechten_id'];

        // als de admin van de website heeft ingelogd , krigt hij deze code 
        if($rechten === '1'){
           

            $sql_select = "SELECT  id,voornaam, achternaam,gebruikersnamen,wachtwoord,email,geslacht,land,park
            
            FROM medewerkers WHERE deleted= 0 AND weergeven = 1";
            $result = $con->query($sql_select);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>". $row["id"]."</td>
            <td>". $row["voornaam"]."</td>
            <td>". $row["achternaam"]."</td>
            <td>". $row["gebruikersnamen"]."</td>
            <td>". $row["wachtwoord"]."</td>
            <td>". $row["email"] . "</td>
            <td>". $row["geslacht"]."</td>
            <td>". $row["land"]."</td>
            <td>". $row["park"] ."</td>
            </tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
    
            // als de medewerker heeft ingelogd krijgt hij deze pagina en zo heeft hij geen toegaan naar het aanpassen en bijwerken van de website

        }else{
            echo '<center><b>Welcome <span style="color: green; ">'. $username .'</span>  u bent als een medewerker ingelogd </b></center>';
            echo'<div class="geen_toegaan"><center> <b  style="color:red;" > U hebt geen toegaan naar deze pagina !!!! </b></center></div>';
           
        }
   

    }

}

?>
                   
                </table>
            </div>
        </div>
    </div>
';

<!-- header-end ==========================================================-->
<?php
// hier bij includ de footer van de website alle pagina.
$footer = $_SERVER['DOCUMENT_ROOT'];
$footer .= "/includes/footer.php";
include($footer);

?>
    <script>

$("#buttonWin").click(function() {
	var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i);
	if ($("#voornaam").val() == '' || $("#achternaam").val() == '' || $("#gebruikernaam").val() == '' 

    || $("#wachtwoord").val() == '' || $("#email").val() == '' || $("#geslacht").val() == '' || $("#land").val() == '' || $("#park").val() == '' ) {
		alert("Vul alle velden in ... !!!!!!");
	} else if (!($("#email").val()).match(email)) {
		alert("Het ingevoerde e-mail adres klopt niet");

    
	} else {
		// alert("Het bericht is succesvol verzonden.");
		$.post('medewerkers_scherm.php', {
			action:'save_win_form',
            voornaam: $("#voornaam").val(),
			achternaam: $("#achternaam").val(),
			gebruikernaam: $("#gebruikernaam").val(),
            wachtwoord: $("#wachtwoord").val(),
            email: $("#email").val(),
            geslacht: $("#geslacht").val(),
            land: $("#land").val(),
            park: $("#park").val()
            
            
			
		}, function(data){
			if(data != ' '){
			$("#mede").hide();
			$("#medewerker_form").append(data)
			}else{
				$("#medewerker_form").append(data)
			}
		
			
		});
		
	}
});
</script>