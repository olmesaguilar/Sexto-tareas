<?php
    //Declaracion de variables
$nombre = "Juan";   //Variable string
$cantidad = 23;     //Variable integer
$precio = 234.11;   //Variable float
$estadolog = true; //Variable booleana
$frutas = array("manzana","pera","zandia"); //Variable tipo Array

//Operaciones aritmeticas
$multiplicacion=$cantidad*$precio;  //Multiplicacion
$suma=$cantidad+$precio;    //Suma
echo "El resultado de la multiplicacion es: " ,$multiplicacion, "<br>"; //se muestra el resultado de la multiplicacion
echo "El resultado de la suma es: " ,$suma,"<br>"; //Se muestra el resultado de la suma

//Manipulacion de cadenas
$detalle="Baterias de gel";     //Definicion de cadena
$observicion="El Producto se encuentra en mal estado";      //Definicion de cadena
$concatenacion=$detalle.$observicion;   //concatenacion de 2 cadenas
$longitud=strlen($concatenacion);   //Longitud de la cadena
echo "La cadena tiene la siguiente longitud: ",$longitud,"<br>";   //Se muestra la longitud de la cadena

//Uso de condicionales
$vbool=true;    //Definicion de variable booleana
if($vbool){
    echo "La variable es verdadera","<br>";
}else{
    echo "Lavariable es Falsa","<br>";
}

//Creacion de un array
$marcas=array("Ford","Mazda","Chevrolet","toyota");     //Definicion de array
$indice=3;  //Definicion de la posicion o indice
echo "Elelemento en el indice $indice es: ".$marcas[$indice];   //Impresion de indice

?>