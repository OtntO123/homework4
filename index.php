<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24 ";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


echo "<br>2. ". $date = str_replace("-", "/", $date);	//2
echo "<br>";

if(strcmp($data, $tar)) {	//3
echo "3. the future<br>";
} else if(strcmp($date, $tar)){
echo "3. Oops<br>";
} else if(strcmp($date, $tar)){
echo "3. the past<br>";
}

$l=1; $cont=array();	//4
echo "4. Pos ";
while($c = strpos($date, "/", $l)){
	echo $c . " ";
	$l = $c + 1;
	array_push($cont, $c);
	}
echo " contain '/'. ";
if(count($cont) > 1){
	echo " / is more than 1 position. Res: ";
	for($i=0; $i < count($cont); $i++){
	$date = substr($date, 0, $cont[$i] + $i). " ". substr($date, $cont[$i]+$i);   //substr_replace($date, " " , $cont[$i], strlen($cont[$i]));
	}
}
echo $date . "<br>";

echo "5. " . str_word_count($date). "<br>";	//5

echo '6. $data\'s length is '. strlen($date)."<br>";	//6

echo "7. ". ord($date[0]). "<br>";	//7

echo "8. ". substr($date, -2). "<br>";	//8

echo "9. "; print_r(explode("/", $date));	//9
echo "<br>";


echo "10. "; foreach( $year as $k => $v) {	//10
	swt($v);
}
echo "<br>10. ";
for($i=0; $i< count($year); $i++){
	swt($year[$i]);
}
function swt($v){
switch($v % 4 == 0 and $v % 100 !=0 or $v % 400 == 0) {
	case 0:
		echo $v . " False ";	
		break;
	case 1:
		echo $v . " True ";
		break;
	}
}
?>
