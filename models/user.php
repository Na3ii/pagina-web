<?php

class User extends Connect
{

    // metodo para iniciar sesion

    // $sql = "INSERT INTO tm_usuario (user_type, workspace, name, lastname, photo, document_type, document_number, phone, birth_date, email, 
    // password, stage_name, biography, Label, instagram, twitter, tikTok, facebook, youTube, spotify, apple_music, beatport, soundcloud, 
    // traxsource, bandcamp, tidal, deezer, demo_message, demo_mp3) 
    //         VALUES (user_type, workspace, name, lastname, photo, document_type, document_number, phone, birth_date, email, 
    // password, stage_name, biography, Label, instagram, twitter, tikTok, facebook, youTube, spotify, apple_music, beatport, soundcloud, 
    // traxsource, bandcamp, tidal, deezer, demo_message, demo_mp3)";

    public function login($email, $password)
    {
        $Connect = parent::Connect();
        parent::set_names();
        if (isset($email) || isset($password)) {
            // $correo = $_POST["usu_correo"];
            // $pass = $_POST["usu_pass"];
            // $rol = $_POST["rol_id"];
            if (empty($email) and empty($password)) {
                return 100;
                // exit();
            } else {
                $sql = "SELECT user_type FROM users WHERE email=? and password=MD5(?) ";
                $stmt = $Connect->prepare($sql);
                $stmt->bindValue(1, $email);
                $stmt->bindValue(2, $password);
                // $stmt->bindValue(3, $rol);
                $stmt->execute();
                $resultado = $stmt->fetch();
                if (is_array($resultado) and count($resultado) > 0) {
                    // $_SESSION["usu_id"] = $resultado["usu_id"];
                    // $_SESSION["usu_nom"] = $resultado["usu_nom"];
                    // $_SESSION["usu_ape"] = $resultado["usu_ape"];
                    // $_SESSION["rol_id"] = $resultado["rol_id"];
                    // header("Location:" . Conectar::ruta() . "view/Home/");

                    return $resultado["user_type"];

                    // if ($resultado == 1) {
                    //     return 1;
                    // } else if ($resultado == 2)  {
                    //     return 2;
                    // } else {
                    //     return 3;
                    // }
                    
                    // exit();
                } else {
                    // header("Location:" . Conectar::ruta() . "index.php?m=1");
                    // exit();
                    return 99;
                }
            }
        }else {
            return 100;
        }
    }

    // metodo para crear un usuario
    public function store_client($name, $lastname, $email, $password, $tpu)
    {
        $Connect = parent::Connect();
        parent::set_names();

        $sql1 = "SELECT * FROM users WHERE email=? ";
        $stmt1 = $Connect->prepare($sql1);
        $stmt1->bindValue(1, $email);
        $stmt1->execute();
        $resultado1 = $stmt1->fetch();

        if (is_array($resultado1) and count($resultado1) > 0) {
            return 99;
        }else {

            $sql = "INSERT INTO users (user_type, workspace, name, lastname, photo, document_type, document_number, phone, birth_date, email, 
            password, stage_name, biography, Label, instagram, twitter, tikTok, facebook, youTube, spotify, apple_music, beatport, soundcloud, 
            traxsource, bandcamp, tidal, deezer, demo_message, demo_mp3) 
                    VALUES (?, NULL, ?, ?, NULL, NULL, NULL, NULL, NULL, ?, 
            ?, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 
            NULL, NULL, NULL, NULL, NULL, NULL)";
            $sql = $Connect->prepare($sql);
            $sql->bindValue(1, $tpu);
            $sql->bindValue(2, $name);
            $sql->bindValue(3, $lastname);
            $sql->bindValue(4, $email);
            $sql->bindValue(5, $password);
            $sql->execute();
            $resultado = $sql->fetchAll();
    
            if (is_array($resultado) and count($resultado) > 0) {
                return 1;
            } else {
                return 100;
            }

        }

    }

    // metodo para actualizar un usuario
    public function update($usu_id, $usu_nom, $usu_ape, $usu_correo, $usu_pass, $rol_id, $usu_telf)
    {
        $Connect = parent::Connect();
        parent::set_names();
        $sql = "UPDATE tm_usuario set
                    usu_nom = ?,
                    usu_ape = ?,
                    usu_correo = ?,
                    usu_pass = MD5(?),
                    rol_id = ?,
                    usu_telf = ?
                    WHERE
                    usu_id = ?";
        $sql = $Connect->prepare($sql);
        $sql->bindValue(1, $usu_nom);
        $sql->bindValue(2, $usu_ape);
        $sql->bindValue(3, $usu_correo);
        $sql->bindValue(4, $usu_pass);
        $sql->bindValue(5, $rol_id);
        $sql->bindValue(6, $usu_telf);
        $sql->bindValue(7, $usu_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}

