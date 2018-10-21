
<?php

	echo PHP_VERSION;
	
	define("PI", 3.14); //Константа
	echo "<br/ >";
	echo PI;
	echo "<br/ >";
	echo defined ("PI"); //поиск контстанти 1 так
	echo "<br/ >";
	echo "<br/ >";
	echo "<br/ >";
	
?>




<?php

echo PHP_VERSION;

define("PI", 3.14); //Константа
echo "<br/ >";
echo PI;
echo "<br/ >";
echo defined ("PI"); //поиск контстанти 1 так
echo "<br/ >";
echo "<br/ >";
echo "<br/ >";

?>


<?php
	$x = 32;
	$y = 22.13;
	$sum = $x + $y;
	$diff = $x - $y;
	$mult = $x * $y;
	$dil = $x / $y;	
	echo "Сумма из $x и  $y = $sum <br/>";
	echo "Сума віднімання із $x та $y = $diff <br/>";
	echo "Сума множення = $mult <br/>";
	echo "Сумма дділення = $dil <br/>";
	
	$z = 12;
	$ostator = $x % $z;
	echo "<br/ >";
	$q = 400;
	$q += 10;
	$q++;  //+1   или так $q = $q + 1;
	echo  "$q <br/>";
		
	echo "Остаток при делении із $x та $z = $ostator <br/>";
	echo "<br/ >";
	echo "<br/ >";
	echo "<br/ >";
?>
<?php

	$str_1 = "<b>Первая строчка</b><input type=\"text\" />";
	$str_2 = "Вторая строчка";
	echo $str_1 ." ". $str_2;
	
	echo "<br/ >";
	echo "<br/ >";
	echo "<br/ >";

?>

<?php
	$x = 12;
	$y = 32;
	$x = 4.25;
	
	$bool_1 = $x != $y;
	$bool_2 = $x <= $y;
	
	echo $bool_1."<br/>".$bool_2;
	
	$bool_3 = !($x == $y); //!переварачивает значение c false в true 
	echo "<br/>".$bool_3;
	
	$bool_4 = $x == $y || $z < $y; // || или  
	
	$bool_5 = $z != $y && $x < $y; // && и значить != не равно == равно
	
	$bool_6 = $z != $x ^ $y > $z;
	
	echo "<br/>".$bool_6;
	echo "<br/ >";
	echo "<br/ >";
	echo "<br/ >";
?>



<?php
	
	$x = 11;
	$y = 10;
	
	if ($x >= $y && $x <= 10) 
{	
	echo "Верно";
}
	
	else
{
	echo "Не верно";
	
}
	
	
	echo "<br/ >";
	echo "<br/ >";
	echo "<br/ >";

?>
<?php
	
	$x = 10;
	switch ($x) 
{
		case 12 : echo "Это строковая переменая 12"; break;
		default : echo "не подходит";
}

	
	
	echo "<br/ >";
	echo "<br/ >";
	echo "<br/ >";

?>
<?php
	
	for ($i = 100; $i >= 80; $i-= 2)
{
	if ($i <=75) break;
	echo "Цикл под номером № $i<br />";	
}	
	echo "<br/ >";
	echo "<br/ >";
	?>

<?php
$connection = mysqli_connect('127.0.0.1','root', '', 'test_db');
if( $connection == false )
{
    echo 'Не удалось подключится к базе данных<br>';
    echo mysqli_connect_error();
    exit();
}
$result = mysqli_query($connection, "SELECT title FROM `articles_categories`");

while ( ($record = mysqli_fetch_assoc($result)))
{
    print_r($record);
    echo '<hr>';
}
mysqli_close($connection);
echo "<br/ >";
echo "<br/ >";
echo "<br/ >";

?>
