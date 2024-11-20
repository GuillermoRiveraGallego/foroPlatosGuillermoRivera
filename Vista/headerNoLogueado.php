<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForoPlatos</title>
    <link rel="icon" href="../Imagenes/iconoPagina.png" type="image/x-icon">
    <link rel="stylesheet" href="../Vista/css/estilosIndexPrincipal.css">
</head>

<script>
    document.getElementById('buscarForm').addEventListener('keydown', function(event) {
        
        if (event.key === 'Enter') {
            event.preventDefault();
            this.submit();
        }
    });
</script>

<body>
<div class="header-container">
        <header class="header">
            
        <img class="logoHeader" src="../Imagenes/foroLogo5.png" alt="">

        <form action="../Controlador/recetasBuscadorNoLogin.php" method="post" id="buscarForm">
            
            <input type="text" name="buscarReceta" placeholder="Buscar receta">
    
        </form>

            <a href="../Controlador/login.php">INICIAR SESION</a> 
        </header>
</div>