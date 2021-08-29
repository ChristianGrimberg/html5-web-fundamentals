<?php
    $user = $_POST["name"];
    $mail = $_POST["email"];
    $carrera = $_POST["carrer"];
    $turno = $_POST["turno"];

    print '<a href="../class3.html" target="_self">Atras</a><br>';

    print 'Inscripcion correcta!!!'.'<br>';
    print 'Usted se inscribio en la carrera: '.$carrera.'<br>';
    print 'Turno: '.$turno.'<br>';
    print 'Recibira un mail de confirmacion en: '.$mail.'<br>';
?>