<?php   
class Database
{	
	private $connection = null;
	private $results = array();
	private $host = "localhost";
	private $port = 3306;
	private $db = "project";
	private $user = "root";
	private $password = "";
	private $db_prefix = "";

	function __construct() {
		$this->connection = $this->connect($this->host, $this->user, $this->password, $this->db, $this->port);
		$this->query("SET NAMES 'utf8'");
	}

	function insertRows($table, $data) {
		$cnt_data = count($data);
		$mysql_fields = array();
		$mysql_values = array();

		if($cnt_data) {
			foreach($data as $key => $value) {
				$mysql_fields[] = "`".$key."`";
				$mysql_values[] = "'".$this->prepareSqlData($value)."'";	
			}

			$q = "INSERT INTO `".$this->db_prefix.$table."`(".implode(",", $mysql_fields).") VALUES(".implode(",", $mysql_values).")";
			$result = $this->query($q);
		}
	}

	function updateRows($table, $data, $where_data = array(), $glue = "AND") {
		$cnt_data = count($data);
		$mysql_data = array();
		$clause = "";

		if($cnt_data) {
			foreach($data as $key => $value) {
				$mysql_data[] = "`".$key."` = '".$this->prepareSqlData($value)."'";
			}

			$cnt_where_data = count($where_data);

			if($cnt_where_data) {
				$where = array();

				foreach ($where_data as $key => $value) {
					$where[] = "`".$key."` ".$value;
				}

				$clause = " WHERE ".implode(" ".$glue." ", $where);	
			}
		
		$q = "UPDATE `".$this->db_prefix.$table."` SET ".implode(",", $mysql_data).$clause;
		$result = $this->query($q);
		}
	}

	function removeRows($table, $data, $glue = "AND") {
		$cnt_data = count($data);
		$clause = "";
		
		if($cnt_data) {
			$where = array();

			foreach ($data as $key => $value) {
				$where[] = "`".$key."` ".$value;
			}

			$clause = " WHERE ".implode(" ".$glue." ", $where);
		}

		$q = "DELETE FROM `".$this->db_prefix.$table."`".$clause;
		$result = $this->query($q);
	}

	function getRows($table, $fields = "*", $data = array(), $glue = "AND", $orderBy = null, $limit = null) {
		$cnt_data = count($data);
		$clause = "";
		$this->results = array();

		if(is_array($fields)) {
			$fields = implode(",", array_map(function($value) {return "`".$value."`";}, $fields));
		}
		
		if($cnt_data) {
			$where = array();

			foreach ($data as $key => $value) {
				$where[] = "`".$key."` ".$value;
			}

			$clause = " WHERE ".implode(" ".$glue." ", $where);
		}

		if($orderBy) {
			$orderBy = " ORDER BY ".$orderBy;	
		}

		if($limit) {
			$limit = " LIMIT ".$limit;
		}

		$q = "SELECT ".$fields." FROM `".$this->db_prefix.$table."`".$clause.$orderBy.$limit;
		$result = $this->query($q);

		while($row = $this->fetchRows($result)) {
			$this->results[] = $row;	
		}

		$this->freeResult($result);
		return $this->results;
	}

	function getRow($table, $fields = "*", $data = array(), $glue = "AND", $orderBy = null) {
		$this->getRows($table, $fields, $data, $glue, $orderBy, 1);

		return (!empty($this->results[0]) ? $this->results[0] : array());
	}

	function getResults($sql) {
		$this->results = array();
		
		$result = $this->query($sql);

		while($row = $this->fetchRows($result)) {
			$this->results[] = $row;	
		}

		$this->freeResult($result);
		return $this->results;
	}

	/* MySQL functions */
	private function connect($host, $user, $password, $db, $port) {
		return mysqli_connect($host, $user, $password, $db, $port);
	}

	function query($sql) {
		$query = mysqli_query($this->connection, $sql);
		if(!$query) {
			die(htmlspecialchars(mysqli_error($this->connection)));
		}
		return $query;	
	}

	private function fetchRows($result) {
		return mysqli_fetch_assoc($result);
	}
	
	function numRows($result) {
		return mysqli_num_rows($result);
	}

	function prepareSqlData($value) {
		return mysqli_real_escape_string($this->connection, $value);
	}

	function getLastInsertedId() {
		return mysqli_insert_id($this->connection);
	}

	function freeResult($result) {
		mysqli_free_result($result);
	}

	function close() {
		mysqli_close($this->connection);
	}
}
?>