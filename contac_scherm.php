<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #58718c;
color: white;
padding-left: 20px;
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

echo $_POST['UName'];

$sql_select = "SELECT  contact_id,message, name,email,number FROM contact_form";
$result = $con->query($sql_select);


?>


    
    <div class="container" style="  padding-top: 150px; padding-bottom: 150px;     position: relative; right: 105px;">
        <div class="row ">
            <div class="col-12">
                <table>
                    
                    
                        <tr>
                            <th>ID</th>
                            <th>Message</th>
                            <th>name</th>
                            <th>email</th>
                            <th>number</th>
                            <th>Reageren</th>
                            
                        </tr>

<?php 
foreach($_SESSION as $username){
        
    $sql_select_login_admin = " SELECT rechten_id FROM `login` WHERE username LIKE '%$username%' ";
    $result_login = $con->query($sql_select_login_admin);
    foreach($result_login as $dtaauser){
        $rechten = $dtaauser['rechten_id'];
        
        if($rechten === '1'){
           

            $sql_select = "SELECT  contact_id,message, name,email,number FROM contact_form WHERE deleted= 0 AND weergeven = 1";
            $result = $con->query($sql_select);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["contact_id"]. "</td><td>" . $row["message"] . "</td><td>"
            . $row["name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["number"] . "</td><td><button class='button_reag'> Klik </button></td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
    
            
        }else{

            echo '<b>Welcome <span style="color: green; ">'. $username .'</span>  u bent als een medewerker ingelogd </b>';

            $sql_select = "SELECT  contact_id,message, name,email,number FROM contact_form WHERE deleted= 0 AND weergeven = 1";
            $result = $con->query($sql_select);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["contact_id"]. "</td><td>" . $row["message"] . "</td><td>"
            . $row["name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["number"] . "</td><td style='color: red;font-size: 19px; text-align: center;'>Geen Toegaan</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
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

