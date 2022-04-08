<? php 


function ajouter($image, $nom,$prix,$desc)
{
	if(require("connection.php"))
	{ 
	  $req=$access->prepare("INSERT INTO produits(image,nom,description)VALUES('$image','$nom',$prix,'$description' )");
	$req->execute(array($image,$nom,$prix,$desc));
	$req->closeCursor();
	}
}

function Afficher()
{
	if(require("connection.php"))

	{
		$req=$access->prepare("SELECT*FROM produits ORDER BY id DESC");
		$req->execute();
		$data = $req->fetchAll(PDO::FETCH_OBJ);

		return $data;
		$req->closeCursor();
	}
}
function supprimer($id)
{

	if(require("connection.php"))
	{
		$req=$access->prepare("DELETE*FROM produits WHERE id=?");
		$req->execute(array($id));
	}
}
?>