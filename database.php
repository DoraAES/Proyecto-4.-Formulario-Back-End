<?php

$db = mysqli_connect('localhost','root', '' ,'reg_alum');

if(!$db){
    echo "Error al establecer conexion con la base de datos";
    echo "Error: ".mysqli_connect_errno();
    exit;
}