<?php 
	/**
	 * 
	 */
	class Amcv
	{
		function __construct()
		{
			# code...
		}		
	    /**
	     * @return mixed
	     */
	    public function getAMCV01()
	    {
	        return $this->AMCV01;
	    }

	    /**
	     * @param mixed $AMCV01
	     *
	     * @return self
	     */
	    public function setAMCV01($AMCV01)
	    {
	        $this->AMCV01 = $AMCV01;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMCV02()
	    {
	        return $this->AMCV02;
	    }

	    /**
	     * @param mixed $AMCV02
	     *
	     * @return self
	     */
	    public function setAMCV02($AMCV02)
	    {
	        $this->AMCV02 = $AMCV02;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getAMCV03()
	    {
	        return $this->AMCV03;
	    }

	    /**
	     * @param mixed $AMCV03
	     *
	     * @return self
	     */
	    public function setAMCV03($AMCV03)
	    {
	        $this->AMCV03 = $AMCV03;

	        return $this;
	    }
	    
	    private $AMCV01;
		private $AMCV02;
		private $AMCV03;
	}
?>