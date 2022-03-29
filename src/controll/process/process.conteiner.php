<?php

	require("../../domain/connection.php");
	require("../../domain/conteiner.php");

	class ConteinerProcess {
		var $cd;

		function doGet($arr){
			$cd = new ConteinerDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$cd = new ConteinerDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$cd = new ConteinerDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$cd = new ConteinerDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}