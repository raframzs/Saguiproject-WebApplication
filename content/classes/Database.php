  
<?php
    /**
     * Database
     * 
     * A connection to the database
     */
    class Database  
    {   

        /**
         * Hostname
         * @var string
         */
        protected $db_host;

        /**
         * Database name
         * @var string
         */
        protected $db_name;

        /**
         * Username
         * @var string
         */
        protected $db_user;

        /**
         * Database password
         * @var string 
         */
        protected $db_password;

        /**
         * Constructor
         * @param string host name
         * @param string database name
         * @param string database user
         * @param string database password
         * 
         * @return void
         */
        public function __construct($host, $name, $user, $pass)
        {
            $this->db_host = $host;
            $this->db_name = $name;
            $this->db_user = $user;
            $this->db_password = $pass;
        }

        /**
         * Get the database connection
         * 
         * @return PDO object Connection to the database server
         */
        public function getConn()
        {
            $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name . ';charset=utf8';

            try {
                // Instancia que representa la conección con la DB
                $db = new PDO($dsn, $this->db_user, $this->db_password);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $db;

            } catch (PDOException $e) {
                echo $e->getMessage(); exit;
            }
        }

        
    }