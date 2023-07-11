<?php

session_start();

require_once '../models/connection.php';

require_once('../models/event.php');

$event = new Event();

switch ($_GET["op"]) {


    case 'create_update':

        if (empty($_POST["id"])) {
            $user->store_event($_POST["event_name"], $_POST["date_event"], $_POST["location"], $_POST["information"], $_POST["spotify"], $_POST["number_tickets"]);
        } else {
            $usuario->update_event($_POST["id"], $_POST["event_name"], $_POST["date_event"], $_POST["location"], $_POST["information"], $_POST["spotify"], $_POST["number_tickets"]);
        }
        break;

        break;
}
