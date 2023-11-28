<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		# code...
		require_once '../codear.php';
		$Coded = array();
		$cod = $_GET['cod'];
		$link =  get_link($cod); 
		echo $link;
		print( "<pre>".print_r($link, true)."</pre>");
		/*switch ($coded[0]) {
			case 405:
				# code...
				echo "Hola, eres el codigo ".$coded[0];
				break;
			
			default:
				# code...
				header("Location: ../View",TRUE,301);
				break;
		}*/
		#https://aprendemassyh.com/Controller/Controlleremail.php?284a2g84eba8d31a74771
	} else {
		# code...
	}

?>