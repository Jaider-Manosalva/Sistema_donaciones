<?php 

	class DonatariosModel extends Mysql
	{		
		public function __construct()
		{
			parent::__construct();
		}	

		public function selectDonatarios()
		{
			$sql = "SELECT n.Documento AS 'documentoNiño',
			n.Nombre AS 'nombresNiño',
			p.Documento AS 'documentoPadre',
			p.Nombre AS 'nombresPadre'
      FROM Niño n
      INNER JOIN Persona p
			ON n.Persona_Documento = p.Documento;";
					    
      $request = $this->select_all($sql);
			return $request;
		}
		
		public function selectDonatario(int $idpersona){
			
			$this->intIdUsuario = $idpersona;
			$sql = " SELECT Niño.Documento AS DocumentoNiño, 
			Niño.Nombre AS NombreNiño, 
			DATE_FORMAT(Niño.FechaNacimiento, '%d-%m-%Y') AS Nacimiento, 
			Niño.Edad As Edad, 
			Niño.CandidatoPatrocinio AS Patrocinio, 
			Niño.AutorizaciónPublicación AS Autorizacion, 
			Niño.Persona_Documento AS DocumentoPadre, 
			Persona.Nombre AS NombrePadre, 
			Persona.Dirección AS DirecciónPadre, 
			Persona.Correo AS CorreoPadre, 
			Persona.EstadoCivil AS EstadoCivilPadre
      FROM Niño
      INNER JOIN Persona ON Niño.Persona_Documento = Persona.Documento
      WHERE Niño.Documento = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		
  }
?>