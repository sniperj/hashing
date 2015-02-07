<?php
function myHash($unhash)
{

	$h = 7 ; 
	$letters = "acdegilmnoprstuw";
	$lcount  = strlen($unhash) ;
	
	for($i=0;$i<$lcount;$i++)
	{

		$sLetter = substr($unhash,$i,1); 
		$h = ($h * 37 + strpos($letters,$sLetter)) ; 
		
	}
	return $h;	
}

function myUnhash ($h)
{
	$letters = "acdegilmnoprstuw";
	do 
	{
	    	$sletterPos = $h- ( floor($h/37)*37);
			$mletters 	= substr($letters,$sletterPos,1) . $mletters;
			echo "".$mletters." - ".$h." - ".$sletterPos."<br>";
			$h  		= ( floor($h/37)) ; 
	
	} while ($h>7);
	return $mletters ;
} 



echo myUnHash(952844224293137);



