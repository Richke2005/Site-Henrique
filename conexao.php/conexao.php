<?php

class Conexao
{
	private static $instancia;

	public static function getConexao()
	{
		if(!isset(self::$instancia)){
			self::$instancia = new PDO('mysql:host=localhost:3306;dbname=siteRick; charset=utf8', 'root','root');
			return self::$instancia;
		}else{
			return self::$instancia;
		}	
	}
}


?>