<?php 
/* mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("kuliner") or die(mysql_error()); */
class oci {
	private $koneksi = '';
	private $user = 'amalia';
	private $password = '1234';
	private $db = 'localhost/XE';
	private $query = NULL;

	function __construct() {
		$this->koneksi = oci_connect($this->user, $this->password, $this->db);
	}

	function query($sql)
	{
		$this->query = oci_parse($this->koneksi, $sql) or die(oci_error());
		oci_execute($this->query);
		return $this->query;
	}

	function getQuery()
	{
		return $this->query;
	}

	function fetch_array()
	{
		return oci_fetch_array($this->query);
	}

	function getKoneksi() 
	{
		return $this->koneksi;
	}
}