<?php 
    include("../../db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM clientes WHERE id_cliente = $id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Ha fallado");
        }
        $_SESSION['message'] = 'Se eliminó registro';
        header("Location: CRUD-clientes.php");
    }

?>