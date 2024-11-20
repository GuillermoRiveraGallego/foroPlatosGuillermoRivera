<div class="contenedorAdminEliminarUsuario">
    <div class="adminEliminarUser">
        <form action="../Controlador/adminFuncionCreaIngrediente.php" method="post">
            <label for="nombreUsuario">Nombre del ingrediente:</label>
            <?php 
            if (isset($_GET['error']) && $_GET['error'] == "ingredienteCreado") {
                echo " <div class='contenedorerrorUser'>
                        <p class='noErrorUsuarioEliminar'>ingrediente creado</p>
                        </div>";
            } 
            ?>
            <?php 
            if (isset($_GET['error']) && $_GET['error'] == "ingredienteNoCreado") {
                echo " <div class='contenedorerrorUser'>
                <p class='errorUsuarioEliminar'>ingrediente ya existe</p>
                </div>";
            } 
            ?> 
            <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Introduce el usuario" required>
            <button type="submit" class="botonEliminar" name="botonEliminar" value="eliminar">Crear ingrediente</button>
        </form>
    </div>
</div>




<style>
.errorUsuarioEliminar {
    color: red;
    width: 100%;

    

}

.contenedorerrorUser {
    width: 100%;
    box-sizing: border-box;
    
}

.noErrorUsuarioEliminar {
    color: green;
    width: 100%;
    
}
.errorUsuarioEliminar {
    color: red;
    width: 100%;
}
.contenedorAdminEliminarUsuario {
    width: 100%; 
    display: flex;
    justify-content: center; 
    margin-top: 150px;
}

.adminEliminarUser {
    width: 40%;
    max-width: 600px; 
    min-width: 300px;
    border: 2px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    background-color: #333;
    padding: 20px;
    color: #fff;
    box-sizing: border-box;
}

.adminEliminarUser input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.botonEliminar {
    background-color: #259e39;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%; 
    box-sizing: border-box;
}

.botonEliminar:hover {
    background-color: green;
}

</style>