<?php

session_start();

require_once '../models/connection.php';

require_once('../models/event.php');

$event = new Event();

switch ($_GET["op"]) {

        // crear y actualizar evento
    case 'create_update':

        if (empty($_POST["id_event"])) {
            echo $event->store_event($_POST["event_name"], $_POST["date_event"], $_POST["location"], $_POST["information"], $_POST["spotify"], $_POST["number_tickets"]);
        } else {
            echo $event->update_event($_POST["id_event"], $_POST["event_name"], $_POST["date_event"], $_POST["location"], $_POST["information"], $_POST["spotify"], $_POST["number_tickets"]);
        }
        break;

        // editar evento
    case 'edit':

        $datos = $event->get_event($_POST["id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $event) {
                $output["id"] = $event["id"];
                $output["event_name"] = $event["event_name"];
                $output["date_event"] = $event["date_event"];
                $output["location"] = $event["location"];
                $output["information"] = $event["information"];
                $output["spotify"] = $event["spotify"];
                $output["number_tickets"] = $event["number_tickets"];
            }
            echo json_encode($output);
        }
        break;

        // Eliminar evento
    case "delete":
        $event->delete_event($_POST["id"]);
        break;
}
