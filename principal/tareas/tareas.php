<?php include("../../db.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="./tareas.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark"> 
        <div class="container">
            <a href="../../index.html" class="navbar-brand">Ir a inicio</a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="guardar-tarea.php" method="POST" onsubmit="return obtenerDatos()">
                        <div class="form-group">
                            Nombre del trabajador:
                            <input type="text" id="trabajador" name="trabajador" class="form-control" placeholder="Trabajador que realiza la actividad">
                        </div>
                        <div class="form-group">
                            Actividad:
                            <input type="text" id="actividad" name="actividad" class="form-control" placeholder="Tipo de actividad">
                        </div>
                        <div class="form-group">
                            Descripción:
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="2" placeholder="Descripción de la actividad"></textarea>
                        </div>
                        <div class="form-group">
                            Actividad días:
                            <input type="text" name="dias" id="dias" class="form-control" placeholder="Días para completar la actividad">
                        </div>
                        <input type="submit" class="btn btn-info btn-block" name="save_task" value="Guardar">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Trabajador</th>
                            <th>Actividad</th>
                            <th>Descripción</th>
                            <th>Fecha inicio</th>
                            <th>Días para realizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM tareas";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row['trabajador_tarea']?></td>
                                    <td><?php echo $row['tipo_tarea']?></td>
                                    <td><?php echo $row['descripcion_tarea']?></td>
                                    <td><?php echo $row['inicio_tarea']?></td>
                                    <td><?php echo $row['dias_tarea']?></td>
                                    <td>
                                        <a href="./eliminar-tarea.php?id=<?php echo $row['id_tarea']?>" >Eliminar</a>
                                    </td>
                                </tr>
                            <?php }
                        ?>
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