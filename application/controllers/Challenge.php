<?php


class Challenge extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "challengeView";
        $this->load->model("ChallengeModel");
        if (!userIsActive()) {
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "view";

        $viewData->errorBasedSqlInjection = $this->ChallengeModel->get(
            array(
                "vulnerabilityCode" => "errorBasedSqlInjection"
            )
        )->status;

        $viewData->timeBasedSqlInjection = $this->ChallengeModel->get(
            array(
                "vulnerabilityCode" => "timeBasedSqlInjection"
            )
        )->status;

        $viewData->idor = $this->ChallengeModel->idor()->totalAmount;

        $viewData->csrf = $this->ChallengeModel->csrf()->totalAmount;

        $viewData->xssToRce = $this->ChallengeModel->get(
            array(
                "vulnerabilityCode" => "xssToRce"
            )
        )->status;

        $viewData->osCommand = $this->ChallengeModel->get(
            array(
                "vulnerabilityCode" => "osCommand"
            )
        )->status;

        $viewData->missingFunction = $this->ChallengeModel->missingFunction();

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function sendFlag()
    {
        if ($this->input->post("flag")) {
            $flag = $this->input->post("flag");
            $result = $this->ChallengeModel->get(
                array(
                    "name" => $flag
                )
            );

            if ($result) {
                $update = $this->ChallengeModel->update(
                    array(
                        "name" => $flag
                    ),
                    array(
                        "status" => '1'
                    )
                );
                if ($update) {
                    redirect(base_url("Challenge"));
                }
            } else {
                redirect(base_url("Challenge"));
            }

        } else {
            redirect(base_url("Challenge"));
        }
    }


}