<?php
 class database extends PDO{
     public function __construct(){
        $connect = 'mysql:dbname=shopbangiay; host=localhost; charset=utf8';
		$user='root';
		$pass='';
        
        parent::__construct($connect,$user,$pass);

        //  $db = new PDO($connect, $user,$pass);
     }
     public function select($sql , $data = array(), $fetchstyle = PDO::FETCH_ASSOC){
        // $sql = "SELECT * FROM $table";
        $statement = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindParam($key,$value);
            # code...
        }
        $statement->execute();
        return $statement->fetchAll($fetchstyle);

     }
     public function them($table,$data){

		$keys = implode(",", array_keys($data));
		$values = ":" .implode(", :",array_keys($data));

		$sql = "INSERT INTO $table($keys) VALUES($values)";
		$statement = $this->prepare($sql);

		foreach($data as $key => $value){
			$statement->bindValue(":$key",$value);
		}

		return $statement->execute();
	}
    public function capnhat($table,$data,$cond){
		$updateKeys = NULL;

		foreach($data as $key => $value){
			$updateKeys .= "$key=:$key,";
		}

		$updateKeys = rtrim($updateKeys,",");

		$sql = "UPDATE $table SET $updateKeys WHERE $cond";
		$statement = $this->prepare($sql);

		foreach($data as $key => $value){
			$statement->bindValue(":$key",$value);
		}
		return $statement->execute();
	}
    public function xoa($table,$cond,$limit = 1){
		$sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
		return $this->exec($sql);
	}
	public function affectedRows($sql,$email,$matkhau){
		$statement = $this->prepare($sql);
		$statement->execute(array($email,$matkhau));
		return $statement->rowCount();
	}
	public function selectUser($sql,$email,$matkhau){
		$statement = $this->prepare($sql);
		$statement->execute(array($email,$matkhau));
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
     
 }

?>