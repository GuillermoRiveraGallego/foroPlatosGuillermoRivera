
<div class="contenedorAdminEliminarUsuario">
    <div class="adminEliminarUser">
        <form action="../Controlador/adminFuncionRedireccionVerUsuario.php" method="post">
            <label for="nombreUsuario">Nombre de Receta a eliminar:</label>
            <select id="nombreUsuario" name="nombreUsuario" required>
                <option value="" disabled selected>Selecciona una receta</option>
                <?php
                // Bucle para recorrer el array y generar las opciones
                foreach ($listaRecetasAEliminar as $receta) {
                    echo '<option required value="' . $receta["id"] . '">' . $receta["nombre_usuario"] . '</option>';
                }
                ?>
            </select>
            <button type="submit" name="botonEliminar" class="botonEliminar">Ver Usuario</button>
        </form>
    </div>
</div>


<style>
    .contenedorAdminEliminarUsuario {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 150px;
    }

    .adminEliminarUser {
        border: 2px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        background-color: #333;
        padding: 20px;
        color: #fff;
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
        background-color: #d9534f;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .botonEliminar:hover {
        background-color: #c9302c;
    }
</style>