<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=pos",
			            "root",
			            "rAdmEctOjs_!HB43");

		$link->exec("set names utf8");

		return $link;

	}

}