<?php
if(empty($_SESSION["activa"])){
    header("location: ../3/index.php");
}

require_once "../conexion.php";
$ci="";
$user=$_POST["user"];
$pass=$_POST["pass"];
$query=mysqli_query($con,"SELECT * FROM Acceso WHERE USUARIO='$user' AND PASSWORD='$pass'");
$resultado=mysqli_num_rows($query);
if($resultado>0){
    $dato=mysqli_fetch_array($query);
    $_SESSION["ci"]=$dato["CI"];
    $_SESSION["user"]=$dato["USUARIO"];
    $_SESSION["password"]=$dato["PASSWORD"];
}
$ci=$_SESSION["ci"];
$queryI=mysqli_query($con,"SELECT * FROM Inscripcion WHERE CI='$ci'");
$resultadoI=mysqli_num_rows($queryI);
for($i=0;$i<$resultadoI;$i++){
    $datoI=mysqli_fetch_array($queryI);
    printf("%s \n",$datoI[2]);

}
// printf($notast);
// if($resultadoI>0){
//     $_SESSION["sigla"]=$datoI["SIGLA"];
//     $_SESSION["nota1"]=$datoI["NOTA1"];
//     $_SESSION["nota2"]=$datoI["NOTA2"];
//     $_SESSION["nota3"]=$datoI["NOTA3"];
//     $_SESSION["notaf"]=$datoI["NOTAFINAL"];
// }
?>
