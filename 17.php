<?
echo '
<html>
<head>
	<meta charset="utf-8" ></meta>
	<META HTTP-EQUIV="REFRESH" CONTENT="600">
	<link href="style.css" rel="stylesheet">
	<link rel="icon" type="image/ico" href="media/ico.ico" />
	<title>Лабораторна робота</title>
	<script src="script.js" type="text/javascript"></script>
</head>
<body>'."
Name: ".$_GET['fname']."</br>Surname: ".$_GET['sname']."</br>Group: ".$_GET['group'];
if($_GET['mod']=="S"){
	$result=((($_GET['num1']+$_GET['num2'])+$_GET['num3'])+$_GET['num4'])+$_GET['num5'];
	echo "</br> Result: ".$result;
}
if($_GET['mod']=="P"){
	$result=$_GET['num1']*$_GET['num2']*$_GET['num3']*$_GET['num4']*$_GET['num5'];
	echo "</br> Result: ".$result;
}
if($_GET['mod']=="RU"){
	$res= array($_GET['num1'],$_GET['num2'],$_GET['num3'],$_GET['num4'],$_GET['num5']);

	for ($i = 0; $i < 5 - 1; $i++) {
        for ($j = 0; $j < 5 - $i - 1; $j++) {
            if ($res[$j] > $res[$j + 1]) {
                // меняем элементы местами
                $temp = $res[$j];
                $res[$j] = $res[$j + 1];
                $res[$j + 1] = $temp;
            }
        }
    }
	echo "</br> Result: ";
	for($i=0;$i<=5-1;$i++){
		echo $res[$i];
	}
}

?>