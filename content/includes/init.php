<?php
    /**
    * Initializations
    * 
    * Register an autoloader, start or resume the session etc.
    */
    spl_autoload_register(function ($class)
    {
        require dirname(__DIR__)."/classes/{$class}.php";
    });
        
    // Crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.
    session_start();

    require dirname(__DIR__).'/config.php';
    ?>