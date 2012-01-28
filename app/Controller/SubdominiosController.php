<?php

App::uses('AppController', 'Controller');

/**
 * Subdomains Controller
 *
 * @property Subdomain $Subdomain
 */
class SubdominiosController extends AppController {

    private $sites = array(
        'subdominio1' => array(
            'user_id' => 101,
            'title' => 'Test subdominio 1'
        ),
        'subdominio2' => array(
            'user_id' => 102,
            'title' => 'Test subdominio 2'
        ),
        'subdominio3' => array(
            'user_id' => 103,
            'title' => 'Test subdominio 3'
        ),
        'etc' => array(
            'user_id' => 104,
            'title' => 'Test subdominio etc 3'
        ),
    );

    public function index() {
        $subdominio =  $this->request->params['subdomain'];
        // Existe el subdominio
        if (isset($this->sites[$subdominio]) == TRUE) {
            // en el test se hace con una array fijo
            // pero la idea es que se recupera de una base de datos
            // y hay que manejarlo desde el app_controller
            // para poner en produccion
            $this->set('user',$this->sites[$subdominio]);
        } else {
            //$this->redirect('/pages/error404', '404');
            $this->set('user',null);
        }
    }

}