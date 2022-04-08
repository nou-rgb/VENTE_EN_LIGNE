 



<?php

 //require("config/commandes.php");



?>








<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>

  <body> 
   <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	

 <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
    <input type="name" class="form-control"  required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nom du produit</label>
    <input type="text" class="form-control" name="nom"   required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">prix</label>
    <input type="number" class="form-control" name="prix"   required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <textarea   class="form-control"   name="description " required  ></textarea> 
  </div>
  
  <button type="submit" name="valider" class="btn btn-primary">ajouter un nouveau produit</button>
 </form>
      </div></div></div>

      
</body>
</html>

 <?php

 if(isset($_POST['valider']))
 {
 	if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix'])AND isset($_POST['description']))
 	{
 	if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix'])AND !empty($_POST['description']))
 	  {
 	  	$image=htmlspecialchars(strip_tags($_POST['image']));
 	  	$nom=htmlspecialchars(strip_tags($_POST['nom']));
 	  	$prix=htmlspecialchars(strip_tags($_POST['prix']));
 	  	$description=htmlspecialchars(strip_tags($_POST['description']));
 	  	try{
 	  		ajouter($image,$nom,$prix,$description)
	
           }catch (Exception $e )
           {
          	$e->getMessage();
           }

 	  }	
 	}
 }  
   ?>