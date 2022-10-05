<?php	
	function bd(){
		try {
			$instance = new PDO('pgsql:host=localhost;dbname=crudweb;port=5432;user=postgres;password=Angelo741159963321');
            $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);/**/
            /*$conn = new PDO('mysql:host=localhost;dbname=projeto', 'root', 'usbw');
        	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
		} catch (PDOException $e) {
			print 'Problema ao acessar banco. <br>';
			print $e->getMessage();
		}
		return $instance;
	}
?>