<?php

require_once "conexion.php";

class ModeloActividad
{

	/*=============================================
	CREAR CLIENTE
	=============================================*/

	static public function mdlIngresarActividad()
	{

		if (isset($_POST["estatura"])) {
			$estatura = $_POST["estatura"];

			$estatura =  $_POST["estatura"] / 100;
			$peso = $_POST["peso"];
			$imc = $peso / pow($estatura, 2);

			$padecido = $_POST["padecido"];

			$stmt1 = Conexion::conectar()->prepare("SELECT max(id) FROM usuarios");

			$stmt1->execute();

			$respuesta = $stmt1->fetch();

			$uid = max($respuesta);

			$stmt = Conexion::conectar()->prepare("INSERT INTO tbl_reservations(uid, rdate, status, comments) VALUES (:uid, :rdate, :status, :comments)");
			$null = '';

			$enfermedad = $_POST["enfermedades"];
			$discapacidad = $_POST["locDiscapacidad"];
			if ($discapacidad != "No") {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Trote continuo 6 km
						Abdominales  (4x25/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';
						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Fartlek 15x (1’ al 85% + 1’ al 85%)
						Trote regenerativo 3 km al 60%

						Abdominales (4x25/45´´r)

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
					
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Abdominales
						EST.2 – Calambre chino
						EST.3 – Sentadillas 
						EST.4 – Saltos 
						Carrera 1200m (Después de terminar las 4 estaciones)

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';

						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						2x(4 x 1000  al 85-90% /1’ r)4´R
						Trote regenerativo 800 m al 60%
						Abdominales  (4x25/30´´r)

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';

						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';

						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Abdominales
						EST.2 – Calambre chino
						EST.3 – Sentadillas 
						EST.4 – Saltos 
						Carrera 1200m (Después de terminar las 4 estaciones)

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($enfermedad == "Cardíacas") {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Trote suave 4 km
						Flex. codo (04x15)
						Abdominales  (4x15)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';
						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Caminata 5 km 
						Abdominales (4x15)
						Barras 3x4

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
					
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 2X(30´´ CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';

						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Trote suave 4 km
						Flex. codo (04x25)
						Abdominales  (4x25)

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';

						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';

						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Natacion libre

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($enfermedad == "Respiratorias" || $enfermedad == "Hipertensión") {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Trote suave 4 km
						Flex. codo (04x15)
						Abdominales  (4x15)
						Ejercicios respiratorios

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';
						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Caminata 5 km 
						Abdominales (4x15)
						Barras 3x4
						Ejercicios respiratorios


						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
					
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 2X(30´´ CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						Ejercicios respiratorios

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';

						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Trote suave 4 km
						Flex. codo (04x25)
						Abdominales  (4x25)
						Ejercicios respiratorios

						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';

						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';

						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Natacion libre
						Ejercicios respiratorios
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($imc < 24.9 && $padecido == 'NO') {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Trote continuo 6 km
						Flex. codo (04x25/30´´r)
						Abdominales  (4x25/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';

						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Fartlek 15x (1’ al 85% + 1’ al 85%)
						Trote regenerativo 3 km al 60%
						Burpees (03x10/40`r)
						Abdominales (4x25/45´´r)
						Barras 3x8
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						EST. 5 – Mointain Climber
						EST. 6 - Burpees
						
						Carrera 1200m (Después de terminar las 6 estaciones)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';

						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						2x(4 x 1000  al 85-90% /1’ r)4´R
						Trote regenerativo 800 m al 60%
						Flex. codo (04x25/30´´r)
						Abdominales  (4x25/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';

						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';

						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						CIRCUITO CROSSFIT
						TABATA
						6X(8X1´/30´´r)/3´R
						EJER. 1 Burpees
						EJER. 2 Flexiones de Codo topando un hombro (Izq-Der)
						EJER. 3 Chase de Rabit
						EJER. 4 Plancha (Moviendo cadera de izq. A der.)
						EJER. 5 Step topando codo contario
						EJER. 6 Mountain Climbers
						EJER. 7 Sentadilla con salto
						EJERC. Salto a la grada
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($imc > 24.9 && $imc < 29.9 && $padecido == 'NO') {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Trote continuo 5 km
						Flex. codo (04x20/30´´r)
						Abdominales  (4x20/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';
						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Fartlek 13x (1’ al 85% + 1’ al 85%)
						Trote regenerativo 2 km al 60%
						Burpees (03x10/40`r)
						Abdominales (4x25/45´´r)
						Barras 3x6
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						EST. 5 – Mointain Climber
						EST. 6 - Burpees
						Carrera 800m (Después de terminar las 6 estaciones)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';
						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						2x(4 x 800  al 85-90% /1’ r)4´R
						Trote regenerativo 800 m al 60%
						Flex. codo (04x25/30´´r)
						Abdominales  (4x25/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';
						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';
						$comments = "ESTIRAMIENTO (10’)
						14 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						CIRCUITO CROSSFIT
						TABATA
						4X(8X1´/30´´r)/3´R
						EJER. 1 Burpees
						EJER. 2 Flexiones de Codo topando un hombro (Izq-Der)
						EJER. 3 Chase de Rabit
						EJER. 4 Plancha (Moviendo cadera de izq. A der.)
						EJER. 5 Step topando codo contario
						EJER. 6 Mountain Climbers
						EJER. 7 Sentadilla con salto
						EJERC. Salto a la grada
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($imc >= 30.00 && $padecido == 'NO') {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Trote continuo 4 km
						Flex. codo (04x15/30´´r)
						Abdominales  (4x15/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';
						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Fartlek 10x (1’ al 85% + 1’ al 85%)
						Trote regenerativo 2 km al 60%
						Burpees (03x8/40`r)
						Abdominales (4x25/45´´r)
						Barras 3x5
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						EST. 5 – Mointain Climber
						EST. 6 - Burpees
						Carrera 600m (Después de terminar las 6 estaciones)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';
						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						2x(4 x 600  al 85-90% /1’ r)4´R
						Trote regenerativo 800 m al 60%
						Flex. codo (04x25/30´´r)
						Abdominales  (4x25/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';
						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';
						$comments = "ESTIRAMIENTO (10’)
						14 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						CIRCUITO CROSSFIT
						TABATA
						3X(8X1´/30´´r)/3´R
						EJER. 1 Burpees
						EJER. 2 Flexiones de Codo topando un hombro (Izq-Der)
						EJER. 3 Chase de Rabit
						EJER. 4 Plancha (Moviendo cadera de izq. A der.)
						EJER. 5 Step topando codo contario
						EJER. 6 Mountain Climbers
						EJER. 7 Sentadilla con salto
						EJERC. Salto a la grada
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($imc < 24.9 && $padecido == 'SÍ') {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Trote continuo 6 km
						Flex. codo (04x25/30´´r)
						Abdominales  (4x25/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';

						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';

						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						EST. 5 – Mointain Climber
						EST. 6 - Burpees
						
						Carrera 1200m (Después de terminar las 6 estaciones)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';

						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';

						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';

						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';

						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';

						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';

						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($imc > 24.9 && $imc < 29.9 && $padecido == 'SÍ') {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Trote continuo 5 km
						Flex. codo (04x20/30´´r)
						Abdominales  (4x20/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';
						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';
						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						EST. 5 – Mointain Climber
						EST. 6 - Burpees
						Carrera 800m (Después de terminar las 6 estaciones)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';
						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';
						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';
						$comments = "ESTIRAMIENTO (10’)
						14 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';
						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			} else if ($imc >= 30.00 && $padecido == 'SÍ') {

				$status = 'PENDING';

				for ($i = 1; $i <= 18; $i++) {

					if ($i == 1) {
						$rdate = '2021-08-30 06:45';
						$comments = "CALENTAMIENTO (10’)
									Calentamiento activo (Ejercicios dirigidos)
									";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 2) {
						$rdate = '2021-08-30 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Trote continuo 4 km
						Flex. codo (04x15/30´´r)
						Abdominales  (4x15/30´´r)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 3) {
						$rdate = '2021-08-30 07:30';
						$comments = "ESTIRAMIENTO (10’)
						10 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 4) {
						$rdate = '2021-08-31 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 5) {
						$rdate = '2021-08-31 07:00';
						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 6) {
						$rdate = '2021-08-31 07:30';

						$comments = "ESTIRAMIENTO (10’)
						11 Ejercicios (Individual)
						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 7) {
						$rdate = '2021-09-01 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 8) {
						$rdate = '2021-09-01 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						Circuito Fuerza 4X(1´CADA ESTACIÓN)
						EST.1 – Flex. Codo Diamante
						EST.2 – Plancha
						EST.3 – Flexión codo (Topando el Hombro)
						EST.4 – Sentadillas 
						EST. 5 – Mointain Climber
						EST. 6 - Burpees
						Carrera 600m (Después de terminar las 6 estaciones)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 9) {
						$rdate = '2021-09-01 07:30';
						$comments = "ESTIRAMIENTO (10’)
						12 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 10) {
						$rdate = '2021-09-02 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 11) {
						$rdate = '2021-09-02 07:00';
						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 12) {
						$rdate = '2021-09-02 07:30';
						$comments = "ESTIRAMIENTO (10’)
						13 Ejercicios (Individual
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 13) {
						$rdate = '2021-09-03 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 14) {
						$rdate = '2021-09-03 07:00';
						$comments = "PARTE ESPECÍFICA (40’)
						DEPORTES
						Ecuavoley
						Fútbol
						Baloncesto
						Gimnasio						
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 15) {
						$rdate = '2021-09-03 07:30';
						$comments = "ESTIRAMIENTO (10’)
						14 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 16) {
						$rdate = '2021-09-04 06:45';
						$comments = "CALENTAMIENTO (10’)
						Calentamiento activo (Ejercicios dirigidos)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 17) {
						$rdate = '2021-09-04 07:00';
						$comments = "Caminata o trote suave
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					} elseif ($i == 18) {
						$rdate = '2021-09-04 07:30';
						$comments = "ESTIRAMIENTO (10’)
						15 Ejercicios (Individual)
						";
						$stmt->bindParam(":uid", $uid, PDO::PARAM_STR);
						$stmt->bindParam(":rdate", $rdate, PDO::PARAM_STR);
						$stmt->bindParam(":status", $status, PDO::PARAM_STR);
						$stmt->bindParam(":comments", $comments, PDO::PARAM_STR);
					}
					$stmt->execute();
				}
			}
		}
	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor)
	{

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt->fetch();
		} else {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt->fetchAll();
		}

		$stmt->close();

		$stmt = null;
	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function mdlEditarCliente($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, documento = :documento, email = :email, telefono = :telefono, direccion = :direccion, fecha_nacimiento = :fecha_nacimiento WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);

		if ($stmt->execute()) {

			return "ok";
		} else {

			return "error";
		}

		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function mdlEliminarCliente($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $datos, PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "ok";
		} else {

			return "error";
		}

		$stmt->close();

		$stmt = null;
	}

	/*=============================================
	ACTUALIZAR CLIENTE
	=============================================*/

	static public function mdlActualizarCliente($tabla, $item1, $valor1, $valor)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt->bindParam(":" . $item1, $valor1, PDO::PARAM_STR);
		$stmt->bindParam(":id", $valor, PDO::PARAM_STR);

		if ($stmt->execute()) {

			return "ok";
		} else {

			return "error";
		}

		$stmt->close();

		$stmt = null;
	}
}
