<?php 
	/**
	 * Clase AMU, va a contener todos los datos de los usuarios, cuando se registran o se logean
	 */
	require_once 'sentemail.class.php';

	class Amu extends sentemail{
		
		function __construct()
		{
			# code...
		}
		
	    /**
	     * @return mixed
	     */
	    public function getAMU01()
	    {
	        return $this->AMU01;
	    }

	    /**
	     * @param mixed $AMU01
	     *
	     * @return self
	     */
	    public function setAMU01($AMU01)
	    {
	        $this->AMU01 = strtoupper($AMU01);
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU02()
	    {
	        return $this->AMU02;
	    }

	    /**
	     * @param mixed $AMU02
	     *
	     * @return self
	     */
	    public function setAMU02($AMU02)
	    {
	        $this->AMU02 = strtoupper($AMU02);
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU03()
	    {
	        return $this->AMU03;
	    }

	    /**
	     * @param mixed $AMU03
	     *
	     * @return self
	     */
	    public function setAMU03($AMU03)
	    {
	        $this->AMU03 = strtoupper($AMU03);
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU04()
	    {
	        return $this->AMU04;
	    }

	    /**
	     * @param mixed $AMU04
	     *
	     * @return self
	     */
	    public function setAMU04($AMU04)
	    {
	        $this->AMU04 = strtoupper($AMU04);
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU05()
	    {
	        return $this->AMU05;
	    }

	    /**
	     * @param mixed $AMU05
	     *
	     * @return self
	     */
	    public function setAMU05($AMU05)
	    {
	        $this->AMU05 = strtolower($AMU05);
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU06()
	    {
	        return $this->AMU06;
	    }

	    /**
	     * @param mixed $AMU06
	     *
	     * @return self
	     */
	    public function setAMU06($AMU06)
	    {
	    	if (is_numeric($AMU06)) {
	    		$this->AMU06 = $AMU06;
	    	}
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU07()
	    {
	        return $this->AMU07;
	    }

	    /**
	     * @param mixed $AMU07
	     *
	     * @return self
	     */
	    public function setAMU07($AMU07)
	    {
	    	#Encriptamos la clave
	    	$this->AMU07 = password_hash($AMU07, PASSWORD_DEFAULT);
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU08()
	    {
	        return $this->AMU08;
	    }

	    /**
	     * @param mixed $AMU08
	     *
	     * @return self
	     */
	    public function setAMU08($AMU08)
	    {
	    	#convertimos el calendario en un array para validarlo
	    	$this->aux = explode('-', $AMU08);
	    	$this->auxBol = (count($this->aux) == 3 && checkdate($this->aux[1], $this->aux[2], $this->aux[0])) ? true : false;
	    	if ($this->auxBol === true) {
	    		$this->AMU08 = implode("-", $this->aux);
	    	}
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMU11()
	    {
	        return $this->AMU11;
	    }

	    /**
	     * @param mixed $AMU11
	     *
	     * @return self
	     */
	    public function setAMU11($AMU11)
	    {
	        $this->AMU11 = $AMU11;
	    }

	    // variables privadas de la clase, representan los atributos de la entidad AMU
		private $AMU01;
		private $AMU02;	
		private $AMU03;
		private $AMU04;
		private $AMU05;
		private $AMU06;
		private $AMU07;
		private $AMU08;
		private $AMU11;	
		private $aux = array();
		private $auxBol = false;
	}
 ?>