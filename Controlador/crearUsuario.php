<?php

session_start();

if(isset($_POST['enviar'])){
    
    if (isset($_FILES['fotoPerfil']) && $_FILES['fotoPerfil']['error'] == UPLOAD_ERR_OK){

    $nombreImagen=$_POST["nombreUsuario"]."_".$_FILES['fotoPerfil']['name'];
    move_uploaded_file($_FILES['fotoPerfil']['tmp_name'],"../Imagenes/".$nombreImagen);
    include "../Modelo/consultasUsuarios.php";
    insertarUsuario($nombreImagen);		

    } else {

        include "../Modelo/consultasUsuarios.php";
        $nombreImagen = $_POST["nombreUsuario"]."default.jpg";
        insertarUsuario($nombreImagen);	

    }

}

else{
    header("Location: ../Vista/registroLogin.html");
}

?>