<?php
 /**
 * Projet SI Web - MVC2
 * @author Guillaume KOTOWSKI
 */

include('include/init/init.php');

// Traitement de la requete par le FrontController
// Patron d'architecture MVC2 donc un seul controller
FrontController::getInstance()->request();

?>
