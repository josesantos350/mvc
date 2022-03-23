<?php 

class homeController extends Controller {
    
    
    public function index() {
        $usuario = new usuario();
        $usuario->setName('Jose Fredson');
        
        $dados = array(
           'name'=> $usuario->getName() 
        );
        
        $this->loadTemplate('home', $dados);
    }
}