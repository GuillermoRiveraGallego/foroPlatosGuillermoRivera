<div class="contenedor">

    <div class="botones">
    <button class="verde"><a href="../Controlador/adminCreaIngrediente.php">Crear Ingrediente</a></button>
        <button class="verde"><a href="../Controlador/adminCrearReceta.php">Crear Receta</a></button>
        <button class="azul"><a href="../Controlador/adminModificaReceta.php">Modificar Receta</a></button>
        <button class="rojo"><a href="../Controlador/adminEliminaReceta.php">Eliminar Receta</a></button>
    </div>
</div>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
    color: white;
    display: block; /* Hace que el enlace sea clickeable en todo el botón */
    text-align: center;
}
button:hover a {
    color: white; /* Mantiene el texto visible cuando se hace hover */
}


.contenedor {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 100px;
    width: 100%;
    justify-content: center;
}

/* Botones */
.botones {
    display: flex;
    gap: 15px;
    margin: 15px 0;
}

button {
    padding: 15px 25px;
    font-size: 18px;
    font-weight: bold;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

/* Estilo de colores */
button.verde {
    background-color: #4caf50;
}

button.verde:hover {
    background-color: #45a049;
}

button.azul {
    background-color: #489af1;
}

button.azul:hover {
    background-color: #007cff;
}

button.rojo {
    background-color: #ea4540;
}

button.rojo:hover {
    background-color: #f90700;
}

/* Efectos */
button:hover {
    transform: translateY(-3px); /* Efecto de levantamiento */
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
}

button:active {
    transform: translateY(0); /* Efecto al presionar */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

</style>