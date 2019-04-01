<?php
require "_header.php";
 		
       		$DB->query('DELETE  FROM panier WHERE idproduit='.$_GET['id']);
       		echo "<script> window.location.href='Panier.php'</script>";