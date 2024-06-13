<?php
$articulos = readline ("Cantidad de articulos comprados:");
$precio = readline ("Precio de cada articulo:");

$articulos >= 10 ? $descuento = 0.10 : $descuento = 0 ;

$total = $articulos * $precio *(1 - $descuento);

echo " Total a pagar:$ " , number_format ($total);
?>