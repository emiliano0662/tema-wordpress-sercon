<?php class principalController
{
	static function manage_requires($rut_absolut){

		require_once('mailer/controlador.php');

		$dir = $_REQUEST['action'];

		if ($dir=='mailer') 
		{

			if ($dir['nombre'] != null != null && $dir['correo'] != null && $dir['telefono'] != null && $dir['mensaje'] != null) {
				
				$data = array('nombre'=>$dir['nombre'], 'correo' => $dir['correo'], 'telefono' => $dir['telefono'], 'mensaje' => $dir['mensaje']);
				
				$dat_admin = array('emiliano0662@hotmail.com','GMP Solutions');
				
				$dat_client = array($dir['correo'],$dir['nombre']);

				principal_send($dat_client,$dat_admin,'Consulta www.gmpsolutions.co',$data,__DIR__.'/mailer/plantilla-admin.php');
				principal_send($dat_admin,$dat_client,'GMP Solutions',$data,__DIR__.'/mailer/plantilla.php');

				echo 3;
			}
			else
			{
				echo 2;
			}

		} else {
			
			echo 1;
		}
	}
}
?>