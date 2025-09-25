<?php

function sendEmail($user, $date, $create_at, $personas) {
    $content = $user. " has creado la reserva []". " para el " . $date. "para ". $personas. "el ". $create_at;

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="reserva.txt"');
    header('Content-Length: '. strlen($content));
    echo $content;
    exit();
}



?>