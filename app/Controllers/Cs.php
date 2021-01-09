<?php namespace App\Controllers;

class Cs extends BaseController {

	public function index() {
			$data = array(
				'titulo' => 'Andenes',
				'descripcion' => 'Exportation products to Asian market',
				'keywords' => 'andenes, glint global, glint, global',
			);

		echo view('templates/header_cs',$data);
		echo view('inicio_cs');
		echo view('templates/footer_cs');
	}

	public function contacto() {

			$data = array(
				'titulo' => 'Contacto',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);

		echo view('templates/header_cs',$data);
		echo view('contacto_cs');
		echo view('templates/footer_cs');
	}

	public function contacto_cs (){
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
				'titulo' => '藜麥',
				'descripcion' => '',
				'keywords' => '',
			);

		echo view('templates/header_cs',$data);
		echo view('granos_semillas_cs/quinua');
		echo view('templates/footer_cs');
	}

	public function kiwicha (){
			$data = array(
				'titulo' => '尾穗莧',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('granos_semillas_cs/kiwicha');
		echo view('templates/footer_cs');
	}

	public function canihua (){
			$data = array(
				'titulo' => '小藜麥',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('granos_semillas_cs/canihua');
		echo view('templates/footer_cs');
	}

	public function chia (){
			$data = array(
				'titulo' => '奇亞籽',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('granos_semillas_cs/chia');
		echo view('templates/footer_cs');
	}

	public function sesamo (){
			$data = array(
				'titulo' => '芝麻',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('granos_semillas_cs/sesamo');
		echo view('templates/footer_cs');
	}

	public function aguaymanto (){
			$data = array(
				'titulo' => '黃金果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutas_cs/aguaymanto');
		echo view('templates/footer_cs');
	}

	public function camucamu (){
			$data = array(
				'titulo' => '卡姆果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutas_cs/camucamu');
		echo view('templates/footer_cs');
	}

	public function acai (){
			$data = array(
				'titulo' => '阿薩伊莓果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutas_cs/acai');
		echo view('templates/footer_cs');
	}

	public function lucuma (){
			$data = array(
				'titulo' => '蛋黃果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutas_cs/lucuma');
		echo view('templates/footer_cs');
	}

	public function arandanos (){
			$data = array(
				'titulo' => '藍莓',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutas_cs/arandanos');
		echo view('templates/footer_cs');
	}

	public function cacao (){
			$data = array(
				'titulo' => '可可',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('cacaocafe_cs/cacao');
		echo view('templates/footer_cs');
	}

	public function cafe (){
			$data = array(
				'titulo' => '咖啡',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('cacaocafe_cs/cafe');
		echo view('templates/footer_cs');
	}

	public function jengibre (){
			$data = array(
				'titulo' => '薑',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('tuberculos_cs/jengibre');
		echo view('templates/footer_cs');
	}

	public function maca (){
			$data = array(
				'titulo' => '瑪卡',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('tuberculos_cs/maca');
		echo view('templates/footer_cs');
	}

	public function yacon (){
			$data = array(
				'titulo' => '雪蓮果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('tuberculos_cs/yacon');
		echo view('templates/footer_cs');
	}

	public function nuez_de_brasil (){
			$data = array(
				'titulo' => '巴西堅果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutos_secos_cs/nuez');
		echo view('templates/footer_cs');
	}

	public function nuez_nogal (){
			$data = array(
				'titulo' => '核桃',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutos_secos_cs/nuez_nogal');
		echo view('templates/footer_cs');
	}

	public function pecanas (){
			$data = array(
				'titulo' => '胡桃',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutos_secos_cs/pecanas');
		echo view('templates/footer_cs');
	}

	public function sacha_inchi (){
			$data = array(
				'titulo' => '印加花生果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutos_secos_cs/sacha_inchi');
		echo view('templates/footer_cs');
	}

	public function almendras (){
			$data = array(
				'titulo' => '杏仁',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('frutos_secos_cs/almendras');
		echo view('templates/footer_cs');
	}

	public function polen (){
			$data = array(
				'titulo' => '花粉',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('florales_plantas_cs/polen');
		echo view('templates/footer_cs');
	}

	public function miel (){
			$data = array(
				'titulo' => '蜂蜜',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('florales_plantas_cs/miel');
		echo view('templates/footer_cs');
	}

	public function panela (){
			$data = array(
				'titulo' => '黑糖',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('florales_plantas_cs/panela');
		echo view('templates/footer_cs');
	}

	public function andean_porcini (){
			$data = array(
				'titulo' => '牛肝菌',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cs',$data);
		echo view('florales_plantas_cs/andean_porcini');
		echo view('templates/footer_cs');
	}

}
