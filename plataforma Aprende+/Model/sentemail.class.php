<?php 
	/**
	 * 
	 */
	class sentemail
	{
		private $from = "contacto@aprendemassyh.com"; #"contacto@aprendemassyh.com";
		private $ttoo; #"nisteemos@gmail.com";
		private $subject; #"Activacion de usuario en Aprende más";
		private $message; #Cuerpo del mensaje, puede ser un html
		private $headers; #Cabecera

		
		function __construct()
		{
			ini_set( 'display_errors', 1 );
		    error_reporting( E_ALL );
		    echo "El mensaje de email a sido enviado";
		}
	    /**
	     * @return mixed
	     */
	    public function getFrom()
	    {
	        return $this->from;
	    }

	    /**
	     * @param mixed $from
	     *
	     * @return self
	     */
	    public function setFrom($from)
	    {
	        $this->from = $from;
	    }

	    /**
	     * @return mixed
	     */
	    public function getTo()
	    {
	        return $this->to;
	    }

	    /**
	     * @param mixed $to
	     *
	     * @return self
	     */
	    public function setTo($to)
	    {
	    	$this->to = $to;	        
	    }

	    /**
	     * @return mixed
	     */
	    public function getSubject()
	    {
	        return $this->subject;
	    }

	    /**
	     * @param mixed $subject
	     *
	     * @return self
	     */
	    public function setSubject($subject)
	    {
	        $this->subject = $subject;
	    }

	    /**
	     * @return mixed
	     */
	    public function getMessage()
	    {
	        return $this->message;
	    }

	    /**
	     * @param mixed $message
	     *
	     * @return self
	     */
	    public function setMessage($message = array())
	    {
	    	foreach ($message as $key => $value) {
	    		# code...
	    		$this->message .= $value."<br>";
	    	}
	        
	    }

	    /**
	     * @return mixed
	     */
	    public function getHeaders()
	    {
	        return $this->headers;
	    }

	    /**
	     * @param mixed $headers
	     *
	     * @return self
	     */
	    public function setHeaders($headers)
	    {
	    	$this->headers = $headers;
	        
	    }
	    public function __toString()
	    {
	    	return "Este es el retorno de la clase sentemail";
	    }
    	//Esto es un patron de Diseño SINGLETON
		/*public static function singleton_conexion()
		{

			if (!isset(self::$instancia)) {
				$miclase = __ClASS__;
				self::$instancia = new $miclase;
			}
			return self::$instancia;
		}*/
	}
?>