<div class="contenedorCrearReceta">
<div class="contenedorFormulario">

    <form action="../Controlador/guardarNuevosIngredientes.php" method="POST" class="contenedorDatos">
        
        <?php foreach ($listaIngredientesNuevaReceta as $ingrediente): ?>
            <div class="linea ingredienteElemento">
                <p><?php echo $ingrediente; ?>:</p>
                <input type="hidden" name="ingrediente[<?php echo $ingrediente; ?>]" value="<?php echo $ingrediente; ?>">
                <input type="number" name="cantidad[<?php echo $ingrediente; ?>]" placeholder="Cantidad" min="1" required>
                <select name="unidadMedida[<?php echo $ingrediente; ?>]" required>
                    <option value="">Seleccione una unidad</option>
                    <option value="gramos">gramos</option>
                    <option value="mililitros">mililitros</option>
                </select>
            </div>
        <?php endforeach; ?>

        <input type="hidden" name="idDeLaReceta" value="<?php echo $idUltimaReceta; ?>">
        <div class="linea">
            <button type="submit">Guardar Ingredientes</button>
        </div>
    </form>

</div>
</div>



<style>
.contenedorCrearReceta {
margin-top: 100px;
margin-bottom: 100px;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
width: 100%;
}

.contenedorFormulario {
display: flex;
flex-direction: column;
align-items: center;
background-color: rgba(0, 0, 0, 0.5);
backdrop-filter: blur(10px);
color: white;
padding: 40px;
border-radius: 15px;
gap: 20px;
width: 90%;
max-width: 800px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.contenedorDatos {
display: flex;
flex-direction: column;
gap: 20px;
font-size: 18px;
width: 100%;
}

.linea {
display: flex;
flex-direction: column;
width: 100%;
gap: 10px;
}

.linea p {
font-weight: bold;
margin: 0;
}

.linea input[type="number"],
.linea select {
width: 100%;
padding: 12px;
font-size: 16px;
border: 1px solid #ccc;
border-radius: 8px;
background-color: #fff;
color: #333;
transition: border-color 0.3s;
}

.linea select:focus,
.linea input:focus {
border-color: #007bff;
outline: none;
}

button[type="submit"] {
width: 100%;
padding: 12px;
font-size: 18px;
font-weight: bold;
color: white;
background-color: green;
border: none;
border-radius: 8px;
cursor: pointer;
transition: background-color 0.3s, transform 0.2s;
}

button[type="submit"]:hover {
background-color: #0056b3;
transform: translateY(-2px);
}

button[type="submit"]:active {
transform: translateY(0);
}


</style>
