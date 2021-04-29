<?php 


class Conexion{


private $servidor;
private $nombre;
private $clave;
private $bd;



    function __construct(){

          $this->servidor = "localhost";
           $this->nombre = "root";
           $this->clave = "root";
           $this->bd="socialnetwork";
   }





       Public function Conectar(){

        $conectar = mysqli_connect($this->servidor,$this->nombre,$this->clave,$this->bd);
        

            return $conectar;
       

 

       }
       



















}


















