<?php
    /* TODO: Inicio de Sesion en la WebApp */
    // session_start();

    class Connect{
        protected $dbh;

        protected function Connect(){
            try {
                //TODO: Cadena de Conexion Local
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=loops","root","");
                //TODO: Cadena de Conexion Produccion
                //$conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=andercode_helpdesk1","andercode","contraseña");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        /* TODO: Set Name para utf 8 español - evitar tener problemas con las tildes */
        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        /* TODO: Ruta o Link del proyecto */
        // public static function ruta(){
            //TODO: Ruta Proyecto Local
			// return "http://localhost:80/PERSONAL_HelpDesk/";
            //TODO: Ruta Proyecto Produccion
            //return "http://helpdesk.anderson-bastidas.com/";
		// }

    }