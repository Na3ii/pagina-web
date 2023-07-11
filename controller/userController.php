<?php

session_start();

require_once '../models/connection.php';

require_once('../models/user.php');

$user = new User();

switch ($_GET["op"]) {

    case 'login':

        echo $user->login($_POST["email"], $_POST["password"]);

        break;

    case 'create_update':
        // if (empty($_POST["usu_id"])) {
        //     $user->store($_POST["usu_nom"], $_POST["usu_ape"], $_POST["usu_correo"], $_POST["usu_pass"], $_POST["rol_id"], $_POST["usu_telf"]);
        // } else {
        // $user->update($_POST["usu_id"], $_POST["usu_nom"], $_POST["usu_ape"], $_POST["usu_correo"], $_POST["usu_pass"], $_POST["rol_id"], $_POST["usu_telf"]);
        // }

        if ($_POST["tpu"] == 2) {
            $user->store_client($_POST["name"], $_POST["lastname"], $_POST["emailR"], $_POST["passwordR"], $_POST["tpu"]);
        }

        break;

    default:
        # code...
        break;
}
