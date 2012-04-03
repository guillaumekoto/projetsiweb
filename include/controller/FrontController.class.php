<?php
/**
* Projet SI Web
* FrontController, classe singleton qui va traiter les requete et redirigŽ vers les bonnes pages
* MVC2 - c'est le suel controller, il va traiter les requts
* @author Guillaume KOTOWSKI
*/

class FrontController
{
	// Page autorisŽe du site
    private $_menu = array('accueil' => 'Accueil', 'recherche' => 'Recherche', 'inscription' => 'Inscription');

	private static $_instance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if (is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function request() {
    	if(!empty($_GET["page"])){
			// Le $_GET["page"] existe, il y a donc une demande d'afichage d'une page
			$requestedPage = $_GET["page"];
		} else {
			// Le $_GET["page"] n'existe pas donc c'est la page d'accueil
			$requestedPage = "accueil";
		}
		
		// On vŽrifie que la page demandŽe est lŽgitime 
		if (array_key_exists($requestedPage, $this->_menu))
		{
			// La page demandŽe existe, donc on va l'afficher
			$page = new $this->_menu[$requestedPage];
			$page->printPage();
		} else {
			// La page demandŽe n'existe pas
			$page = new NotFound;
			$page->printPage();
		}
    }
    
}
?>