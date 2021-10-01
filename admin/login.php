<?php
include("../script/conexion.php");
$usuario = $_POST["usuario"];
$password = md5($_POST["password"]);

$sql1 = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' and clave = '".$password."' LIMIT 1";
$proceso1 = mysqli_query($conexion,$sql1);
$contador1 = mysqli_num_rows($proceso1);
if($contador1>=1){
	while($row1 = mysqli_fetch_array($proceso1)) { 
		session_start();
		$_SESSION['login_id'] = $row1["id"];
		$_SESSION['login_usuario'] = $row1["usuario"];
		$_SESSION['login_documento_numero'] = $row1["documento_numero"];
		$_SESSION['login_documento_tipo'] = $row1["documento_tipo"];
		?>
		<script type="text/javascript">
			window.location.href = "index2.php";
		</script>
	<?php }
}else{ ?>
	<script type="text/javascript">
		alert("error login incorrecto!");
		window.location.href = "index.php";
	</script>
<?php } ?>