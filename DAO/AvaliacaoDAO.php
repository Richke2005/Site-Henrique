<?php
include_once "../conexao.php/conexao.php";


class avaliacaoDAO{
private $nome;
private $email;
private $texto;

//getters and setters===================================

public function setnome($nome){
    $this->nome= $nome;
}

public function getnome(){
    return $this->nome;
}

//========================================================

public function setemail($email){
     $this->email= $email;
}

public function getemail(){
    return $this->email;
}

//========================================================

public function settexto($texto){
    $this->texto= $texto;
}

public function gettexto(){
    return $this->texto;
}

//Métodos =================================================

public function cadastrar(){

    $bd = new Conexao(); //class conexão agr é $bd
		$con = $bd->getConexao();// acessando o conexão da class

		$sql = "INSERT INTO avaliacao (nome, email, texto) VALUES(?, ?, ?)";
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $this->nome);
		$stm->bindValue(2, $this->email);
		$stm->bindValue(3, $this->texto);
		//$stm->bindValue(4, $this->email_intitucional);
	

		$result = $stm->execute();

		if($result){
			echo "cadastrou";
		}else{
			echo "não cadastrou";
		}
}

}

?>