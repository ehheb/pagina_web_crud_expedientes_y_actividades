<?php 
    include("../../db.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM clientes WHERE id_cliente = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['cliente_nombre'];
            $contraparte = $row['cliente_contraparte'];
            $telefono = $row['cliente_telefono'];
            $email = $row['cliente_email'];
            $expediente = $row['cliente_expediente'];
            $juicio = $row['cliente_juicio'];
        }
    }
    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $cliente = $_POST['cliente'];
        $contraparte = $_POST['contraparte'];
        $telefono = $_POST['cliente-telefono'];
        $email = $_POST['cliente-email'];
        $expediente = $_POST['numero-expediente'];
        $juicio = $_POST['tipo-juicio'];

        $query = "UPDATE clientes 
        set cliente_nombre ='$cliente', cliente_contraparte='$contraparte',  cliente_telefono='$telefono', cliente_email='$email', cliente_expediente='$expediente', cliente_juicio='$juicio'
        WHERE id_cliente = $id";

        mysqli_query($conn, $query);

        header("Location: CRUD-clientes.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar-cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="./CRUD-clientes.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="./CRUD-clientes.php" class="navbar-brand">Ir a consulta</a>
        </div>
    </nav>      
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                <h5>Actualizar datos</h5>
                    <form action="edit.php?id=<?php echo $_GET['id']?>" method="POST" onsubmit="return anadirCliente()">
                        <div class="form-group">
                            Cliente: 
                            <input id="cliente" type="text" name="cliente" class="form-control" value="<?php echo $nombre?>">
                        </div>
                        <div class="form-group">
                            Contraparte: 
                            <input id="contraparte" type="text" name="contraparte" class="form-control" value="<?php echo $contraparte?>">
                        </div>
                        <div class="form-group">
                            Teléfono cliente: 
                            <input id="cliente-telefono" type="text" name="cliente-telefono" class="form-control" value="<?php echo $telefono?>">
                        </div>
                        <div class="form-group">
                            email cliente: 
                            <input id="cliente-email" type="text" name="cliente-email" class="form-control" value="<?php echo $email?>">
                        </div>
                        <div class="form-group">
                            Número de expediente: 
                            <input id="numero-expediente" type="text" name="numero-expediente" class="form-control" value="<?php echo $expediente?>">
                        </div>
                        <div class="form-group">
                            Tipo de juicio: 
                            <input id="tipo-juicio" type="text" name="tipo-juicio" class="form-control" value="<?php echo $juicio?>">
                        </div>
                        <button class="btn btn-success" name="update">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
</body>
</html>