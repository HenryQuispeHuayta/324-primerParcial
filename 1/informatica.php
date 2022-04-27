<?php
if(empty($_SESSION["activa"])){
    header("location: ../3/index.php");
}
?>

<?php include('header.php') ?>
<div class="carrera">
        <h2>INFORMATICA</h2>
</div>
<div class="body">
        <div class="seccion">
            <div class="separacion">
                <p> Creada en 1973, la primera Carrera en el Sistema Universitario Boliviano, pionera en el campo de la Informática con el objetivo primordial de la formación profesional con excelencia. En su plan curricular se encuentran asignaturas de Ciencias de la Computación, Informática, Matemáticas, Sistemas y Gestión conforme a las necesidades del mercado profesional.
Para el aprendizaje práctico se tiene el Laboratorio Superior de Informática- LASIN - en la que se dispone de diversas salas con tecnología de punta de acuerdo a su evolución; en el transcurso de los años se ha equipado con computadoras desde la tercera generación con procesamiento en tiempo real, multiprogramación, computadoras multiusuario con recursos y tiempo compartido, computadoras personales de diversa configuración de acuerdo al avance de la ciencia y tecnología con la actual incorporación del Internet para la transmisión de la información; el software con diferentes sistemas operativos, lenguajes de programación, paquetes de software y multimedia. </p>
            </div>
            <div class="separacion">
                <h2>Licenciatura en Informática</h2>
                <h3>Perfil Profesional</h3>
                <p>El profesional de la Carrera de Informática, debe ser una persona investigadora, creativa, innovadora, emprendedora, analista y presta al cambio que exige las tecnologías de punta, aplicando metodologías vigentes, normas de calidad, técnicas de seguridad, plataformas tecnológicas de última generación, para brindar soluciones informáticas, prestando servicios a la comunidad, mejorando la calidad de vida de las personas y logrando un profesional exitoso.
Cada profesional informático tiende a la especialización en las áreas de la Ingeniería de Software, el área de Inteligencia Artificial, Robótica, Minería de datos, Seguridad Informática, Redes, en el área legal como Derecho Informático y otras.</p>
            </div>
            <div class="separacion">
                <h2>Objetivo General</h2>
                <p>Generar conocimiento reflexivo y crítico enmarcado en las líneas de investigación de la FCPN, para la formación profesional que responda al contexto socio-político local, regional, nacional e internacional, a través de la difusión e innovación que aporten a la solución de las necesidades de la sociedad en su conjunto.</p>
            </div>
        </div>
        <?php include('menu.php') ?>
    </div>


<?php include('footer.php') ?>
