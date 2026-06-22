<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>
   <h1>practica de estructuras de control</h1> 
   <h2>Consigna 1</h2>
   <?php
   $variablen =20;

   if ($variablen>0){
    echo " El valor de n es positivo"."<br>";
 } 
 ?>
 <h2>" Consigna 2" </h2>
 <?php
 $variables=13;
 
 if ($variables> 1 && $variables <10){
    echo "Valor de n es mayor a 2 y menor a 9"."<br>";
 }else {
    echo "Valor de n no està entre los numeros del 1 al 10"."<br>";
 }
?>
<h2> "Consigna 3"</h2>
<?php
$variablet=22;

if  ($variablet> 10 or $variablet<2){
    echo "Valor n es mayor a 10 o menor a 2"."<br>";
}
?>
<h2>"Consigna 4"</h2>
<?php
$n1=20;
$n2=5;
if ($n1>$n2){
    $suma= $n1+$n2;
    $resta=$n1-$n2;
    echo "ambos numeros suman:". $suma."<br>";
    echo "ambos numeros restan:". $resta;
}elseif ($n1<$n2){
$multiplicaciòn= $n1*$n2;
    $division=$n1/$n2;
    $resto=$n1%$n2;
    echo "ambos numeros multiplicados dan:". $multiplicaciòn."<br>";
    echo "ambos numeros divididos dan:". $division."<br>";
    echo "el resto de la division es:".$resto."<br>";

}else{
    echo "ambos valores son iguales";
}
    
?>
</body>
</html