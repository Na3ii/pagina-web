<?php

class Event extends Connect
{

    // metodo para crear un evento
    public function store_event($event_name, $date_event, $location, $information, $spotify, $number_tickets)
    {
        $Connect = parent::Connect();
        parent::set_names();

        $sql = "INSERT INTO events (event_name,date_event,location,information,spotify,number_tickets) 
                    VALUES (?,?,?,?,?,?)";
        $sql = $Connect->prepare($sql);
        $sql->bindValue(1, $tpu);
        $sql->bindValue(2, $name);
        $sql->bindValue(3, $lastname);
        $sql->bindValue(4, $email);
        $sql->bindValue(5, $password);
        $sql->bindValue(6, $password);
        $sql->execute();
        $resultado = $sql->fetchAll();

        if (is_array($resultado) and count($resultado) > 0) {
            return 1;
        } else {
            return 100;
        }
    }
}
