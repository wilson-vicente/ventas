<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('welcome_message');
	}

	public function bodega() {
		echo "<h1> <center> Prueba de sistema. </center> </h1> ";
		echo "<h1> <center> Prueba de sistemas Boostrap. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 1. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 2. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 3. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 4. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 5. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 6. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 7. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 8. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 9. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas codeigniter 10. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 11. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 12. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 13. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 14. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas codeigniter 15. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 16. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 17. </cebter> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 18. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 19. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 20. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 21. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 22. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 23. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 24. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 25. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 26. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 27. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 28. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 29. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 30. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 31. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 32. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 33. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas codeigniter 34. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 35. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 36. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 37. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 38. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 39. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 40. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 41. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 42. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 43. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 44. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 45. </center> </h1>";
		echo "<h1> <center> Prueba de sistemas Codeigniter 46. </center> </h1>";

		/*for ($i=0; $i <= 5; $i++) { 
			echo "<h1> <center> Hello Wold! {$i} </center> </h1> <br>";
		}*/
	}

	public function nodos() {

		$this->load->model('Conf_model');
		$datos = $this->Conf_model->verUsuario(array('usuario' => 1));
		echo "<pre>";
			print_r($datos);
		echo "</pre>";
		//this->load->view("dibujarnodo/nodo");

	}
}
