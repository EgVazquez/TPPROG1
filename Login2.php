<?php
require_once 'ControlSessions.php';

if (empty($_POST['user']) || empty($_POST['password'])) {
    $redirigir = 'index.php?mensaje=Error: Falta un campo obligatorio';
} else {
    $cs = new ControlSessions();
    $login = $cs->login($_POST['user'], $_POST['password']);
    if ($login[0] === true) {
        $redirigir = 'principal.php';
    } else {
        $redirigir = 'index.php?mensaje=' . $login[1];
    }
}
header('Location: ' . $redirigir);
