
<?php
  $app_name = $_POST["app"];
  $sender   = $_POST["sender"];
  $messages  = $_POST["message"]; 
  $message = "Login";

$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL, "https://almas-semarang-default-rtdb.asia-southeast1.firebasedatabase.app/auth/otp.json");
curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
$reply = json_decode(curl_exec($curlSession));
curl_close($curlSession);

/*  if ($app_name == "WhatsAuto") {
  if ($sender == "WhatsAuto app") { */
     if ($message == "Login") {
        echo json_encode($reply);
}
?>
