<html>
<head>
<style>
a {position: fixed;
    bottom: 0;
    width:100%;
    text-align: center}
</style>
<title>Pagina1</title>
</head>
<body>
<div style="text-align: center">
<p> Ejercicio 1 <br/>
<?php
date_default_timezone_set("Europe/Athens");
echo "Today is ";
echo date("F j");
echo ", ";
echo date("Y");
echo "</br>";
echo "Two days ago it was ";
echo date("d-m-Y",strtotime("- 2 days"));
echo "</br>";
echo "The next month is ";
echo date("d-m-Y",strtotime("+ 1 months"));

$date1 = new DateTime(date("d-m-Y"));
$date2 = new dateTime(date("01-m-Y",strtotime("+ 1 month")));

$diff = $date1->diff($date2);
echo "</br>";
echo "There are ";
echo $diff->days;
echo " days left in next month";


$date3 = new dateTime(date("01-01-2023"));
$diff = $date1->diff($date3);
echo "</br>";
echo "There are ";
echo $diff->m;
echo " months left in the current year";
echo "</br>";

$mesactual = date('m');

if(($mesactual <= 8)&&($mesactual >= 5)){
    echo "Good Summer!";
}else {
    echo "Good Winter!";
}

?>
<br/>
</div>
<form action="Pagina2.php" method="post">
<p>Color del texto
    <input type="text" name="color"/>
</p>
<p>Tipo de fuente
    <input type="text" name="fuente"/>
</p>
<p>Tamaño de fuente
    <input type="text" name="tamaño"/>
</p>
<p>Texto para mostrar
    <input type="text" name="texto"/>
</p>
<li class="button">
  <button type="submit">Listo</button>
</li>
</form>
<a href="https://github.com/daw2-Lopez23/M7">Site developed by: Ramón López</a>
<br/>
¿Quieres guardar los datos?
<input type="checkbox" name="guardar" />
</p>
</body>
</html>