
<div class="linea">
<div class="ingredienteBloque">
    <div class="ingredienteElemento">
        <p>Que ingredientes quieres añadir <br> (selecciona uno o mas):</p>
        <form action="../Controlador/anadirIngredientesRecetaCantidades.php" method="post">
        <input type="hidden" name="idReceta" value="<?php echo $_POST["idReceta"]; ?>">
        <select id="nombreIngrediente" name="nombreIngrediente[]" multiple required>
        <?php
                foreach ($todosLosIngredientes as $ingrediente) {
                    echo '<option value="'.$ingrediente['nombre'].'">'. $ingrediente['nombre']. '</option>';
                }
                ?>
                
        </select>
        <input type="submit" name="enviar" value="enviar">
        </form>
    </div>
</div>
</div>

<style>

    p{
        color: white;
        font-size: 20px;
    }

/* Estilo para el contenedor de la línea */
.linea {
    margin-top: 150px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    gap: 10px; /* Espaciado vertical entre elementos */
}

/* Bloque de ingredientes */
.ingredienteBloque {
    display: flex; /* Alinea los elementos en una fila */
    gap: 20px; /* Espaciado horizontal entre elementos */
    justify-content: center; /* Centra el contenido horizontalmente */
    align-items: center; /* Alinea verticalmente los elementos */
    flex-wrap: wrap; /* Permite que los elementos se ajusten si el espacio es insuficiente */
    width: 100%;
    max-width: 800px; /* Limita el ancho máximo para mantenerlo consistente con el formulario */
}

/* Elemento individual dentro del bloque de ingredientes */
.ingredienteElemento {
    display: flex;
    flex-direction: column; /* Coloca el texto encima del selector */
    flex: 1; /* Ajusta el tamaño para que se distribuyan proporcionalmente */
    min-width: 250px; /* Evita que los elementos se reduzcan demasiado */
    max-width: 400px; /* Evita que sean demasiado grandes */
    gap: 5px; /* Espaciado entre el texto y el selector */
    text-align: center; /* Centra el texto */
}

/* Estilo del texto */
.ingredienteElemento p {
    font-weight: bold;
    margin: 0;
}

/* Estilo para el selector múltiple */
.ingredienteElemento select {
    padding: 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    color: #333;
    width: 100%;
    height: 150px; /* Define un tamaño vertical consistente */
    box-sizing: border-box;
    overflow-y: auto; /* Permite desplazamiento si hay muchos ingredientes */
}

/* Efecto de foco */
.ingredienteElemento select:focus {
    border-color: #007bff;
    outline: none;
}

/* Estilo para alinearlo al diseño general */
.contenedorFormulario .linea .ingredienteBloque {
    align-items: flex-start; /* Alinea los selectores hacia el borde superior */
}
/* Estilo del botón */
.ingredienteElemento input[type="submit"] {
    padding: 12px 20px;
    font-size: 18px;
    font-weight: bold;
    color: white;
    background-color: #4caf50; /* Verde atractivo */
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-align: center;
    transition: all 0.3s ease; /* Transición suave para el efecto */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Sombra suave */
    margin-top: 10px; /* Espaciado superior */
}

/* Hover (efecto al pasar el cursor) */
.ingredienteElemento input[type="submit"]:hover {
    background-color: #45a049; /* Verde más oscuro */
    transform: translateY(-3px); /* Efecto de levantamiento */
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
}

/* Active (efecto al hacer clic) */
.ingredienteElemento input[type="submit"]:active {
    transform: translateY(0); /* Vuelve a su posición original */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

</style>

