<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php 
/*//текущая дата в Unix формате
$currentDate = time();
//подставляем текущую дату и параметр 
//последнего дня текущего месяца "t" в функцию date()
$lastDay = date('t', $currentDate);
//теперь в переменной $lastDay хранится последняя дата месяца
echo $lastDay;
//например для июля выдаст число:
//31*/


echo date('t', time());
 ?>


</body>
</html>