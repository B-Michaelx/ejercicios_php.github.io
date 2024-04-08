<?php
    $correo = $_POST['email'];

    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: green;'>El correo electrónico '$correo' es válido.</p>";
    } else {
        echo "<p style='color: red;'>El correo electrónico '$correo' no es válido.</p>";
    }

?>