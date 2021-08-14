<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="image/plant.png" type="image/x-icon">
	<title>BioTires</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/tarjeta.css">
	<link rel="shortcut icon" href="img/plant.png" type="img/x-icon">
</head>
<body>
	<div class="contenedor">

		<!-- Tarjeta -->
		<section class="tarjeta" id="tarjeta">
			<div class="delantera">
				<div class="logo-marca" id="logo-marca">
					<img src="img/visa.png" alt=""> 
				</div>
				<img src="img/chip-tarjeta.png" class="chip" alt="">
				<div class="datos">
					<div class="grupo" id="numero">
						<p class="label">Número Tarjeta</p>
						<p class="numero">#### #### #### ####</p>
					</div>
					<div class="flexbox">
						<div class="grupo" id="nombre">
							<p class="label">Nombre Tarjeta</p>
							<p class="nombre">#### #### #### ####</p>
						</div>

						<div class="grupo" id="expiracion">
							<p class="label">Expiracion</p>
							<p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="trasera">
				<div class="barra-magnetica"></div>
				<div class="datos">
					<div class="grupo" id="firma">
						<p class="label">Firma</p>
						<div class="firma"><p></p></div>
					</div>
					<div class="grupo" id="ccv">
						<p class="label">CCV</p>
						<p class="ccv"></p>
					</div>
				</div>
				<p class="leyenda">Lo unico imposible es aquello que NO intentas</p>
				<a href="#" class="link-banco">www.Biotires.com</a>
			</div>
		</section>

    

    <!--Boton-->
    <div class="contenedor-btn">
        <button class="btn-abrir-formulario" id="btn-abrir-formulario">
            <i class="fas fa-plus"></i>
        </button>
	</div>
	<!--Formulario-->
	<form action="" id="formulario-tarjeta" class="formulario-tarjeta">
		<div class="grupo">
			<label for="input-numero">Numero tarjeta</label>
			<input type="text" id="inputNumero" maxlength="19" autocomplete="off">
		</div>
		<div class="grupo">
			<label for="input-nombre">Nombre de usuario</label>
			<input type="text" id="inputNombre" maxlength="19" autocomplete="off">
		</div>
		<div class="flexbox">
			<div class="grupo expira">
				<label for="selectMes">Expiracion</label>
				<div class="felxbox">
					<div class="grupo-select">
						<select name="mes" id="selectMes">
							<option disabled selected>Mes</option>
						</select>
						<i class="fas fa-angle-down"></i>
					</div>
					<div class="grupo-select">
						<select name="year" id="selectYear">
							<option disabled selected>Año</option>
						</select>
						<i class="fas fa-angle-down"></i>
					</div>
				</div>
			</div>
			<div class="grupo ccv">
				<label for="inputCCV">CCV</label>
				<input type="text" id="inputCCV" maxlength="3">

			</div>
		</div>
		<button type="submit" class="btn-enviar"><a href="error.php">Comprar</a></button>
	</form>
</div>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>