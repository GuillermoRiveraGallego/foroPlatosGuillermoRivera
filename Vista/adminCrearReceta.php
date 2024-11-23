<div class="contenedorCrearReceta">
    <div class="contenedorFormulario">
 
            <form action="../Controlador/guardarReceta.php" method="POST" enctype="multipart/form-data" class="contenedorDatos">
                <div class="linea">
                    <p>Nombre de la Receta:</p>
                    <input type="text" id="nombre_receta" name="nombre_receta" required maxlength="250">
                </div>

                <div class="contenedorImagen">
                <input type="file" name="fotoReceta" accept=".jpg, .png, .jpeg">
                </div>

            <div class="linea">
                <p>Dificultad:</p>
                <select id="dificultad" name="dificultad" required>
                    <option value="facil">Fácil</option>
                    <option value="medio">Medio</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>

            <div class="linea">
                <p>Tipo:</p>
                <select id="tipo" name="tipo" required>
                    <option value="Receta Tradicional">Receta Tradicional</option>
                    <option value="Receta SlowFood">Receta SlowFood</option>
                    <option value="Receta Freidora sin aceite">Receta Freidora sin aceite</option>
                </select>
            </div>

            <div class="linea">
                <div class="ingredienteBloque">
                    <div class="ingredienteElemento">
                        <p>Ingredientes:</p>
                        <select id="nombreIngrediente" name="nombreIngrediente[]" multiple required>
                        <?php
                                foreach ($todosLosIngredientes as $ingrediente) {
                                    echo '<option value="'.$ingrediente['nombre'].'">'. $ingrediente['nombre']. '</option>';
                                }
                                ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="linea">
                <p>Descripción:</p>
                <textarea id="descripcion" name="descripcion" rows="5" required></textarea>
            </div>

            <div class="linea">
                <button type="submit" name="enviar" value="enviar">Guardar Receta</button>
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

    .contenedorFormulario .contenedorDatos {
        display: flex;
        flex-direction: column;
        gap: 20px;
        font-size: 18px;
        width: 100%;
    }

    .contenedorFormulario .linea {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 10px;
    }

    .contenedorFormulario .linea p {
        font-weight: bold;
        margin: 0;
    }

    .contenedorFormulario input[type="text"],
    .contenedorFormulario select,
    .contenedorFormulario textarea,
    .contenedorFormulario input[type="file"] {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #fff;
        color: #333;
        transition: border-color 0.3s;
    }

    .contenedorFormulario input[type="file"] {
        cursor: pointer;
    }

    .contenedorFormulario textarea {
        resize: none;
    }

    .contenedorFormulario input:focus,
    .contenedorFormulario select:focus,
    .contenedorFormulario textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    .contenedorFormulario button {
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

    .contenedorFormulario button:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .contenedorFormulario button:active {
        transform: translateY(0);
    }

    .contenedorFormulario .contenedorImagen {
        width: 100%;
        text-align: center;
    }

    .contenedorFormulario .contenedorImagen input[type="file"] {
        text-align: center;
        color: white;
        background-color: transparent;
        border: none;
    }


    .ingredienteBloque {
    display: flex; /* Alinea los elementos en una fila */
    gap: 15px; /* Espaciado horizontal entre bloques */
    width: 100%; /* Ocupa todo el ancho disponible */
    align-items: center; /* Centra los elementos verticalmente */
    flex-wrap: wrap; /* Permite que los elementos se ajusten si no hay espacio */
}

.ingredienteElemento {
    display: flex; /* Alinea el texto y el campo en columna */
    flex-direction: column; /* Asegura que el <p> esté encima del input/select */
    flex: 1; /* Ajusta el tamaño proporcionalmente entre los elementos */
    min-width: 150px; /* Evita que sean demasiado pequeños */
}

.ingredienteElemento p {
    margin: 0 0 5px 0; /* Espaciado inferior entre el texto y el campo */
    font-weight: bold;
}

.ingredienteElemento select,
.ingredienteElemento input {
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    color: #333;
    width: 100%;
    box-sizing: border-box; /* Asegura que el padding no afecte el tamaño */
}

.ingredienteElemento input[type="number"] {
    width: 100%; /* Ajusta el ancho para que sea consistente */
}

.ingredienteElemento select:focus,
.ingredienteElemento input:focus {
    border-color: #007bff;
    outline: none;
}

</style>
