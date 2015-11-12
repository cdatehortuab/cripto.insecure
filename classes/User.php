<?php

class User extends CriptoObject {
	
	protected $id;
	protected $name;
	protected $username;
	protected $password;
	protected $email;
	protected $birthday;

	public function jsonSerialize() {
		return array(
			'id' => $this->id,
			'name' => $this->name,
			'username' => $this->username,
			'password' => $this->password,
			'email' => $this->email,
			'birthday' => $this->birthday
			);
	}
}

?>