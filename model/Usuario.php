<?php
	class Usuario{
		private $nome;
		private $email;
		private $senha;
		private $username;
		private $id;

		function __construct($email, $password, $nome, $username, $id){
			$this->email = $email;
			$this->senha = $password;
			$this->nome = $nome;
			$this->username = $username;	
			$this->id = $id;
		}

		function getNome(){
			return $this->nome;
		}

		function setNome($nome){
			$this->nome = $nome;
		}

		function getEmail(){
			return $this->email;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function getSenha(){
			return $this->senha;
		}

		function setSenha($senha){
			$this->senha = $senha;
		}

		function getUsername(){
			return $this->username;
		}

		function setUsername($username){
			$this->username = $username;
		}

		function getId(){
			return $this->id;
		}

		function setId($id){
			$this->id = $id;
		}
	}
?>