<?php
		$data = file_get_contents("php://input");
 	
 		// Cria um stdClass
		$objData = json_decode($data);

		// Como objData passa a ser um objeto, vamos capturar apenas o parametro que queremos
		$search = $objData->data;	

	    // Conecta no banco
	    $con = new mysqli("localhost", "root", "", "lccb");
			$con->set_charset("utf8");
	    // Prepara o select. Limito para 3 resultado, para não encher a tela de autoajuda
	    $sql = 'SELECT * FROM cidade WHERE nome_cidade LIKE "%'.$search.'%" LIMIT 0,3';

	    if ($result = mysqli_query($con,$sql)) {

	        /* percorre os resultados */
	        while ($obj = mysqli_fetch_object($result)) {
	            $json[] = array('id' => $obj->id_cidade, 'nome' => $obj->nome_cidade); 
	        }

	        $result->close();

	        echo json_encode($json);
	    }

	    /* Fecha conexão */
	    mysqli_close($con);
	?>