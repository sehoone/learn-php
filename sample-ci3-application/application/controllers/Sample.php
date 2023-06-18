<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {

    }

    public function error404()
    {
        $this->global_lib->resultJson(array('errorCode'=>'-404','httpCode'=>'404'));
    }

    public function ramdomNumber()
    {
        log_message("info", "Informational Message");
        $this->load->view('sample/ramdomNumber');
    }

}