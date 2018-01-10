<?php
	// include'../../config.php';
	abstract class Database{
		public $db;
		public function __construct()
			{
				$this->db = new mysqli(HOSTNAME,USERNAME,PASSWORD,DBNAME);
				if (!$this->db) 
						{
							echo "Datbase not connected";
						}		
			}
	}

?>