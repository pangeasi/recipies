<?php
class Scrap extends Controller {
    public function index() {

        $titlePage="Página principal";
        $queryURLs = $this->model->query('SELECT * FROM urls_requests');
        
        var_dump($queryURLs);
/*         include("../functions/requestRecipie.php");
 */
    }
}
?>