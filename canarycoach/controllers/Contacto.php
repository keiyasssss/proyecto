<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
    
    function index()
    {
        // añadimos algunas funciones
        $data['resources'] =$this->config->item('base_url').'/assets';
        $data['base_url'] =$this->config->item('base_url');
        // llamamos a las vistas
        $this->load->view('templates/head', $data);
        $this->load->view('templates/menu');
        $this->load->view('contacto');
	    $this->load->view('templates/footer', $data);
    }
}  
   
?>
