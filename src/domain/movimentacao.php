<?php

	class Movimentacao {
		var $ID_CONTEINER;
		var $tipo_movimentacao;
		var $data_inicio;
		var $data_fim;

		function getID_CONTEINER(){
			return $this->ID_CONTEINER;
		}
		function setID_CONTEINER($ID_CONTEINER){
			$this->ID_CONTEINER = $ID_CONTEINER;
		}

		function getTipo_movimentacao(){
			return $this->tipo_movimentacao;
		}
		function setTipo_movimentacao($tipo_movimentacao){
			$this->tipo_movimentacao = $tipo_movimentacao;
		}

		function getData_inicio(){
			return $this->data_inicio;
		}
		function setData_inicio($data_inicio){
			$this->data_inicio = $data_inicio;
		}

		function getData_fim(){
			return $this->data_fim;
		}
		function setData_fim($data_fim){
			$this->data_fim = $data_fim;
		}
	}

	class MovimentacaoDAO {
		function create($movimentacao) {
			$result = array();

			try {
				$query = "INSERT INTO table_name (column1, column2) VALUES (value1, value2)";

				$con = new Connection();

				if(Connection::getInstance()->exec($query) >= 1){
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
