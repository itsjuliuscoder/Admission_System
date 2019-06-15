<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publique extends MX_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('composants');
		$this->load->model('BusinessModel');
        $this->load->library('pagination');
	}

    public function index (){
        $this->liste();
    }
    public function liste ($index = 1){
        $slide_1 = get_filenames('./uploads/bannieres/business_slide_1');
        $slide_2 = get_filenames('./uploads/bannieres/business_slide_2');
        $vente_achats = $this->BusinessModel->liste_publique((int)$index);
        $data = array('content' => 'business/publique/liste', 'vente_achats' => $vente_achats, 'slide_1' => $slide_1, 'slide_2' => $slide_2);
        $this->load->view('layouts/publique', $data);
    }
    public function details ($id_vente_achat = null){
        $vente_achat = $this->BusinessModel->details($id_vente_achat);
        $photos_details = get_filenames('./uploads/business/' . $id_vente_achat);

        $data = array('vente_achat' => $vente_achat, 'id_vente_achat' => $id_vente_achat, 'photos_details' => $photos_details);
        $this->load->view('business/publique/details', $data);
    }
    public function recherche (){
        $data = array('content' => 'business/publique/liste');
        $this->load->view('layouts/publique', $data);
    }
}