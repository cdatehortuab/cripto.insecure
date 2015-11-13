<?php

class C_Register extends AbstractController {

	public function index() {
		$this->display('header');
		$this->display('register');
		$this->display('footer');
	}
}