<?php
require("conex.php");
if (mysqli_num_rows($resultado) > 0){
    while($row = $resultado->fetch_array()){
        $dni = $row['dni'];
        $nombre=$row['nombre'];
        $apellido=$row['apellido'];
        $legajo=$row['legajo'];
        //header("Location:cred_html.php");
    }
}else{
    $dni = 'NO EXISTE';
    $nombre = '--';
    $apellido = '--';
    $legajo = '--';
    //header("Location:cred_html.php");

}
$fecha_actual = date("d-m-Y");
$fechaMas3 = date("d-m-Y",strtotime($fecha_actual."+ 3 days"));
?>
<style>
    html{
    margin: 5pt 5pt;
}
.credencial{
    color: #00b4e1;
    font-family: 'Dejavu Sans';
    background-color: #002e4c;
    width: 9cm;
    height: 5.3cm;
    border-radius: 10px;
    overflow: hidden;
    z-index: 0;
}
.heading .logo, .heading .subtitle, .foto, img, .datos{
    position: absolute;
}
.datos, .heading .subtitle{
    list-style: none;
}
.datos{
    color: #555555;
    font-size: 13px;
    position: absolute; 
    top: 80px; 
    left: 78px;
    letter-spacing: 0.1mm;
}
</style>


    <div class="credencial">
        <div class="heading">
            <img src="https://vetdingo.com.ar/cred/img/img.png" alt="" />
            
        </div>
        <ul class="datos">
            <li>
                NOMBRE: <?php echo $nombre; ?>
            </li>
            <li>
                APELLIDO: <?php echo $apellido; ?>
            </li>
            <li>
                N° AFILIADO:  <?php echo $dni; ?>
            </li>
            <li>
                Legajo <?php echo $legajo; ?>
            </li>
            <li>
                Vencimiento <?php echo $fechaMas3; ?>
            </li>
        </ul>
    </div>

