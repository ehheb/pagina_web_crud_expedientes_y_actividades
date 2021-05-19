<?php include("../../db.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="./CRUD-clientes.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="../../index.html" class="navbar-brand">Ir a inicio</a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3  mx-auto">
            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php session_unset();}?>
                <div class="card card-body">
                    <form action="save_task.php" method="POST" onsubmit="return anadirCliente()">
                    <h5>Coloque los datos</h5>
                        <div class="form-group">
                            Cliente: 
                            <input id="cliente" type="text" name="cliente" class="form-control" placeholder="Ej. Ana Pérez">
                        </div>
                        <div class="form-group">
                            Contraparte: 
                            <input id="contraparte" type="text" name="contraparte" class="form-control" placeholder="Ej. Juan Antillón">
                        </div>
                        <div class="form-group">
                            Teléfono cliente: 
                            <input id="cliente-telefono" type="text" name="cliente-telefono" class="form-control" placeholder="Ej. 6142568547">
                        </div>
                        <div class="form-group">
                            email cliente: 
                            <input id="cliente-email" type="text" name="cliente-email" class="form-control" placeholder="Ej. nombre@dominio.com">
                        </div>
                        <div class="form-group">
                            Número de expediente: 
                            <input id="numero-expediente" type="text" name="numero-expediente" class="form-control" placeholder="Ej. 157/18">
                        </div>
                        <div class="form-group">
                            Tipo de juicio: 
                            <input id="tipo-juicio" type="text" name="tipo-juicio" class="form-control" placeholder="Ej. juicio mercantil">
                        </div>
                        <input id="" type="submit" class="btn btn-secondary btn-block" name="save_task" value="Guardar">
                    </form>
                </div>
            </div>
            
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>Cliente</th>
                            <th>Contraparte</th>
                            <th>Teléfono</th>
                            <th>email</th>
                            <th>No. juicio</th>
                            <th>Juicio tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM clientes";
                            $results = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($results)) { ?>
                                <tr>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id_cliente']?>">
                                            Editar
                                        </a>
                                        <a href="delete_task.php?id=<?php echo $row['id_cliente']?>">
                                            Eliminar
                                        </a>
                                    </td>
                                    <td><?php echo $row['cliente_nombre'] ?></td>
                                    <td><?php echo $row['cliente_contraparte']?></td>
                                    <td><?php echo $row['cliente_telefono']?></td>
                                    <td><?php echo $row['cliente_email']?></td>
                                    <td><?php echo $row['cliente_expediente']?></td>
                                    <td><?php echo $row['cliente_juicio']?></td>
                                </tr>

                            <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
</body>
</html>