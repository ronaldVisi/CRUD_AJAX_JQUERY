<?php

$colores=array("verde","rojo","negro");
print_r($colores);
$var= json_encode($colores);

echo $var;


$colores2=array("primero"=>"verde","segundo"=>"rojo","tercero"=>"negro");
foreach ($colores2 as $primero=>$valor){
    echo "\n".$primero." es como  ".$valor;
}

$liga=array(
    "puestos"=>array(
        "primero","segundo","tercero"
    ),
    "paises"=>array(
        "italia","rusia"
    )
);
echo "<br>";
foreach ($liga as $primero => $value) {
    echo "<br>"."$primero es $value";
    foreach ($value as $key => $value2) {
        echo "<br>".$key." veo ".$value2;
    }
   
}

foreach ($liga as $primero => $value) {
    echo "<br>".$primero." es ".$value ;
    foreach ($value as $key => $value2) {
        echo "<br>".$key." veo ".$value2;
    }
   
}

//print_r($colores2);
//var_dump($colores2);