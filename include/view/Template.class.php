<?php
/**
* Projet SI Web
* @author Guillaume KOTOWSKI
*/

class Template {
	private $smarty;
	private static $_instance = null;

    private function __construct() {
		$this->smarty = new Smarty;
		$this->smarty->setTemplateDir('./include/smarty/templates/');
		$this->smarty->setCompileDir('./include/smarty/templates_c/');
		$this->smarty->setConfigDir('./include/smarty/configs/');
		$this->smarty->setCacheDir('./include/smarty/cache/');
	}

    public static function getInstance() {
        if (is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

	public function __getSmarty() {
		return $this->smarty;
	}
}
?>