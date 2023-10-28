<?php 

	class Donatarios extends Controllers {
		public function __construct()
		{
			parent::__construct(); 
		} 
  
		public function Donatarios() 
		{
			$data['page_tag'] = "Donatarios";
			$data['page_title'] = "DONATARIOS";
			$data['page_name'] = "donatarios";
			$data['page_functions_js'] = "function.js";
			$this->views->getView($this,"donatarios",$data);
		}

		public function getDonatarios()
		{
			$arrData = $this->model->selectDonatarios();
			
			for ($i=0; $i < count($arrData); $i++) 
			{
			  $arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-info btn-sm btnViewDonatario" onClick="fntViewDonatario('.$arrData[$i]['documentoNiño'].')" title="Ver Donatario"><i class="far fa-eye"></i></button>
				<button class="btn btn-primary  btn-sm btnEditDonatario" onClick="fntEditDonatario('.$arrData[$i]['documentoNiño'].')" title="Editar Donatario"><i class="fas fa-pencil-alt"></i></button>
				<button class="btn btn-danger btn-sm btnDelDonatario" onClick="fntDelDonatario('.$arrData[$i]['documentoNiño'].')" title="Eliminar Donatario"><i class="far fa-trash-alt"></i></button>
				</div>';
			}
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}
		
		public function getDonatario(int $idpersona){
			
			$idusuario = intval($idpersona);
			if($idusuario > 0)
			{
				$arrData = $this->model->selectDonatario($idusuario);
				if(empty($arrData))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				} else {
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
?>