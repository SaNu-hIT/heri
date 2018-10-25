<?php
class Database
 { // Class : begin
 
	var $host;  	//Hostname, Server
	var $password; 	//Passwort MySQL
	var $user; 		//User MySQL
	var $database; 	//Databasename MySQL
	var $link;
	var $query;
	var $result;
	
	function Database()
	{ 

		
		$this->host = "mysql.hostinger.in";                  //          <<---------
		$this->password = "cloudique";           //          <<---------
		$this->user = "u268554146_herit";                   //          <<---------
		$this->database = "u268554146_herit";           //          <<---------
		$this->rows = 0;
		
	} 
	// function Database()
	// { 

		
	// 	$this->host = "localhost";                  //          <<---------
	// 	$this->password = "";           //          <<---------
	// 	$this->user = "root";                   //          <<---------
	// 	$this->database = "heritageaurvedha";           //          <<---------
	// 	$this->rows = 0;
		
	// } 


	
	function OpenLink()
	{

		$this->link = mysqli_connect($this->host,$this->user,$this->password) ;//or die (print "Class Database: Error while connecting to DB (link)")
	} 
	
	function SelectDB()
	{ 
	
		mysqli_select_db($this->link,$this->database); //or die (print "Class Database: Error while selecting DB");
	
	} 
	
	function CloseDB()
	{
		mysqli_close();
	} 
	
	function Query($query)
	{ 
		$this->OpenLink();
		$this->SelectDB();
		$this->query = $query;
		$this->result = mysqli_query($this->link,$this->query);
		return mysqli_errno($this->link);exit;		
		$this->CloseDB();
	} 
	
	///////////////////////////Added by Nisha 20/2/2010//////////////////////////////
	function db_selectData($query)
	{
	$this->OpenLink();
	$this->SelectDB();
	$this->query=$query;
	$this->result= mysqli_query($this->link,$this->query);
	return $this->result;
	
	}
	function db_countRows($res)
	{
	$result=mysqli_query($this->link,$this->query);
	$this->numrows=mysqli_num_rows($result);
	return $this->numrows;
		}
	
	
	function db_fetchrows($result)
	{
	$this->row = mysqli_fetch_array($result);
	return $this->row;
	}
	
	function db_fetchrow($result)
	{
	$this->row = mysqli_fetch_row($result);
	return $this->row;
	}

	function db_rowsAffected()
	{
	$this->affectedrow=mysqli_affected_rows();
	return $this->affectedrow;
	}
  
 } // Class : end
 
 ?>