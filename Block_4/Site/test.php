<?php

	function changeX($x){
   $x += 5;
   echo $x;
}

$x = 1;
echo $x;
changeX($x);
echo $x;
?>
<hr>
<?php
function test()
{
    static $a = 0;
    echo $a;
    $a++;
}
test();
test();
test();
?>
<hr>
<?php
$a=0;
if($b=$a)
    echo "One";
else
    echo "Two";
?>
<hr>

<?php
$array=[];
$sum=0;
$chek=0;
function rundome(){
	global $arrey, $sum, $chek;
	for($i=0;$i<3;$i++){
	$array[$i] = rand ( 0 , 10 );
	$sum = $sum + $array[$i];	
	echo $array[$i];
	echo " ";	
	}
echo "<br>";
$chek ++;
}


rundome();


	echo "<br>";
	echo $sum;
	echo "<br>";
	echo $chek;
	echo "<br>";
	echo "<br>";

for(;;){
if($sum<15){
	echo "good ";
	echo "<br>";
	echo $chek;
	break;
}else{
	$sum = 0;
	echo "More Time ";
	echo "<br>";
	rundome();
	echo $chek;	
}
}

?>
<hr>
<?php
$i = 10;
$i += ++$i + $i;
echo $i;
?>
<hr>
<?php
$a = "1";
$a[$a] = "2";
echo $a;
?>