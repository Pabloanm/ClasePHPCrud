<?php
    session_start();

    class Connection{

        protected $dbh;

        protected function Conexion(){
            try {

                date_default_timezone_set("America/Argentina/Buenos_Aires");

                //Local
                //aca va la base de datos B4K_new, meter la tabla de los usuarios
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=b4k_new","root","");
                $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conectar->query("SET NAMES 'utf8'"); //para que no exista problema con las tildes
                //$output = 'Database connection established.';
				return $conectar;
                
			} catch (PDOException $e) {
                //$output = 'Unable to connect to the database server: ' . $e->getMessage();
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}

        }

        //para que no exista problema con las tildes
        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        //validar ruta del proyecto
        public static function ruta(){
            //Local
			return "http://localhost/ClasephpCrud/";
            //Produccion
            //return "http://miproyecto.com/";
		}

    }
?>