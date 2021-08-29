<?php
    $user = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $state = $_POST["state"];
    $courses = $_POST["courses"];

    print '<a href="../class3-practice.html" target="_self">Atras</a><br>';
    print '<h3>Bienvenid@ '.$user.'</h3>';
    print '<p>Correo ingresado: '.$email.'</p>';
    print '<p>Edad: '.$age.'</p>';
    print '<p>Estado Civil: '.$state.'</p>';
    print '<p>Cursos: '.$courses.'</p>';
?>