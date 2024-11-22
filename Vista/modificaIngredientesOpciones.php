    <div class="contenedor">

        <div class="botones">
            <form action="../Controlador/anadirIngredientesReceta.php" method="post">
                <input class="boton verde" type="submit" value="Añadir ingredientes a la receta" name="modificacionReceta">
                <input type="hidden" name="idReceta" value="<?php echo $idReceta; ?>">
            </form>

            <form action="../Controlador/eliminarIngredientesReceta.php" method="post">
                <input class="boton rojo" type="submit" value="Eliminar Ingredientes Receta" name="modificacionIngredientes">
                <input type="hidden" name="idReceta" value="<?php echo $idReceta; ?>">
            </form>
        </div>

    </div>

<style>
/* General */
.contenedor {
display: flex;
flex-direction: column;
align-items: center;
margin-top: 100px;
width: 100%;
justify-content: center;
}

/* Estilo para la sección de botones */
.botones {
display: flex;
gap: 15px;
margin: 15px 0;
}

/* Botones */
input.boton {
padding: 15px 25px;
font-size: 18px;
font-weight: bold;
color: white;
border: none;
border-radius: 8px;
cursor: pointer;
transition: all 0.3s ease;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
text-align: center;
}

/* Estilo de colores */
input.boton.verde {
background-color: #4caf50;
}

input.boton.verde:hover {
background-color: #45a049;
}

input.boton.rojo {
background-color: lightcoral;
}

input.boton.rojo:hover {
background-color: red;
}


input.boton.azul {
background-color: lightblue;
}

input.boton.azul:hover {
background-color: blue;
}

/* Efectos */
input.boton:hover {
transform: translateY(-3px); /* Efecto de levantamiento */
box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
}

input.boton:active {
transform: translateY(0); /* Efecto al presionar */
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

</style>

