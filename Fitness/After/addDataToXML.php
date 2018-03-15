<?php
/*Illustrations of processing XML data via php
*/
	
	
	$xmlFileName = "userData.xml";
	$xmlFile = new DOMDocument();
	$xmlFile->load($xmlFileName);

	$data=$xmlFile->documentElement;

	$users=$data->getElementsByTagName('user');
	
	$first=$_GET["first"];
	$last=$_GET["last"];
	$age=$_GET["age"];
	$height=$_GET["height"];
	$weight=$_GET["weight"];
	$hr=$_GET["hr"];
	$sys=$_GET["sys"];
	$dia=$_GET["dia"];
	$run=$_GET["run"];
	$upper=$_GET["upper"];
	$lower=$_GET["lower"];
	$core=$_GET["core"];
	
	foreach ($users as $user)//($xmlFile->documentElement->childNodes as $node) 
	{
		if($first!="undefined" && $first!="")
		{
			$old = $user->getElementsByTagName('fName')->Item(0);
			$new = $xmlFile->createElement('fName',$first);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($last!="undefined" && $first!="")
		{
			$old = $user->getElementsByTagName('lName')->Item(0);
			$new = $xmlFile->createElement('lName',$last);
			$old->parentNode->replaceChild($new, $old);
		}	
		
		if($age!="undefined" && $age!="")
		{
			$old = $user->getElementsByTagName('age')->Item(0);
			$new = $xmlFile->createElement('age',$age);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($height!="feetundefinedinches" && $height!="feet inches")
		{
			$old = $user->getElementsByTagName('height')->Item(0);
			$new = $xmlFile->createElement('height',$height);
			$old->parentNode->replaceChild($new, $old);
		}
		if($weight!="undefined" && $weight!="lb")
		{
			$old = $user->getElementsByTagName('weight')->Item(0);
			$new = $xmlFile->createElement('weight',$weight);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($hr!="undefined" && $hr!="bpm")
		{
			$old = $user->getElementsByTagName('HR')->Item(0);
			$new = $xmlFile->createElement('HR',$hr);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($sys!="undefined" && $sys!="")
		{
			$old = $user->getElementsByTagName('SYS')->Item(0);
			$new = $xmlFile->createElement('SYS',$sys);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($dia!="undefined" && $dia!="")
		{
			$old = $user->getElementsByTagName('DIA')->Item(0);
			$new = $xmlFile->createElement('DIA',$dia);
			$old->parentNode->replaceChild($new, $old);
		}	
		//$user=$user->getElementsByTagName('exercises');
		if($run!="undefined" && $run!=":")
		{
			$old = $user->getElementsByTagName('running')->Item(0);
			$new = $xmlFile->createElement('running',$run);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($upper!="undefined" && $upper!=":")
		{
			$old = $user->getElementsByTagName('upperBody')->Item(0);
			$new = $xmlFile->createElement('upperBody',$upper);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($lower!="undefined" && $lower!=":")
		{
			$old = $user->getElementsByTagName('lowerBody')->Item(0);
			$new = $xmlFile->createElement('lowerBody',$lower);
			$old->parentNode->replaceChild($new, $old);
		}	
		if($core!="undefined" && $core!=":")
		{
			$old = $user->getElementsByTagName('core')->Item(0);
			$new = $xmlFile->createElement('core',$core);
			$old->parentNode->replaceChild($new, $old);
		}	
	}
	$xmlFile->save($xmlFileName);

?>


