<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    function index()
    {
        // añadimos algunas funciones
        $data['resources'] =$this->config->item('base_url').'/assets' ;
        // llamamos a las vistas
        $this->load->view('templates/head', $data);
        $this->load->view('templates/menu');
        $this->load->view('welcome_message');
	$this->load->view('templates/footer');
    }
}  
   
?>
