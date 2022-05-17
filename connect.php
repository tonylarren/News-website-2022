<?php
	if($bdd=mysqli_connect('localhost','root','root','climat'))
	{
		mysqli_set_charset($bdd,"utf8");
	}
	else
	{
		echo "erreur"; 
	}
?>