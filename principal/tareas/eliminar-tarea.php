<?php 
    include("../../db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM tareas WHERE id_tarea = $id";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Ha fallado");
        }

        header("Location: tareas.php");
    }
?>  