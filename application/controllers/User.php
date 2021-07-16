<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "user_v";
        $this->load->model("User_model");

        if (!userIsActive()) {
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $users = $this->User_model->get_all(
            array(
                "status" => 1,
                "role" => "user"
            )
        );

        $viewData->users = $users;
        $viewData->role = $this->session->userdata['UserSession']->role;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function view($username = "")
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "view";

        if (empty($username)) {
            redirect(base_url());
        } else {
            $user = $this->User_model->get(
                array(
                    "username" => $username
                )
            );

            if (isset($user)) {
                $viewData->user = $user;
                $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
            } else {
                redirect(base_url());
            }
        }

    }

    public function add()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        if ($this->input->post()) {
            $username = $this->input->post("username");
            $name = $this->input->post("name");
            $surname = $this->input->post("surname");
            $password = $this->input->post("password");

            $viewData->error = "Success";

            if (empty($username)) {
                $viewData->error = "Kullanıcı adı boş olamaz";
            } elseif (empty($name)) {
                $viewData->error = "Ad boş olamaz";
            } elseif (empty($surname)) {
                $viewData->error = "Soyad boş olamaz";
            } elseif (empty($password)) {
                $viewData->error = "Şifre boş olamaz";
            } else {
                $user = $this->User_model->get(
                    array(
                        "username" => $username
                    )
                );
                if ($user) {
                    $viewData->error = "Kullanıcı adı daha önceden kayıt edilmiştir.";
                } else {
                    $insert = $this->User_model->add(
                        array(
                            "username" => $username,
                            "name" => $name,
                            "surname" => $surname,
                            "password" => $password,
                            "status" => 1
                        )
                    );
                    if ($insert) {
                        redirect(base_url());
                    } else {
                        $viewData->error = "Kullanıcı eklenirken hata oluştu.";
                    }
                }
            }
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        } else {
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }


    }

    public function update($username = "")
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";

        if (empty($username)) {
            redirect(base_url());
        } else {
            if ($this->input->post()) {

                $user = $this->User_model->get(
                    array(
                        "username" => $username
                    )
                );

                $name = $this->input->post("name");
                $surname = $this->input->post("surname");
                $password = $this->input->post("password");

                $viewData->user = $user;
                $viewData->error = "Success";

                if (empty($name)) {
                    $viewData->error = "Ad boş olamaz";
                } elseif (empty($surname)) {
                    $viewData->error = "Soyad boş olamaz";
                } elseif (empty($password)) {
                    $viewData->error = "Şifre boş olamaz";
                } else {
                    $update = $this->User_model->update(
                        array(
                            "username" => $username
                        ),
                        array(
                            "name" => $name,
                            "surname" => $surname,
                            "password" => $password
                        )
                    );
                    if ($update) {
                        redirect(base_url());
                    } else {
                        $viewData->error = "Kullanıcı güncellenirken hata oluştu.";
                    }
                }

                $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
            } else {
                $user = $this->User_model->get(
                    array(
                        "username" => $username
                    )
                );
                if ($user) {
                    $viewData->user = $user;
                    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
                } else {
                    redirect(base_url());
                }

            }

        }


    }

    public function delete($username = "")
    {
        if (empty($username)) {
            redirect(base_url());
        } else {
            $del = $this->User_model->delete(
                array(
                    "username" => $username
                )
            );
            if ($del) {
                redirect(base_url());
            } else {
                redirect(base_url());
            }
        }
    }

}
