<?if($Test!=''){
	$Test++;
	setcookie("Test",$Test,time()+3600000);		//	Seleciona o nome do cookie
}else{
	setcookie("Test",1,time()+3600000);			//	Cria o valor 1
	$Test=1;
}
$numvisits=$Test;
?>