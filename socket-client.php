<?php
//$addr = gethostbyname("evertonsena.000webhostapp.com");
//echo $addr; exit;
//$addr = "127.0.0.1";
//$addr = "177.149.213.240";
$addr = "0.0.0.0";
$port = "7331";
$client = stream_socket_client("tcp://$addr:$port", $errno, $errorMessage);
if ($client === false) {
    throw new UnexpectedValueException("Failed to connect: $errorMessage");
}
// tk102 data
$data = "imei:359710049095095,tracker,151006012336,,F,172337.000,A,5105.9792,N,11404.9599,W,0.01,322.56,,0,0,,,";
fwrite($client, $data);
while (!feof($client)) {
    echo fgets($client, 128);
}
    
fclose($client);
