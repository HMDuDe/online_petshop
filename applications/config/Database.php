<?php 
//  Author: Hugh-Martin Roux
    session_start();

    class Database{
        private $connection;
        private $is_config = false;
    
        // Database configuration information
        private $config = array(
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'database' => 'online_petsshop'
        );

        public function __construct(){
            $this->connection = $this->config_database();

            $_SESSION['db_con'] = $this->connection; 
        }

        /**
         * @return mysqli object.
         */
        private function config_database(){
            // Validate class instantiation
            if(!$this->validate_startup()){
                die('Database config array is not set');
            }

            global $config;
            $con = new mysqli($config['host'], $config['user'], $config['password']);
            $con->mysql_select_db($config['database']);

            if($con->connect_error){
                die("Connection failed: " . $con->connect_error);
            }

            return $con;
        }

        /**
         * @return true if required startup information = null
         */
        private function validate_startup(){
            foreach($this->config as $field){
                if(empty($field)){
                    return false;
                }
            }

            return true;
        }
    }

    // Database query functions
    class Database_Action extends Database{
        public function __construct(){
            parent::__construct();
        }

        
    }
?>