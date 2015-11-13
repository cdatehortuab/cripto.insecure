<?php

abstract class AbstractController {

	protected $post;
	protected $files;
	protected $session;
	protected $auxView;
	protected $auxView2;
	protected $auxView3;
	private $varsView;

	public function __construct() {
		$this->post = $_POST;
		$this->files = $_FILES;
		$this->session = &$_SESSION;
		$this->auxView = 'empty';
		$this->auxView2 = 'empty';
		$this->auxView3 = 'empty';
		settype($this->post, 'object');
		settype($this->files,'object');
		$this->varsView = array();
	}

	protected function display() {
		$viewsNames = func_get_args();

		$this->assign('session', $this->session);
		foreach ($this->varsView as $var => $value) {
			$$var = $value;
		}

		foreach ($viewsNames as $viewName) {
			include VIEWS_PATH.$viewName.'.php';
		}
	}

	protected function assign($var, $value) {
		$this->varsView[$var] = $value;
	}

	abstract public function index();
}

?>