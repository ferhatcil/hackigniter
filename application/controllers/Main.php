<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "mainView";

        if (!userIsActive()) {
            redirect(base_url("login"));
        }

    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "view";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }



}