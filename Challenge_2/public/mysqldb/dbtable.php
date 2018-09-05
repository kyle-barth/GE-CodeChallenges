<?php
	class DatabaseTable {
		private $table;
		private $pdo;
		public function __construct($pdo, $table) {
			$this->pdo = $pdo;
			$this->table = $table;
		}
		function search($value) {
			$query = "SELECT * FROM " . $this->table . " ". $value;

	    	$stmt = $this->pdo->prepare($query);
			$stmt->execute();

			return $stmt;
	  	}
		function delete($field, $value) {
			$query = 'DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :value';
			$stmt = $this->pdo->prepare($query);
			$criteria = [
				'value' => $value
			];
            $stmt->execute($criteria);
            
			return $stmt->fetch();
		}
		function insert($record) {
			$keys = array_keys($record);
			$values = implode(', ', $keys);
			$valuesWithColon = implode('\', \'', $record);
			$query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (\'' . $valuesWithColon . '\')';

            $stmt = $this->pdo->prepare($query);
			$stmt->execute();
            
			return $stmt->fetch();
		}
		function update($record, $primaryKey, $primaryKeyValue) {
			$keys = array_keys($record);
			$insertData = '';
			for ($i=0; $i < count($keys); $i++) {
				$insertData .= '`' . $keys[$i] . '` = \'' . $record[$keys[$i]] . '\', ';
			}
			$insertData = rtrim($insertData, ", ");

            $query = 'UPDATE ' . $this->table . ' SET ' . $insertData . ' WHERE `' . $primaryKey . '` = ' . $primaryKeyValue;
            $stmt = $this->pdo->prepare($query);
			$stmt->execute();

			return $stmt->fetch();
		}
	}
?>