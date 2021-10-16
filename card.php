<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("conex.php");

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta - Credencial</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="container">

	<div class="card">
		<div class="right-column">
			<h4><b>NOMBRE:</b> <?php echo $nombre; ?></h4>
			<h4>APELLIDO: <?php echo $apellido; ?></h4>
			<h4>N° AFILIADO: <?php echo $dni; ?></h4>
			<h4>LEGAJO: <?php echo $legajo; ?></h4>
			
			<h6>Vencimiento <?php echo $fechaMas3; ?></h6>
		</div>

	</div>

	
</div>
</body>
</html>