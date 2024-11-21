<div class="contenedorIngredientes">
    <?php foreach ($listaIngredientesNuevaReceta as $ingrediente): ?>
        <div class="ingrediente">

                <label name="<?php echo $ingrediente; ?>"><?php echo $ingrediente; ?></label>
            
                <input type="number" name="cantidad" placeholder="Cantidad" min="1" required>
                
                <select name="unidadMedida" required>
                <option value="">Seleccione una unidad</option>
                <option value="gramos">gramos</option>
                <option value="mililitros">mililitros</option>
                
            </select>
        </div>
    <?php endforeach; ?>
</div>
