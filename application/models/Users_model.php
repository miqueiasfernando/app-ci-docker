<?php

// Construtores são métodos especiais que são executados automaticamente quando um objeto é instanciado.
// Instanciar um objeto significa criar uma instância de uma classe, ou seja, criar um objeto a partir de uma classe.

class Users_model extends CI_Model {
	public function __construct() { // Construtor da Classe UsersModel
		parent::__construct(); // Indica que o construtor será da Classe UsersModel e não da CI_Model
		$this->load->database(); // Carrega a biblioteca de banco de dados
	}

	// Método para selecionar os dados do usuário
	public function get_user_data($user_login) {
		$this->db
		->select("user_id, password_hash, user_full_name, user_email, user_status")
		->from("users")
		->where("user_login", $user_login);

		$result = $this->db->get();

		// Verifica se o resultado da consulta retornou algum registro
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return NULL;
		}
	}
}
