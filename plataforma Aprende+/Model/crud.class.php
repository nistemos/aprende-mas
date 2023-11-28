<?php 
	/**
	 * 
	 */

	require_once 'conexion.class.php';
	require_once 'amu.class.php';
	require_once 'icrud.php';

	class Crud implements icrud 
	{
		//inyeccion de dependencias "function __construct(Amu $user)"
		function __construct(Amu $user)
		{
			$this->usuario = $user;
			$this->conection = conexion::singleton_conexion();
			ini_set( 'display_errors', 1 );
		    error_reporting( E_ALL );
		}	
	    /**
	     * @return mixed
	     */
	    function getCreate()
	    {
	        return $this->create;
	    }

	    /**
	     * @param mixed $create
	     *
	     * @return self
	     */
	    function setCreate($datos = array()){
	    	try {
	    		#print( "<pre>".print_r($datos, true)."</pre>");
	    		# Cargamos cada dato a su respectivo metodo para validarlo
	    		unset($datos['Btn_action']);
	    		$this->usuario->setAMU01($datos['nombre'][0]);
	    		$this->usuario->setAMU02($datos['nombre'][1]);
	    		$this->usuario->setAMU03($datos['apellido'][0]);
	    		$this->usuario->setAMU04($datos['apellido'][1]);
	    		$this->usuario->setAMU05($datos['correo']);
	    		$this->usuario->setAMU06($datos['telefono']);
	    		$this->usuario->setAMU07($datos['password']);
	    		$this->usuario->setAMU08($datos['fena']);
	    		//-----------------------------------------------------
	    		//cargamos los datos en variables
	    		$this->AMU01 = $this->usuario->getAMU01();
				$this->AMU02 = 	$this->usuario->getAMU02();
				$this->AMU03 = $this->usuario->getAMU03();
				$this->AMU04 = $this->usuario->getAMU04();
				$this->AMU05 = $this->usuario->getAMU05();
				$this->AMU06 = $this->usuario->getAMU06();
				$this->AMU07 = $this->usuario->getAMU07();
				$this->AMU08 = $this->usuario->getAMU08();
	    		//----------------------------------------------------
	    		//Validamos que los Campos de texto no esten vacios
	    		$this->aux = ($this->AMU01 != "" && ($this->AMU02 != "" || $this->AMU02 == "") && $this->AMU03 != "" && $this->AMU04 != "" && $this->AMU05 != "" && $this->AMU06 != "" && ($this->AMU07 != "" && password_verify($datos['cpassword'], $this->AMU07)) && $this->AMU08 != "" ) ? true : false;
	    		//---------------------------------------------------------------------
	    		if ($this->aux === true) {
	    		//Es una consulta preparada $query = $this->conection->conPrepare("CALL nombreprocedimientoalmacenado")
	    			$query = $this->conection->conPrepare("CALL CreateAMU(?,?,?,?,?,?,?,?)");
	    			//Pasamos los parametros a la consulta
	    				$query->bindParam(1, $this->AMU01);
						$query->bindParam(2, $this->AMU02);
						$query->bindParam(3, $this->AMU03);
						$query->bindParam(4, $this->AMU04);
						$query->bindParam(5, $this->AMU05);
						$query->bindParam(6, $this->AMU06);
						$query->bindParam(7, $this->AMU07);
						$query->bindParam(8, $this->AMU08);
					//-------------------------------------------------------
					//Ejecutamos la consulta con $query->execute(), si se ejecuta cambia la variable crate a true
						$this->create = ($query->execute()) ? true : false;
					//------------------------------------------------------
						//Envio correo de confirmación
						/*$this->usuario->setTo($this->AMU05);
						#$this->usuario->setSubject();
						$html = array();
						$html[] = "<p>Prueba del cuerpo del correo</p>";
						$this->usuario->setMessage($html);
						$this->usuario->setHeaders("From: " . $this->usuario->getFrom(). "\r\n");
						mail($this->usuario->getTo(),$this->usuario->getSubject(),$this->usuario->setMessage(), $this->usuario->getHeaders());
						echo "El correo de confirmación a sido enviado";*/
						//---------------------------------------------------
	    		//--------------------------------------------------------------------
	    		}
	    	} catch (PDOException $e) {
	    		print "Error!: " . $e->getMessage();
	    	}
    		
        }

	    /**
	     * @return mixed
	     */
	    function getRead()
	    {
	        return $this->read;
	    }

	    /**
	     * @param mixed $read
	     *
	     * @return self
	     */
	    function setRead($datos = array())
	    {
	        $this->read = $read;
	    }

	    /**
	     * @return mixed
	     */
	    function getUpdate()
	    {
	        return $this->update;
	    }

	    /**
	     * @param mixed $update
	     *
	     * @return self
	     */
	    function setUpdate($datos = array())
	    {
	        $this->update = $update;
	    }

	    /**
	     * @return mixed
	     */
	    function getDelete()
	    {
	        return $this->delete;
	    }

	    /**
	     * @param mixed $delete
	     *
	     * @return self
	     */
	    function setDelete($datos = array())
	    {
	        $this->delete = $delete;
	    }
	   /* public function __toString()
	    {
	    	# code...
	    	return "From: ".$this->usuario->getHeaders();
	    }*/
	    #Variables de la clase
	    private $create = false;
		private $read = false;
		private $update = false;
		private $delete = false;
		private $usuario;
		private $conection;
		private $aux;
		#-------------------------------------------
		#variables para la consulta preparada
		private $AMU01;
		private $AMU02;	
		private $AMU03;
		private $AMU04;
		private $AMU05;
		private $AMU06;
		private $AMU07;
		private $AMU08;
		#-----------------------------------------
	}
?>