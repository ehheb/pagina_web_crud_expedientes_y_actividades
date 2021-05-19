<?php 
    include("../../db.php");

    if(isset($_POST['save_task'])) {
        $cliente = $_POST['cliente'];
        $contraparte = $_POST['contraparte'];
        $telefono = $_POST['cliente-telefono'];
        $email = $_POST['cliente-email'];
        $expediente = $_POST['numero-expediente'];
        $juicio = $_POST['tipo-juicio'];
        
        $query= "INSERT INTO clientes(cliente_nombre, cliente_contraparte, cliente_telefono, cliente_email, cliente_expediente, cliente_juicio) 
        VALUES('$cliente', '$contraparte', '$telefono', '$email', '$expediente', '$juicio')";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Query failed...");
        }

        $_SESSION['message'] = 'Se guardó correctamente';
        $_SESSION['message_type'] = 'success';

        header("Location: CRUD-clientes.php");
    }
?>