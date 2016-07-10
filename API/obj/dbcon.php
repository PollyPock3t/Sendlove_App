<?php

class dbCon{

	// connection to my database

	private $db;
	private $dbName 		= 'sendLove';
	private $username		= 'root';
	private $password		= '';
	private $host			= 'localhost';

	public function _construct (){
		$this->db = new mysqli( $this->username, $this->password, $this->dbName);
	}

// select DB connection
	public function getDb() {
		return $this->db;
	}
// closed BN connection
	public function closeDb(){
		$this->db->close();
	}
// pull records
	public function pullRecord($tID) {
		$where 				= array ();
		$result 			= $this->sqlExecute('select',$tID,$where);
		$retArr				=array();
		while ($row = result->fetch_assoc()){
			$retArr[]=$row
		}
	return $retArr;
	}
// insert record into database table
	public function insertRecord($table,$fields,$values){
		//Clean up incoming fields from malicious scripts
		for ($i = 0; $i<count($fields); $i++){$fields[$i]=cleanUp($fields[i]);}
	}

}


?>