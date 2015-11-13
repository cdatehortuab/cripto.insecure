<?php

class User extends AbstractObject {
	
	protected $id;
	protected $name;
	protected $username;
	protected $password;
	protected $email;
	protected $image;
	protected $birthday;

	public function jsonSerialize() {
		return array(
			'id' => $this->id,
			'name' => $this->name,
			'username' => $this->username,
			'password' => $this->password,
			'email' => $this->email,
			'image' => $this->image,
			'birthday' => $this->birthday
			);
	}
}

?>