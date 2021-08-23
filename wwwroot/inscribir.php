<?php
    $user = $_POST["name"];
    $mail = $_POST["email"];
    $carrera = $_POST["carrer"];
    $turno = $_POST["turno"];

    print 'Inscripcion correcta!!!'.'<br>';
    print 'Usted se inscribio en la carrera: '.$carrera.'<br>';
    print 'Turno: '.$turno.'<br>';
    print 'Recibira un mail de confirmacion en: '.$mail.'<br>';
?>