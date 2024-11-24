
<div class="contenedorFormulario">
    <form action="../Controlador/procesarSeleccionIngredientes.php" method="POST">
        <input type="hidden" name="idReceta" value="<?php echo ($_POST['idReceta']); ?>">

        <p>Seleccione los ingredientes que desea eliminar:</p>
        <div class="contenedorIngredientes">
            <?php foreach ($ingredientesDeReceta as $ingrediente): ?>
                <div class="ingredienteElemento">

                    <input type="checkbox" id="ingrediente-<?php echo($ingrediente['id_ingrediente']); ?>" name="ingredientesSeleccionados[]" 
                        value="<?php echo ($ingrediente['id_ingrediente']); ?>">

                    <label for="ingrediente-<?php echo htmlspecialchars($ingrediente['id_ingrediente']); ?>">
                        <?php echo ($ingrediente['nombre']); ?> 
                        (<?php echo $ingrediente['cantidad'].' '.($ingrediente['unidad_medida']); ?>)
                    </label>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="botonEnviar">
            <button type="submit">Procesar Ingredientes</button>
        </div>
    </form>
</div>

<style>
/* Estilo del formulario */
.contenedorFormulario {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    margin-top: 150px;
}

.contenedorFormulario p {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.contenedorIngredientes {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.ingredienteElemento {
    display: flex;
    align-items: center;
    gap: 10px;
}

.ingredienteElemento input[type="checkbox"] {
    cursor: pointer;
    width: 20px;
    height: 20px;
}

.ingredienteElemento label {
    font-size: 16px;
    color: #333;
}

.botonEnviar {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.botonEnviar button {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background-color: #4caf50;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.botonEnviar button:hover {
    background-color: #45a049;
}

.botonEnviar button:active {
    background-color: #3e8e41;
}
</style>