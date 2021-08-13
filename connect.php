<?php
class Database
{
	private $host ="localhost";
	private $username ="root";
	private $password ="";
	private $db = "mybook_db";



	function connect()
	{
		$connection =mysqli_connect( $this->host, $this->username,$this->password,$this->db);
		return $connection ;
	}

	function read($query)
	{
		$con= $this ->connect();
		$result = mysql_query($conn,$query);

		if (! $result)
		{
			return false;
		}
		else
		{	$data= false;
			while($row = mysli_fetch_assoc($result))
			{
				$data[] = $row;
			}
			return $data;
		}

	}

	function save($query)
	{

		$conn= $this ->connect();
		$result = mysql_query($conn,$query);

		if (! $result)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
}
$Db=  new Database();
