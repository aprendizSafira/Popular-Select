<?php
class homeController extends controller {

	public function index() { 
		$dados = array();

		$modulos = new Modulos();

		$dados['modulos'] = $modulos->getList();
		
		$this->loadTemplete('home', $dados);
	}

	public function pegar_aulas() {

		if(isset($_POST['modulo'])) {
			//Pegue o id do modulo, ou seja, se é história, português ou matemátiva
			$id_modulo = $_POST['modulo'];

			$aulas = new Aulas();
			$array = array();

			$array = $aulas->getAulas($id_modulo);

			//Transformando array em json
			echo json_encode($array);
			exit;

		}
	}
}