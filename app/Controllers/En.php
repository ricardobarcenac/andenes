<?php namespace App\Controllers;

class EN extends BaseController {

	public function index() {
		$data = array(
			'titulo' => 'Andenes',
			'descripcion' => 'Exportation products to Asian market',
			'keywords' => 'andenes, glint global, glint, global',
		);
		echo view('templates/header_en',$data);
		echo view('home');
		echo view('templates/footer_en');
	}

	public function contact() {

		$data = array(
			'titulo' => 'Contact',
			'descripcion' => '',
			'keywords' => 'andenes, glint global, glint, global',
		);
		echo view('templates/header_en',$data);
		echo view('contact');
		echo view('templates/footer_en');
	}

	public function contacto_en (){
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

	public function quinoa (){

		$data = array(
			'titulo' => 'Quinoa',
			'descripcion' => 'superfoods, quinoa, kinoa, andenes quinoa, glintglobal quinoa, glintblobal kinoa',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('grains_seeds/quinoa');
		echo view('templates/footer_en');
	}

	public function amaranth (){

		$data = array(
			'titulo' => 'Amaranth',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('grains_seeds/amaranth');
		echo view('templates/footer_en');
	}

	public function kaniwa (){

		$data = array(
			'titulo' => 'Kaniwa',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('grains_seeds/kaniwa');
		echo view('templates/footer_en');
	}

	public function chia (){

		$data = array(
			'titulo' => 'Chia',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('grains_seeds/chia');
		echo view('templates/footer_en');
	}

	public function sesame (){

		$data = array(
			'titulo' => 'Sesame',
			'descripcion' => 'superfoods, sesame, andenes sesame, glintglobal sesame',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('grains_seeds/sesame');
		echo view('templates/footer_en');
	}

	public function goldenberries (){

		$data = array(
			'titulo' => 'Golden Berries',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('fruits/goldenberries');
		echo view('templates/footer_en');
	}

	public function camucamu (){

		$data = array(
			'titulo' => 'Camu Camu',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('fruits/camucamu');
		echo view('templates/footer_en');
	}

	public function acai (){

		$data = array(
			'titulo' => 'Acai',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('fruits/acai');
		echo view('templates/footer_en');
	}

	public function lucuma (){

		$data = array(
			'titulo' => 'Lúcuma',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('fruits/lucuma');
		echo view('templates/footer_en');
	}

	public function blueblerries (){

		$data = array(
			'titulo' => 'blueberries',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('fruits/blueberries');
		echo view('templates/footer_en');
	}

	public function cacao (){

		$data = array(
			'titulo' => 'Cacao',
			'descripcion' => 'superfoods, cacao, andenes cacao, glintglobal cacao, cacaopower, cacao powder, cowder, cacao',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('cacaocoffe/cacao');
		echo view('templates/footer_en');
	}

	public function coffee (){

		$data = array(
			'titulo' => 'Coffee',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('cacaocoffe/coffee');
		echo view('templates/footer_en');
	}

	public function ginger (){

		$data = array(
			'titulo' => 'Ginger',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('roots/ginger');
		echo view('templates/footer_en');
	}

	public function maca (){

		$data = array(
			'titulo' => 'Maca',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('roots/maca');
		echo view('templates/footer_en');
	}

	public function yacon (){

		$data = array(
			'titulo' => 'Yacon',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('roots/yacon');
		echo view('templates/footer_en');
	}

	public function amazon_nuts (){

		$data = array(
			'titulo' => 'Amazon Nuts',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('nuts/amazon_nuts');
		echo view('templates/footer_en');
	}

	public function walnuts (){

		$data = array(
			'titulo' => 'Walnuts',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('nuts/walnuts');
		echo view('templates/footer_en');
	}

	public function pecans (){

		$data = array(
			'titulo' => 'Pecans',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('nuts/pecans');
		echo view('templates/footer_en');
	}

	public function sacha_inchi (){

		$data = array(
			'titulo' => 'Sacha Inchi',
			'descripcion' => 'superfoods, sacha inchi, sachainchi, andenes sacha inchi, glintglobal sachainchi',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('nuts/sacha_inchi');
		echo view('templates/footer_en');
	}

	public function almonds (){

		$data = array(
			'titulo' => 'Almonds',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('nuts/almonds');
		echo view('templates/footer_en');
	}

	public function bee_polen (){

		$data = array(
			'titulo' => 'Bee Polen',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('floral_plants/bee_polen');
		echo view('templates/footer_en');
	}

	public function honey_bee (){

		$data = array(
			'titulo' => 'Honey Bee',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('floral_plants/honey_bee');
		echo view('templates/footer_en');
	}

	public function panela (){

		$data = array(
			'titulo' => 'Panela',
			'descripcion' => '',
			'keywords' => '',
		);
		echo view('templates/header_en',$data);
		echo view('floral_plants/panela');
		echo view('templates/footer_en');
	}

	public function andean_porcini (){

			$data = array(
				'titulo' => 'Andean Porcini',
				'descripcion' => '',
				'keywords' => '',
			);
		echo view('templates/header_en',$data);
		echo view('floral_plants/andean_porcini');
		echo view('templates/footer_en');
	}

}
