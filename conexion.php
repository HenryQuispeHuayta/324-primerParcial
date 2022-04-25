<?php
function incluirAcceso($ci,$user,$pass){
    $con = mysqli_connect("localhost","admin","admin");
    mysqli_select_db($con,"primerParcialHenryQuispeHuayta");
    $sql="insert into Acceso values($ci,'$user','$pass')";
    $resultado = mysqli_query($con, $sql);

    return $resultado;
}
function incluirInscripcion($ci,$sigla,$nota1,$nota2,$nota3){
    $notaF=$nota1+$nota2+$nota3;
    $con = mysqli_connect("localhost","admin","admin");
    mysqli_select_db($con,"primerParcialHenryQuispeHuayta");
    $sql="insert into Inscripcion values($ci,'$sigla',$nota1,$nota2,$nota3,$notaF)";
    $resultado = mysqli_query($con, $sql);

    return $resultado;
}
function incluirPersona($ci,$nomC,$fechaN,$dep){
    $con = mysqli_connect("localhost","admin","admin");
    mysqli_select_db($con,"primerParcialHenryQuispeHuayta");
    $sql="insert into Persona values($ci,'$nomC','$fechaN',$dep)";
    $resultado = mysqli_query($con, $sql);

    return $resultado;
}
?>