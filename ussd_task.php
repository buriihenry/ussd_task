<?php
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];
$e_officer= "ken";

if ($text == "") {
    
    $response = "CON welcome to M-Poultry Please select an option\n";
    $response .="1. Customers \n";
    $response .="2. Research institutions\n";
    $response .="3. Extension officers\n";
    $response .="4. Feeds\n";
    $response .="5. Create Profile\n";
    $response .="98. More\n";
}
 if ($text == "1") {
           $response = "CON select option \n: ";
           $response .="1.Hotels\n";
           $response .="2.Individuals\n";
           $response .="3.Institutions\n";

}

if($text=="2"){
    $response = "CON select option\n:";
    $response .="1.Africa Institute for Capacity Development\n";
    $response .="2.Agricultural Information Resource Centre\n";
    $response .="3.KEMRI - Welcome Trust\n";
    $response .="4.Kenya Agricultural and Livestock Research Organization (KALRO)\n";
    
}
if($text == "3"){
    $response = "END your field extension officer is ".$e_officer;
}
if ($text=="4"){
    $response = "CON select option\n";
    $response .="1.Chick mash\n";
    $response .="2.Growers mash\n";
    $response .="3.Layers mash\n";
    $response .="4.Broiler starter crumbs\n";
    $response .="5.kienyeji mash";
}
if ($text == "5") {
    $response = "CON select option\n";
    $response .="1. Create profile";
}
if($text == "5*1"){
    $response = "CON enter your name";
}
$userResponse = explode("*", $text);
$name = $userResponse[2];
if(!empty($name)){
    $response = "END your profile name is ".$name. "Thanks for using M-Poultry platform!!";
}

if($text =="98"){
    $response .="CON select an option\n";
    $response .="1.Layers\n";
    $response .="2.Broilers\n";
    $response .="0.Back";
}

header('Content-type: text/plain');
echo $response;
?>
