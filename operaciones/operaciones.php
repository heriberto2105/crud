<?php 
include "../connect/connect.php";
date_default_timezone_set('America/Mexico_City');

if (isset($_GET['listaralumnos'])){
        //$sql="SELECT id,nombre,apellidopaterno,apellidomaterno,DATE_FORMAT(fecha_nacimiento,'%Y-%m-%d') as fecha_nacimiento,dirreccion,activo FROM `alumnos` where activo = 1";
        $sql="SELECT id,nombre,apellidopaterno,apellidomaterno,fecha_nacimiento,dirreccion,activo FROM `alumnos` where activo = 1";
        $result = $conn->prepare($sql);
        $result->execute();
        $temp = [];
        while($row = $result->fetch(\PDO::FETCH_ASSOC)) {   
            $temp[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($temp);
}
if (isset($_POST['actualizar'])){
    //echo $_POST['minputnombre'];
    $sql="UPDATE alumnos SET nombre='".$_POST['minputnombre']."',".
                "apellidopaterno='".$_POST['minputapellidopaterno']."',".
                "apellidomaterno='".$_POST['minputapellidomaterno']."',".
                "fecha_nacimiento='".$_POST['minputfecha']."',".
                "dirreccion='".$_POST['minputdirrecion']."' ".
                "WHERE id =".$_POST['id']."";
                $result = $conn->prepare($sql);
                $res = $result->execute();
                if($res==1){
                    echo 1;
                }else{
                    echo "error";
                    echo $sql;
                }

    

    
}
?>