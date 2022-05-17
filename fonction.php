<?php
    function getActuById($id){
        include('connect.php');
        $sql="select * from fullActu where id='%s'";
		$sql=sprintf($sql,$id);
		$etu_req=mysqli_query($bdd,$sql);
		$result=array();
		while($etu=mysqli_fetch_array($etu_req))
		{
			$result[]=$etu;
		}
		mysqli_free_result($etu_req);
		return $result;
    }

    function getAll(){
        include('connect.php');
        $sql="select * from fullActu ";
		
		$etu_req=mysqli_query($bdd,$sql);
		$result=array();
		while($etu=mysqli_fetch_array($etu_req))
		{
			$result[]=$etu;
		}
		mysqli_free_result($etu_req);
		return $result;
    }

    function getLatest(){
        include('connect.php');
        $sql="select * from fullActu order by dateI asc limit 3";
		$etu_req=mysqli_query($bdd,$sql);
		$result=array();
		while($etu=mysqli_fetch_array($etu_req))
		{
			$result[]=$etu;
		}
		mysqli_free_result($etu_req);
		return $result;
    }

    function getPopular(){
        include('connect.php');
        $sql="select * from fullActu order by dateI desc limit 4";
		$etu_req=mysqli_query($bdd,$sql);
		$result=array();
		while($etu=mysqli_fetch_array($etu_req))
		{
			$result[]=$etu;
		}
		mysqli_free_result($etu_req);
		return $result;
    }

	function login($email,$mdp){
		include('connect.php');
		$mdp = sha1($mdp);
		$value = 0;
		$sql="select * from admin where email='%s' && mdp='%s'";
		$sql=sprintf($sql,$email,$mdp);
		$resultat=mysqli_query($bdd,$sql);
		$donnees=mysqli_fetch_assoc($resultat);
		if($donnees['email']==$email && $donnees['mdp']==$mdp)
			{
				$value = $donnees['id'];
			} 
			else
			{
				$value = -1;
			}
		mysqli_free_result($etu_req);
		return $value;
	}

	function insertActu($titre,$resume,$contenue,$image,$categorie){
		include('connect.php');
		$url=createUrlSlug($titre);
		$sql="insert into actu values(null,now(),%s,'%s','%s','%s','%s','%s')";
		
		$sql=sprintf($sql,$categorie,$titre,$resume,$contenue,$url,$image);
		echo $sql;
		mysqli_query($bdd,$sql);
	}

	function getCategorie(){
		include('connect.php');
        $sql="select * from categorie ";
		
		$etu_req=mysqli_query($bdd,$sql);
		$result=array();
		while($etu=mysqli_fetch_array($etu_req))
		{
			$result[]=$etu;
		}
		mysqli_free_result($etu_req);
		return $result;
	}


    function createUrlSlug($urlString){
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
        return $slug;
     }

?>