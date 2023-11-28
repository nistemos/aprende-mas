<?php 
	/**
	 * 
	 */
	class Amdu{
		
		function __construct(argument)
		{
			# code...
		}
	    /**
	     * @return mixed
	     */
	    public function getAMDU01()
	    {
	        return $this->AMDU01;
	    }

	    /**
	     * @param mixed $AMDU01
	     *
	     * @return self
	     */
	    public function setAMDU01($AMDU01)
	    {
	        $this->AMDU01 = $AMDU01;
	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMDU02()
	    {
	        return $this->AMDU02;
	    }

	    /**
	     * @param mixed $AMDU02
	     *
	     * @return self
	     */
	    public function setAMDU02($AMDU02)
	    {
	        $this->AMDU02 = $AMDU02;
	        return $this;
	    }
	    private $AMDU01;
		private $AMDU02;
	}
?>