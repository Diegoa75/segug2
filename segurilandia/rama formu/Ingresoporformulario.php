<html>
	<head>
		<title>Formulario de registro</title>
	</head>
	
	
		<body>
			<h1>Formulario de registro</h1>
			<h5>Los campos con (*) son obligatorios.</h5>
			<form method="POST" action=""/>
				<table>
					<tr>
						<td>
							*Nombre:
						<td/>
						<td>
							<input type ="name" name="realname" />
						</td>
					</tr>
					<tr>
						<td>
							*Rol:
						<td/>
						<td>
							<input type ="name" name="rol" />
						</td>
					</tr>
					<tr>
						<td>
							*Contraseña:
						<td/>
						<td>
							<input type ="password" name="pass" />
						</td>
					</tr>
					<tr>
						<td>
							*Repetir Contraseña:
						<td/>
						<td>
							<input type ="password" name="rpass" />
						</td>
					</tr>				
				</table>
				<br>
				<br>
				<input type="submit" name="submit" value="registrarme"/><input type="reset"/>
				</form>
				<?php
				if (isset($_POST['submit'])){
					require("registro.php");
					}				
				?>
				
		</body>
	
</html>