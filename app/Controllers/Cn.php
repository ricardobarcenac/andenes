<?php namespace App\Controllers;

class Cn extends BaseController {

	public function index() {
			$data = array(
				'titulo' => 'Andenes',
				'descripcion' => 'Exportation products to Asian market',
				'keywords' => 'andenes, glint global, glint, global',
			);

		echo view('templates/header_cn',$data);
		echo view('inicio_cn');
		echo view('templates/footer_cn');
	}

	public function contacto() {

			$data = array(
				'titulo' => 'Contacto',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);

		echo view('templates/header_cn',$data);
		echo view('contacto_cn');
		echo view('templates/footer_cn');
	}

	public function contacto_cn (){
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

		echo view('templates/header_cn',$data);
		echo view('granos_semillas_cn/quinua');
		echo view('templates/footer_cn');
	}

	public function kiwicha (){
			$data = array(
				'titulo' => '尾穗莧',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('granos_semillas_cn/kiwicha');
		echo view('templates/footer_cn');
	}

	public function canihua (){
			$data = array(
				'titulo' => '小藜麥',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('granos_semillas_cn/canihua');
		echo view('templates/footer_cn');
	}

	public function chia (){
			$data = array(
				'titulo' => '奇亞籽',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('granos_semillas_cn/chia');
		echo view('templates/footer_cn');
	}

	public function sesamo (){
			$data = array(
				'titulo' => '芝麻',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('granos_semillas_cn/sesamo');
		echo view('templates/footer_cn');
	}

	public function aguaymanto (){
			$data = array(
				'titulo' => '黃金果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutas_cn/aguaymanto');
		echo view('templates/footer_cn');
	}

	public function camucamu (){
			$data = array(
				'titulo' => '卡姆果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutas_cn/camucamu');
		echo view('templates/footer_cn');
	}

	public function acai (){
			$data = array(
				'titulo' => '阿薩伊莓果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutas_cn/acai');
		echo view('templates/footer_cn');
	}

	public function lucuma (){
			$data = array(
				'titulo' => '蛋黃果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutas_cn/lucuma');
		echo view('templates/footer_cn');
	}

	public function arandanos (){
			$data = array(
				'titulo' => '藍莓',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutas_cn/arandanos');
		echo view('templates/footer_cn');
	}

	public function cacao (){
			$data = array(
				'titulo' => '可可',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('cacaocafe_cn/cacao');
		echo view('templates/footer_cn');
	}

	public function cafe (){
			$data = array(
				'titulo' => '咖啡',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('cacaocafe_cn/cafe');
		echo view('templates/footer_cn');
	}

	public function jengibre (){
			$data = array(
				'titulo' => '薑',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('tuberculos_cn/jengibre');
		echo view('templates/footer_cn');
	}

	public function maca (){
			$data = array(
				'titulo' => '瑪卡',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('tuberculos_cn/maca');
		echo view('templates/footer_cn');
	}

	public function yacon (){
			$data = array(
				'titulo' => '雪蓮果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('tuberculos_cn/yacon');
		echo view('templates/footer_cn');
	}

	public function nuez_de_brasil (){
			$data = array(
				'titulo' => '巴西堅果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutos_secos_cn/nuez');
		echo view('templates/footer_cn');
	}

	public function nuez_nogal (){
			$data = array(
				'titulo' => '核桃',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutos_secos_cn/nuez_nogal');
		echo view('templates/footer_cn');
	}

	public function pecanas (){
			$data = array(
				'titulo' => '胡桃',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutos_secos_cn/pecanas');
		echo view('templates/footer_cn');
	}

	public function sacha_inchi (){
			$data = array(
				'titulo' => '印加花生果',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutos_secos_cn/sacha_inchi');
		echo view('templates/footer_cn');
	}

	public function almendras (){
			$data = array(
				'titulo' => '杏仁',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('frutos_secos_cn/almendras');
		echo view('templates/footer_cn');
	}

	public function polen (){
			$data = array(
				'titulo' => '花粉',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('florales_plantas_cn/polen');
		echo view('templates/footer_cn');
	}

	public function miel (){
			$data = array(
				'titulo' => '蜂蜜',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('florales_plantas_cn/miel');
		echo view('templates/footer_cn');
	}

	public function panela (){
			$data = array(
				'titulo' => '黑糖',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('florales_plantas_cn/panela');
		echo view('templates/footer_cn');
	}

	public function andean_porcini (){
			$data = array(
				'titulo' => '牛肝菌',
				'descripcion' => '',
				'keywords' => 'andenes, glint global, glint, global',
			);
		echo view('templates/header_cn',$data);
		echo view('florales_plantas_cn/andean_porcini');
		echo view('templates/footer_cn');
	}

}
