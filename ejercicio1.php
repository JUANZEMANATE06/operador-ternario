<?php
$camisas = readline("Número de camisas compradas: ");
$precioPorCamisa = readline("Precio por camisa: ");

$camisas >= 3 ? $descuento = 0.20 : $descuento = 0.10 ;

$total = $camisas * $precioPorCamisa * (1 - $descuento);

echo "El total a pagar con descuento es: $" , number_format($total);
?>


