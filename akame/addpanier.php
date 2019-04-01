<?php 
require '_header.php';

if(isset($_GET['id']))
{
	$product = $DB->query('SELECT * FROM products WHERE id=:id',array('id' => $_GET['id']));
	if(empty($product))
	{
		die("ce produit n'existe pas");
	}else {
    
//	var_dump($product);
	$DB->query('INSERT INTO panier  values (null,'.$_GET['id'].',"'.$product[0]->price.'","1","'.$product[0]->price.'",1)');
	 echo "<script> window.location.href='Panier.php'</script>";
	}
}else
{
	die("vous navez pas selectionner de produit a ajouter au panier");
}
?>
