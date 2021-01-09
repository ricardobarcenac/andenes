<?php namespace App\Controllers;

class ES extends BaseController {

	public function index() {

		$data = array(
			'titulo' => 'Andenes',
			'descripcion' => 'Exportación de productos al mercado asiático',
			'keywords' => 'andenes, glint global, glint, global',
		);

		echo view('templates/header', $data);
		echo view('inicio');
		echo view('templates/footer');
	}

	public function contacto() {

		$data = array(
			'titulo' => 'Contacto',
			'descripcion' => '',
			'keywords' => '',
		);

		echo view('templates/header', $data);
		echo view('contacto');
		echo view('templates/footer');
	}

	public function contacto_es (){
		$nombres = $this->request->getVar('nombres');
		$telefono = $this->request->getVar('telefono');
		$correo = $this->request->getVar('correo');
		$mensaje = $this->request->getVar('consulta');

		//$to = session()->get('correo_electronico');
		$to = 'ricardobarcena.c@gmail.com';
		$subject = 'Nueva consulta | GlintGlobal';
		$message = '
		<html>
				<head>
				</head>
				<body>
					<h3>¡Hola!</h3>
					<p>Tienes una nueva consulta de : '.$nombres.'</p>
					<p>Mensaje: </p>
					<p>'.$mensaje.'</p>
					<p>Datos de contacto:</p>
					<ul>
						<li>'.$telefono.'</li>
						<li>'.$correo.'</li>
					</ul>
				</body>
		</html>';

		//$filepath = 'public/assets/files/form_pep.pdf';
		$email = \Config\Services::email();
		$email->setTo($to);
		$email->setFrom('admin@glintglobal.com','Contacto Glint Global');
		$email->setSubject($subject);
		$email->setMessage($message);
		//$email->attach($filepath);
		$email->send();
		return redirect()->to($_SERVER['HTTP_REFERER']);
	}

	public function quinua (){

				$data = array(
					'titulo' => 'Quinua',
					'descripcion' => 'superfoods, quinua, kinua, andenes quinua, glintglobal quinua, glintblobal kinua',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('granos_semillas/quinua');
		echo view('templates/footer');
	}

	public function kiwicha (){

				$data = array(
					'titulo' => 'Kiwicha',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('granos_semillas/kiwicha');
		echo view('templates/footer');
	}

	public function canihua (){

			$data = array(
				'titulo' => 'Cañihua',
				'descripcion' => '',
				'keywords' => '',
			);

		echo view('templates/header', $data);
		echo view('granos_semillas/canihua');
		echo view('templates/footer');
	}

	public function chia (){

			$data = array(
				'titulo' => 'Chía',
				'descripcion' => '',
				'keywords' => '',
			);

		echo view('templates/header', $data);
		echo view('granos_semillas/chia');
		echo view('templates/footer');
	}

	public function sesamo (){

			$data = array(
				'titulo' => 'Sésamo',
				'descripcion' => 'superfoods, sesamo, andenes sesamo, glintglobal sesamo',
				'keywords' => '',
			);

		echo view('templates/header', $data);
		echo view('granos_semillas/sesamo');
		echo view('templates/footer');
	}

	public function aguaymanto (){

			$data = array(
				'titulo' => 'Aguaymanto',
				'descripcion' => '',
				'keywords' => '',
			);

		echo view('templates/header', $data);
		echo view('frutas/aguaymanto');
		echo view('templates/footer');
	}

	public function camucamu (){

				$data = array(
					'titulo' => 'Camu Camu',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('frutas/camucamu');
		echo view('templates/footer');
	}

	public function acai (){

			$data = array(
				'titulo' => 'Acai',
				'descripcion' => '',
				'keywords' => '',
			);

		echo view('templates/header', $data);
		echo view('frutas/acai');
		echo view('templates/footer');
	}

	public function lucuma (){

				$data = array(
					'titulo' => 'Lúcuma',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('frutas/lucuma');
		echo view('templates/footer');
	}

	public function arandanos (){

			$data = array(
				'titulo' => 'Arándanos',
				'descripcion' => '',
				'keywords' => '',
			);

		echo view('templates/header', $data);
		echo view('frutas/arandanos');
		echo view('templates/footer');
	}

	public function cacao (){

				$data = array(
					'titulo' => 'Cacao',
					'descripcion' => 'superfoods, cacao, andenes cacao, glintglobal cacao, cacaoenpolvo, cacao en polvo, polvo de cacao',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('cacaocafe/cacao');
		echo view('templates/footer');
	}

	public function cafe (){

				$data = array(
					'titulo' => 'Café',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('cacaocafe/cafe');
		echo view('templates/footer');
	}

	public function jengibre (){

				$data = array(
					'titulo' => 'Jengibre',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('tuberculos/jengibre');
		echo view('templates/footer');
	}

	public function maca (){

				$data = array(
					'titulo' => 'Maca',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('tuberculos/maca');
		echo view('templates/footer');
	}

	public function yacon (){

				$data = array(
					'titulo' => 'Yacón',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('tuberculos/yacon');
		echo view('templates/footer');
	}

	public function nuez_de_brasil (){

				$data = array(
					'titulo' => 'Nuez de Brasil',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('frutos_secos/nuez');
		echo view('templates/footer');
	}

	public function nuez_nogal (){

			$data = array(
				'titulo' => 'Nuez de Nogal',
				'descripcion' => '',
				'keywords' => '',
			);

		echo view('templates/header', $data);
		echo view('frutos_secos/nuez_nogal');
		echo view('templates/footer');
	}

	public function pecanas (){

				$data = array(
					'titulo' => 'Pecanas',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('frutos_secos/pecanas');
		echo view('templates/footer');
	}

	public function sacha_inchi (){

				$data = array(
					'titulo' => 'Sacha Inchi',
					'descripcion' => 'superfoods, sacha inchi, sachainchi, andenes sacha inchi, glintglobal sachainchi',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('frutos_secos/sacha_inchi');
		echo view('templates/footer');
	}

	public function almendras (){

				$data = array(
					'titulo' => 'Almendras',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('frutos_secos/almendras');
		echo view('templates/footer');
	}

	public function polen (){

				$data = array(
					'titulo' => 'Polen',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('florales_plantas/polen');
		echo view('templates/footer');
	}

	public function miel (){

				$data = array(
					'titulo' => 'Miel',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('florales_plantas/miel');
		echo view('templates/footer');
	}

	public function panela (){

				$data = array(
					'titulo' => 'Panela',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('florales_plantas/panela');
		echo view('templates/footer');
	}

	public function andean_porcini (){

				$data = array(
					'titulo' => 'Andean Porcini',
					'descripcion' => '',
					'keywords' => '',
				);

		echo view('templates/header', $data);
		echo view('florales_plantas/andean_porcini');
		echo view('templates/footer');
	}

}
