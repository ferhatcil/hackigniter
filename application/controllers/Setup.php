<?php

class Setup extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "setupView";
        $this->load->model("SetupModel");
        $this->load->helper('file');

    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "view";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function Run()
    {
        if ($this->input->post("setup")) {

            try {
                $this->SetupModel->HackIgniter();
                $this->SetupModel->hi_0();
                $this->SetupModel->hi_1();
                $this->SetupModel->hi_csrf_0();
                $this->SetupModel->hi_csrf_1();
                $this->SetupModel->hi_flags();
                $this->SetupModel->hi_idor_0();
                $this->SetupModel->hi_idor_1();
                $this->SetupModel->hi_missingfunction_0();
                $this->SetupModel->hi_users();
                $this->SetupModel->hi_xss_0();
                $this->SetupModel->hi_xss_1();
                $this->SetupModel->hi_xss_2();
                $this->SetupModel->hi_sqli_0();

                $data = array("name" => "hackigniter");
                file_put_contents(FCPATH . "\db.json", json_encode($data));

                redirect(base_url("Login"));
            } catch (Exception $e) {
                redirect(base_url("Setup"));
            }
        } else {
            redirect(base_url("Setup"));
        }

    }

}
