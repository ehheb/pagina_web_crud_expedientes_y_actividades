<?PHP 
    include("../../db.php");

    if(isset($_POST['save_task'])) {
        $trabajador = $_POST['trabajador'];
        $actividad = $_POST['actividad'];
        $descripcion = $_POST['descripcion'];
        $dias = $_POST['dias'];

        $query = "INSERT INTO tareas(trabajador_tarea, tipo_tarea, descripcion_tarea, dias_tarea) VALUES ('$trabajador', '$actividad', '$descripcion', '$dias')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Ha fallado");
        }
        
        header("Location: tareas.php");
    }
?>