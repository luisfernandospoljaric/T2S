<?php

	require("../../domain/connection.php");
	require("../../domain/movimentacao.php");

	class MovimentacaoProcess {
		var $md;

		function doGet($arr){
			$md = new MovimentacaoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPost($arr){
			$md = new MovimentacaoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doPut($arr){
			$md = new MovimentacaoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}


		function doDelete($arr){
			$md = new MovimentacaoDAO();
			$result = "use to result to DAO";
			http_response_code(200);
			echo json_encode($result);
		}
	}