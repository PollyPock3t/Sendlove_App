<?php

class dbCon{

	// connection to my database

	private $db;
	private $dbName 		= 'sendLove';
	private $username		= 'PaullineMallea';
	private $password		= 'Pm1051891051';
	private $host			= 'localhost';

	public function __construct(){
		$this->db = new mysqli( $this->username, $this->password, $this->dbName);


		if (!$this->db) {
		    die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connected successfully";
		}

	// 	echo "test";
	}

$sql = "INSERT INTO todotasks(taskID, taskName, taskStatus, dateCreated)
VALUES ('Null', 'task', 'done', 'Null')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

};


?>

<!-- // return $this->db;
// 	}
// 	public function insertRecord( $sql ){
// 		return $this->db->query( $sql );
// 	}
// 	public function fetchRecord( $sql ){
// 		$r = $this->db->query( $sql );
// 		$n = $r->num_rows;
// 		$result = array();
// 		for( $i = 0; $i < $n; $i++){
// 			$row = mysqli_fetch_array($r);
// 			array_push( $result, $row['taskName'] );
// 		}
// 		return $result;
// 	}
// }



 // // select DB connection
// 	public function getDb() {
// 		return $this->db;
// 	}
// // closed BN connection
// 	public function closeDb(){
// 		$this->db->close();
// 	}
// // pull records
// 	public function pullRecord($tID) {
// 		$where 				= array ();
// 		$result 			= $this->sqlExecute('select',$tID,$where);
// 		$retArr				=array();
// 		while ($row = result->fetch_assoc()){
// 			$retArr[]=$row
// 		}
// 	return $retArr;
// 	}
// // insert record into database table
// 	public function insertRecord($table,$fields,$values){
// 		//Clean up incoming fields from malicious scripts
// 		for ($i = 0; $i<count($fields); $i++){$fields[$i]=cleanUp($fields[i]);}
// 	}

// }  -->

