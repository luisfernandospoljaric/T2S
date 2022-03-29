<?php

	class Conteiner {
		var $ID;
		var $Cliente;
		var $Tipo;
		var $Status;
		var $Categoria;

		function getID(){
			return $this->ID;
		}
		function setID($ID){
			$this->ID = $ID;
		}

		function getCliente(){
			return $this->Cliente;
		}
		function setCliente($Cliente){
			$this->Cliente = $Cliente;
		}

		function getTipo(){
			return $this->Tipo;
		}
		function setTipo($Tipo){
			$this->Tipo = $Tipo;
		}

		function getStatus(){
			return $this->Status;
		}
		function setStatus($Status){
			$this->Status = $Status;
		}

		function getCategoria(){
			return $this->Categoria;
		}
		function setCategoria($Categoria){
			$this->Categoria = $Categoria;
		}
	}

	class ConteinerDAO {
		function create($conteiner) {
			$result = array();

			try {
				$query = "INSERT INTO conteiner (Cliente, Tipo, Status, Categoria) VALUES (".$conteiner->cliente.", ".$conteiner->tipo.",'".$conteiner->status."','".$conteiner->categoria."')";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
					$id= Connection::getInstance()->lastInsertId();
					$conteiner->id = $id;
					$result = $conteiner;
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function read() {
			$result = array();

			try {
				$query = "SELECT column1, column2 FROM table_name WHERE condition";

				$con = new Connection();

				$resultSet = Connection::getInstance()->query($query);

				while($row = $resultSet->fetchObject()){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function update() {
			$result = array();

			try {
				$query = "UPDATE table_name SET column1 = value1, column2 = value2 WHERE condition";

				$con = new Connection();

				$status = Connection::getInstance()->prepare($query);

				if($status->execute()){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}

		function delete() {
			$result = array();

			try {
				$query = "DELETE FROM table_name WHERE condition";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
				}

				$con = null;
			}catch(PDOException $e) {
				$result["err"] = $e->getMessage();
			}

			return $result;
		}
	}
