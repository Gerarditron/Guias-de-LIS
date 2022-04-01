<?php
    class coordenadas {
        private $coords = array('x' => 0, 'y' => 0);
        //Metodos especiales __get() y __set()
        
        function __get($propierty){
            if(array_key_exists($propierty, $this->coords)){
                return $this->coords[$propierty];
            } else {
                print "Error: Solo se aceptan coordenadas X y Y .<br />\n";
            }
        }

        function __set($propierty, $value){
            if(array_key_exists($propierty, $this->coords)){
                $this->coords[$propierty] = $value;
            } else {
                print "Error: No se puede escribir otra coordenada mas que X y Y .<br />\n";
            }
        }

    }
