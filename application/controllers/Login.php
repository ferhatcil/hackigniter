<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "loginView";
        $this->load->model("UserModel");
    }

    public function index()
    {
        if (userIsActive()) {
            redirect(base_url("login"));
        }

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "view";
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function check()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "index";

        $u = $this->input->post("username");
        $p = $this->input->post("password");


        if ($this->input->post("username")) {
            if (!$u and $p) {
                $viewData->error = "Kullanıcı adı boş bırakılamaz!";
            } else if ($u and !$p) {
                $viewData->error = "Şifre boş bırakılamaz!";
            } else if (!$u and !$p) {
                $viewData->error = "Kullanıcı adı ve şifre boş bırakılamaz!";
            } else {
                $user = $this->UserModel->get(
                    array(
                        "username" => $this->input->post("username"),
                        "password" => $this->input->post("password")
                    )
                );

                if ($user) {
                    $this->session->set_userdata("UserSession", $user);
                    redirect(base_url("Vulnerabilities"));
                } else {
                    redirect("Login");
                }
            }
        } else {
            redirect(base_url("Login"));
        }

    }

    public function logout()
    {
        $this->session->unset_userdata("UserSession");
        redirect(base_url("login"));
    }

}