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
        $sql->bindValue(1, $event_name);
        $sql->bindValue(2, $date_event);
        $sql->bindValue(3, $location);
        $sql->bindValue(4, $information);
        $sql->bindValue(5, $spotify);
        $sql->bindValue(6, $number_tickets);
        $sql->execute();
        $resultado = $sql->fetchAll();

        if (is_array($resultado) and count($resultado) > 0) {
            return 1;
        } else {
            return 100;
        }
    }
    // metodo para obtener un evento
    public function get_event($id)
    {

        $Connect = parent::Connect();
        parent::set_names();
        $sql = "SELECT * FROM events where id=?";
        $sql = $Connect->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    // metodo para actualizar un evento
    public function update_event($id_event, $event_name, $date_event, $location, $information, $spotify, $number_tickets)
    {
        $Connect = parent::Connect();
        parent::set_names();

        $sql = "update events 
        set	
        event_name = ?,
        date_event = ?,
        location = ?,
        information = ?,
        spotify = ?,
        number_tickets = ? where id = ?";
        $sql = $Connect->prepare($sql);
        $sql->bindValue(1, $event_name);
        $sql->bindValue(2, $date_event);
        $sql->bindValue(3, $location);
        $sql->bindValue(4, $information);
        $sql->bindValue(5, $spotify);
        $sql->bindValue(6, $number_tickets);
        $sql->bindValue(7, $id_event);
        $sql->execute();
        $resultado = $sql->fetchAll();

        if (is_array($resultado) && count($resultado) > 0) {
            return 100;
        } else {
            return 1;
        }
    }

    // metodo para eliminar un evento
    public function delete_event($id)
    {
        $Connect = parent::Connect();
        parent::set_names();
        
        $sql = "DELETE FROM events WHERE id=?";
        $sql = $Connect->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}

// registro para cliente
nombre
apellido
email
tipo documento
numero documento 
telefono
aparte indicador
fecha nacimiento
contraseña
username - sugerir username
foto 


// artista 
redes sociales
nombre
apellido
email
tipo documento
numero documento 
telefono
aparte indicador
fecha nacimiento
contraseña
username - sugerir username
foto 
todos menos los de demo

// co-worke 
nombre
apellido
email
tipo documento
numero documento 
telefono
aparte indicador
fecha nacimiento
contraseña
username - sugerir username
foto 
Área de trabajo

// demo 2 opciones sin registrarse, o registrandose
mp3
mensaje
correo 
nombre artistico
