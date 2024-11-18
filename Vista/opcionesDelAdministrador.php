<div class="contenedor">
    <div class="botones">
        <button>USUARIOS</button>
    </div>
    <div class="botones">
        <button>RECETAS</button>
    </div>
    <div class="botones">
    <button>INGREDIENTES</button>
    </div>
</div>

<style>
.contenedor {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 100px;
    width: 100%;
    justify-content: center;
}

.botones {
    display: flex;
    gap: 10px;
    margin: 10px 0;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}
</style>
