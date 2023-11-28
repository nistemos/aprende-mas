<?php 
	interface icrud{
		function setCreate($datos = array());
		function getCreate();
		function setRead($datos = array());
		function getRead();
		function setUpdate($datos = array());
		function getUpdate();
		function setDelete($datos = array());
		function getDelete();
	}
 ?>