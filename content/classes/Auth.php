<?php

    /**
     * Authentication
     * 
     * Login and logout
     */
    class Auth  
    {
        /**
        * Return the user authentication status
        * 
        * @return boolean True if a user is logged in, false otherwise
        */
        public static function isLoggedIn(){
            return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
        }

        /**
         * Require the user to be logged in, stopping with an unauthorised message if not
         * 
         * @return void
         */
        public static function requiredLogin()
        {
            if (! static::isLoggedIn()) {

                die('unauthorised');
                
            }  
        }
        /**
         * Log in using session
         * 
         * @return void
         */
        public static function loggin()
        {   
            session_start();
            $_SESSION['is_logged_in'] = true;
        }
        /**
         * Logout using session
         * 
         * @return void
         */
        public static function logout()
        {
            // Destruir todas las variables de sesión.
            $_SESSION = array();

            // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
            // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(
                    session_name(),
                    '',
                    time() - 42000,
                    $params["path"],
                    $params["domain"],
                    $params["secure"],
                    $params["httponly"]
                );
            }

            session_destroy();
        }
    }