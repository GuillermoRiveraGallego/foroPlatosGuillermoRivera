<?php
	include("Modelo/conexionBD.php");
	$tamanioPagina=5;
	if(isset($_GET['numPagina'])){
		$numPagina=$_GET['numPagina'];
	}
	else{
		$numPagina=0;
	}
	$numRecetas=($pdo->query("SELECT COUNT(*) FROM recetas")->fetch())[0];
	$maxPagina=floor($numRecetas/$tamanioPagina);

	$primeraReceta=$numPagina*$tamanioPagina;
	$recetas=$pdo->query("SELECT * FROM recetas LIMIT $primeraReceta,$tamanioPagina")->fetchAll(PDO::FETCH_ASSOC);
	foreach($recetas as $receta){
		$id=$receta['id'];
		echo "<a href='unaReceta.php?idReceta=$id'><img height=80px src={$receta['rutaImagen']}></a><br>{$receta['titulo']}<br>";
	}
	if($numPagina!=0){
		echo "<br><a href='index.php?numPagina=".($numPagina-1)."'> Anterior </a>";
	}
	if($numPagina!=$maxPagina){
		echo"<br><a href='index.php?numPagina=".($numPagina+1)."'> Siguiente </a>";
	}
?>