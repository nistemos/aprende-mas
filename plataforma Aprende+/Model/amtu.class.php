<?php 
	/**
	 * 
	 */
	class Amtu
	{
		//Este es el constructor de la clase
		function __construct()
		{
			# code...
		}
		//---------------------------------------
	    /**
	     * @return mixed
	     */
	    public function getAMTU02()
	    {
	        return $this->AMTU02;
	    }

	    /**
	     * @param mixed $AMTU02
	     *
	     * @return self
	     */
	    public function setAMTU02($AMTU02)
	    {
	        $this->AMTU02 = $AMTU02;

	        return $this;
	    }
    	private $AMTU01:
		private $AMTU02;
	}
?>