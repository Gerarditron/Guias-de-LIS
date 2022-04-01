<?php
//Definicion de la clase
class auto
{
    //Propiedades de la clase auto
    private $marca;
    private $modelo;
    private $color;
    private $image;
    //Metdodo constructor
    function _construct($marca = 'Honda', $modelo = 'Civic', $color = 'Gris', $image = 'img/hondacivic.jpg')
    {
        //El constructor inicializada los valores de las propiedas del objeto con los valores recibido en los argumentos del metodo constructor.
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->image = $image;
    }

    //Metodos de la clase
    function mostrar()
    {
        //El metodo mostrar() crea una tabla HTML donde se muestran los detalles del objeto auto, como la marca, una imagen, el modelo y el color del auto.
        $tabla = "<div class='col-4 mb-3'>";
        $tabla .= "<div class='card'>";
        $tabla .= "<div class='card-heard'>" . $this->marca . "</div>";
        $tabla .= "<img class='card-img-top' src='" . $this->image . "' alt='Card image cap'>";
        $tabla .= "<div class='card-body'>";
        $tabla .= "<h5 class='card-title'>" . $this->marca . " " . $this->modeloo . "</h5>";
        $tabla .= "<p class='card-text'>MODELO: " . $this->mode . "<br>";
        $tabla .= "COLOR: " . $this->color . "</p>";
        $tabla .= "</div>";
        $tabla .= "</div>";
        $tabla .= "</div>";
        echo $tabla;
    }
}
