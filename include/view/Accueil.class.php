<?php
/**
* Projet SI Web
* @author Guillaume KOTOWSKI
*/

class Accueil {
	private $_title = "Welcome";
	private $_name = "Accueil";

    public function __construct() {}

	public function printPage() {
			Template::getInstance()->__getSmarty()->assign("title", $this->_title);
			Template::getInstance()->__getSmarty()->assign("Name", $this->_name);
			Template::getInstance()->__getSmarty()->display("index.tpl");
	}
}
?>