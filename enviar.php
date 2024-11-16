<?php 

    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $asunto = $_POST["subject"];
    $mensaje = $_POST["message"];

    mail("a19310143@ceti.mx",$asunto,$mensaje,$email);


?>