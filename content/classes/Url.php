<?php

    /**
     * Url manager
     * 
     * Response methods
     */
    class Url
    {
        /**
         * Redirect to another URL in the same site
         * 
         * @param string $path The path to redirect for
         * 
         * @return void
         */
        public static function redirect($path){
            
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                $protocol = 'https';
            }else{
                $protocol = 'http';
            }

            // header — Enviar encabezado sin formato HTTP
            header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . $path); 
            exit;
        }
    }