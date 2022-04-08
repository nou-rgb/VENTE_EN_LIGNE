<? php 

try{
	$access=new pdo("mysql:host=localhost;dbname=vente;charset=utf8","root","");
	$access->setAttribute(PDO::ATTR_ERRMODE_WARNING);
}catch (Exception $e )
{
	$e->getMessage();
}



?>