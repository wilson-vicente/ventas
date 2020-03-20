<?php

class Metodos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->vista = "principal";
		$this->menu  = "menu";
		$this->datos = array();
		$this->datos['scripts'][] = (object) array('ruta' => 'ventas/assets/js/gscripts.js', 'print' => true);
	}	

	public function esquinaNoroeste() {

		$this->datos["action"] = base_url("index.php/io/Metodos/generarNoroeste"); 
		$this->datos["vista"]  = "io/cuerpo";
		$this->load->view($this->vista, $this->datos);
	
	}

	public function generarNoroeste() {

		if ($_POST['fila7']['1'] <= $_POST['fila0']['7']) {
			$costo1     = $_POST['fila0']['1'];
			$asignar1   = $_POST['fila7']['1'];
			$resultado1 = ($costo1*$asignar1);

			$ec1     = (($asignar1 - $_POST['fila7']['1']) == 0) ? 1 : 0;  
			$saldoc1 = ($asignar1 - $_POST['fila7']['1']);
			$salodf1 = ($_POST['fila0']['7'] - $asignar1);


			/*echo "Costo ".$_POST['fila0']['1']."<br>";
			echo "Demanda ".$_POST['fila0']['7']."<br>";
			echo "Oferta ".$_POST['fila7']['1']."<br>";
			echo 'Resultado '.$resultado1."<br>";
			echo "Eliminar col1 ".$ec1."<br>";
			echo "Saldo Columna1 ". $saldoc1."<br>";
			echo "Saldo fil1 ". $salodf1."<br>";*/

		} else {

			$costo1 	= $_POST['fila0']['1'];
			$asignar1 	= $_POST['fila0']['7'];
			$resultado1 = ($costo1*$asignar1);

			$ef1 = (($_POST['fila0']['7'] - $asignar1) == 0) ? 1 : 0;
			$saldoc1 = ($_POST['fila7']['1']-$asignar1);
			$salodf1 = ($_POST['fila0']['7'] - $asignar1); 			

			/*echo "Costo ".$_POST['fila0']['1']."<br>";
			echo "Demanda ".$_POST['fila7']['1']."<br>";
			echo "Oferta ".$_POST['fila0']['7']."<br>";
			echo 'Resultado '.$resultado1."<br>";
			echo "Eliminar fila1 ".$ef1."<br>";
			echo "Saldo Columna1 ". $saldoc1."<br>";
			echo "Saldo fil1 ". $salodf1."<br>";*/
		}

		if ($salodf1 <= $_POST['fila7']['2']) {

			$costo2     = $_POST['fila0']['2'];
			$asignar2   = $salodf1;
			$resultado2 = ($costo2*$asignar2);

			$ef12     = (($asignar2 - $salodf1) == 0) ? 1 : 0;  
			$saldof12 = ($asignar2 - $salodf1);
			$salodc22 = ($_POST['fila7']['2'] - $asignar2);

			/*echo "<br><br>";
			echo "Costo ".$costo2."<br>";
			echo "Demanda ".$_POST['fila7']['2']."<br>";
			echo "Oferta ".$salodf1."<br>";
			echo 'Resultado '.$resultado2."<br>";

			echo "Eliminar f1 ".$ef12."<br>";
			echo "Saldo Columna2 ". $salodc22."<br>";
			echo "Saldo fil1 ". $saldof12."<br>";*/
		} 


		if ($salodc22 >= $_POST['fila1']['7']) {
			$costo3     = $_POST['fila1']['2'];
			$asignar3   = $_POST['fila1']['7'];
			$resultado3 = ($costo3*$asignar3);

			$ef22      = (($asignar3 - $_POST['fila1']['7']) == 0) ? 1 : 0;  
			$saldof22  = ($asignar3 - $_POST['fila1']['7']);
			$salodc223 = ($salodc22 - $asignar3);

			/*echo "<br><br>";
			echo "Costo ".$costo3."<br>";
			echo "Demanda ".$salodc22."<br>";
			echo "Oferta ".$_POST['fila1']['7']."<br>";
			echo 'Resultado '.$resultado3."<br>";

			echo "Eliminar f2 ".$ef22."<br>";
			echo "Saldo Columna2 ". $salodc223."<br>";
			echo "Saldo fil22 ". $saldof22."<br>";*/
		}

		if ($salodc223 >= $_POST['fila2']['7']) {
			$costo4     = $_POST['fila2']['2'];
			$asignar4   = $_POST['fila2']['7'];
			$resultado4 = ($costo4*$asignar4);

			$ef33      = (($asignar4 - $_POST['fila2']['2']) == 0) ? 1 : 0;  
			$saldof32  = ($asignar4 - $_POST['fila2']['7']);
			$salodc32  = ($_POST['fila2']['7'] - $asignar4);

			/*echo "<br><br>";
			echo "Costo ".$costo4."<br>";
			echo "Demanda ".$salodc22."<br>";
			echo "Oferta ".$_POST['fila2']['7']."<br>";
			echo 'Resultado '.$resultado4."<br>";

			echo "Eliminar f3 ".$ef33."<br>";
			echo "Saldo Columna2 ". $salodc223."<br>";
			echo "Saldo fil32 ". $saldof32."<br>";*/
		}


		if ($salodc223 <= $_POST['fila2']['7']) {
			$costo4     = $_POST['fila2']['2'];
			$asignar5   = $salodc223;
			$resultado5 = ($costo4*$asignar5);

			$ec22      = (($asignar5 - $salodc223) == 0) ? 1 : 0;  

			$saldof32  = ($_POST['fila2']['7'] - $asignar5);
			$salodc32  = ($asignar5 - $salodc223);
			
			/*echo "<br><br>";
			echo "Costo ".$costo4."<br>";
			echo "Demanda ".$salodc223."<br>";
			echo "Oferta ".$_POST['fila2']['7']."<br>";
			echo 'Resultado '.$resultado5."<br>";
			echo "Eliminar c2 ".$ec22."<br>";
			echo "Saldo Columna2 ". $salodc32."<br>";
			echo "Saldo fil3 ". $saldof32."<br>";*/
		}  

		if ($saldof32 <= $_POST['fila7']['3']) {

			$costo5     = $_POST['fila2']['3'];
			$asignar6   = $saldof32;
			$resultado6 = ($costo5*$asignar6);

			$ef322      = (($asignar6 - $saldof32) == 0) ? 1 : 0;  

			$salodc321  = ($_POST['fila7']['3'] - $asignar6);
			$saldof321  = ($saldof32 - $asignar6);

			/*echo "<br><br>";
			echo "Costo ".$costo5."<br>";
			echo "Demanda ".$saldof32."<br>";
			echo "Oferta ".$_POST['fila7']['3']."<br>";
			echo 'Resultado '.$resultado6."<br>";
			echo "Eliminar f3 ".$ef322."<br>";

			echo "Saldo Columna3 ". $salodc321."<br>";
			echo "Saldo fil3 ". $saldof321."<br>";*/
		}

		if ($salodc321 <= $_POST['fila3']['7']) {

			$costo6     = $_POST['fila3']['3'];
			$asignar7   = $salodc321;

			$resultado7 = ($asignar7*$costo6);

			$ec322      = (($asignar7 - $salodc321) == 0) ? 1 : 0;  

			$salodc324  = ($asignar7 - $salodc321);
			$saldof324  = ($_POST['fila3']['7']- $salodc321);
					
			/*echo "<br><br>";
			echo "Costo ".$costo6."<br>";
			echo "Demanda ".$salodc321."<br>";
			echo "Oferta ".$_POST['fila3']['7']."<br>";
			echo 'Resultado '.$resultado7."<br>";
			echo "Eliminar c3 ".$ec322."<br>";
			echo "Saldo Columna3 ". $salodc324."<br>";
			echo "Saldo fil3 ". $saldof324."<br>";*/
		}


		if ($saldof324 <= $_POST['fila7']['4']) {
	
			$costo7    = $_POST['fila3']['4'];
			$asignar8  = $saldof324;

			$resultado8 = ($asignar8*$costo7);

			$ef41      = (($asignar8 - $saldof324) == 0) ? 1 : 0;  

			$salodc41  = ($_POST['fila7']['4'] - $asignar8);
			$saldof41  = ($saldof324 - $asignar8);
					
			/*echo "<br><br>";
			echo "Costo ".$costo7."<br>";
			echo "Demanda ".$_POST['fila7']['4']."<br>";
			echo "Oferta ".$saldof324."<br>";
			echo 'Resultado '.$resultado8."<br>";
			echo "Eliminar f4 ".$ef41."<br>";
			echo "Saldo Columna3 ". $salodc41."<br>";
			echo "Saldo fil3 ". $saldof41."<br>";*/
		}

		if ($salodc41 <= $_POST['fila7']['4']) {
	
			$costo8    = $_POST['fila4']['4'];
			$asignar9  = $salodc41;

			$resultado9 = ($asignar9*$costo8);

			$ef412     = (($salodc41 - $asignar9) == 0) ? 1 : 0;  

			$salodc412  = ($salodc41 - $asignar9);
			$saldof412  = ($_POST['fila4']['7'] - $asignar9);
					
			/*echo "<br><br>";
			echo "Costo ".$costo8."<br>";
			echo "Demanda ".$salodc41."<br>";
			echo "Oferta ".$_POST['fila4']['7']."<br>";
			echo 'Resultado '.$resultado9."<br>";
			echo "Eliminar c4 ".$ef412."<br>";
			echo "Saldo Columna4 ". $salodc412."<br>";
			echo "Saldo fil3 ". $saldof412."<br>";*/
		}

		if ($saldof412 <= $_POST['fila7']['5']) {
	
			$costo9    = $_POST['fila4']['5'];

			$asignar10  = $saldof412;

			$resultado10 = ($asignar10*$costo9);

			$ef51     = (($saldof412 - $asignar10) == 0) ? 1 : 0;  

			$salodc51  = ($_POST['fila7']['5'] - $asignar10);
			$saldof51  = ($saldof412 - $asignar10);
					
			/*echo "<br><br>";
			echo "Costo ".$costo10."<br>";
			echo "Demanda ".$_POST['fila7']['5']."<br>";
			echo "Oferta ".$saldof412."<br>";
			echo 'Resultado '.$resultado10."<br>";
			echo "Eliminar f5 ".$ef51."<br>";
			echo "Saldo Columna5 ". $salodc51."<br>";
			echo "Saldo fil5 ". $saldof51."<br>";*/
		}

		if ($salodc51 <= $_POST['fila5']['7']) {
	
			$costo10    = $_POST['fila5']['5'];

			$asignar11  = $salodc51;

			$resultado11 = ($costo10*$asignar11);

			$ec61     = (($salodc51 - $asignar11) == 0) ? 1 : 0;  

			$salodc61  = ($salodc51 - $asignar11);
			$saldof61  = ($_POST['fila5']['7'] - $salodc51);
					
			/*echo "<br><br>";
			echo "Costo ".$costo10."<br>";
			echo "Demanda ".$salodc51."<br>";
			echo "Oferta ".$_POST['fila5']['7']."<br>";
			echo 'Resultado '.$resultado11."<br>";
			echo "Eliminar c6 ".$ec61."<br>";
			echo "Saldo Columna5 ". $salodc61."<br>";
			echo "Saldo fil5 ". $saldof61."<br>";*/
		}

		if ($saldof61 <= $_POST['fila7']['6']) {
	
			$costo11    = $_POST['fila5']['6'];
	
		  	$asignar12  = $saldof61;

			$resultado12 = ($costo11*$asignar12);

			$ef71     = (($saldof61 - $asignar12) == 0) ? 1 : 0;  

			$salodc71  = ($_POST['fila7']['6'] - $asignar12);
			$saldof71  = ($saldof61 - $asignar12);
					
		    /*echo "<br><br>";
			echo "Costo ".$costo11."<br>";
			echo "Demanda ".$_POST['fila7']['6']."<br>";
			echo "Oferta ".$saldof61."<br>";
			echo 'Resultado '.$resultado12."<br>";
			echo "Eliminar f7 ".$ef71."<br>";
			echo "Saldo Columna6 ".$salodc71."<br>";
			echo "Saldo fil6 ". $saldof71."<br>";*/
		}

		if ($salodc71 <= $_POST['fila6']['7']) {
	
			$costo12    = $_POST['fila6']['6'];
	
		  	$asignar13  = $salodc71;

			$resultado13 = ($costo12*$asignar13);

			$ef81     = (($salodc71 - $asignar13) == 0) ? 1 : 0;  

			$salodc81  = ($_POST['fila6']['7'] - $asignar13);
			$saldof81  = ($salodc71 - $asignar13);
					
		    /*echo "<br><br>";
			echo "Costo ".$costo12."<br>";
			echo "Demanda ".$salodc71."<br>";
			echo "Oferta ".$_POST['fila6']['7']."<br>";
			echo 'Resultado '.$resultado13."<br>";
			echo "Eliminar f8 ".$ef81."<br>";
			echo "Saldo Columna7 ".$salodc81."<br>"*/

		}

		$this->datos['totalEsqNoroeste'] = round(($resultado1 + $resultado2  + $resultado3 + 
												 $resultado4  + $resultado5  + $resultado6 + 
												 $resultado7  + $resultado8  + $resultado9 +
												 $resultado10 + $resultado11 + $resultado12 + 
												 $resultado13), 2);

		# Valores Asignados
		$teta = 5;
		$this->datos['valorAsigna'] =  array("asignar1" => ($asignar1 - $teta),
											"asignar2"  => ($asignar2 + $teta),
											"asignar3"  => ($asignar3),
											"asignar4"  => ($asignar4 + $teta),
											"asignar5"  => ($asignar5 - $teta),
											"asignar6"  => ($asignar6 + $teta),
											"asignar7"  => ($asignar7 - $teta),
											"asignar8"  => ($asignar8 + $teta),
											"asignar9"  => ($asignar9 - $teta),
											"asignar10" => ($asignar10 + $teta),
											"asignar11" => ($asignar11 - $teta),
											"asignar12" => ($asignar12 + $teta),
											"asignar13" => ($asignar13 - $teta),
											"teta"      => $teta);

		# Demanda 
		$this->datos['demanda'] = array("demanda1" => $_POST['fila7']['1'],
										"demanda2" => $_POST['fila7']['2'],
										"demanda3" => $_POST['fila7']['3'],
										"demanda4" => $_POST['fila7']['4'],
										"demanda5" => $_POST['fila7']['5'],
										"demanda6" => $_POST['fila7']['6'],
										"demanda7" => $_POST['fila7']['7']);

		#Oferta fila0[7]
		$this->datos['oferta'] = array("oferta1"  => $_POST['fila0']['7'],
										"oferta2" => $_POST['fila1']['7'],
										"oferta3" => $_POST['fila2']['7'],
										"oferta4" => $_POST['fila3']['7'],
										"oferta5" => $_POST['fila4']['7'],
										"oferta6" => $_POST['fila5']['7'],
										"oferta7" => $_POST['fila6']['7']);
		
		# Resultado Multiplicadores 
		$xdato1 = (($asignar1 - $teta) * $_POST['fila0']['1']);
		$xdato2 = (($asignar2 + $teta) * $_POST['fila0']['2']);
		$xdato3 = ($asignar3  * $_POST['fila1']['2']);
		$xdato4 = (($asignar5 - $teta) * $_POST['fila2']['2']);
		$xdato5 = (($asignar6 + $teta) * $_POST['fila2']['3']);
		$xdato6 = (($asignar7 - $teta) * $_POST['fila3']['3']);
		$xdato7 = (($asignar8 + $teta) * $_POST['fila3']['4']);
		$xdato8 = (($asignar9 - $teta) * $_POST['fila4']['4']);
		$xdato9 = (($asignar10 + $teta) * $_POST['fila4']['5']);
		$xdato10 = (($asignar11 - $teta) * $_POST['fila5']['5']);
		$xdato11 = (($asignar12 + $teta) * $_POST['fila5']['6']);
		$xdato12 = (($asignar13 - $teta) * $_POST['fila6']['6']);
		$xdato13 = ($teta * $_POST['fila6']['1']);
		
		$totalMultiplicadores = round($xdato1 + $xdato2 + $xdato3 + $xdato4 + $xdato5 + $xdato6 +
									$xdato7 + $xdato8 + $xdato9 + $xdato10 + $xdato11 + $xdato1 +
									$xdato13,2);
		
		$this->datos['totalMultiplicadores'] = $totalMultiplicadores;
		$this->datos["action"] = base_url("index.php/io/Metodos/GenerarMultiplicadores"); 
		$this->datos["vista"]  = "io/resultado_final";
		$this->load->view($this->vista, $this->datos);
	}
}



?>