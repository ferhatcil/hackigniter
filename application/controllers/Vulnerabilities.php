<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vulnerabilities extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "vulnerabilitiesView";
        $this->load->model("VulnerabilitiesModel");

        if (!userIsActive()) {
            redirect(base_url("login"));
        }

    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "mainView";
        $viewData->subViewFolder = "view";

        $this->load->view("mainView/{$viewData->subViewFolder}/index", $viewData);
    }

    public function errorBasedSqli()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "errorBasedSqli";


        if ($this->input->post("username")) {
            $username = $this->input->post("username");
            $username = strtolower($username);
            $username = str_replace('sleep', '', $username);
            $username = str_replace('and', '', $username);
            $result = $this->VulnerabilitiesModel->errorBasedSqliSelectQuery($username);

            if (isset($result['message'])) {
                $viewData->errorMessage = $result['message'];
            }

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        } else {
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function timeBasedSqli()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "timeBasedSqli";

        if ($this->input->post("username")) {
            $username = $this->input->post("username");
            $username = strtolower($username);
            $username = str_replace('sleep', '', $username);
            $username = str_replace('and', '', $username);

            $this->VulnerabilitiesModel->timeBasedSqliSelectQuery($username);
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        } else {
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function idor()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "idor";

        $transfers = $this->VulnerabilitiesModel->idorSelectQuery(
            array(
                "identityNumber" => $this->session->userdata["user_session_idor"]->identityNumber
            )
        );

        $user = $this->VulnerabilitiesModel->idorGet(
            array(
                "identityNumber" => $this->session->userdata["user_session_idor"]->identityNumber
            )
        );

        $viewData->transfers = $transfers;
        $viewData->user = $user;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function idorLogin()
    {

        $identityNumber = $this->input->post("identityNumber");
        $password = $this->input->post("password");

        if ($identityNumber and $password) {
            $user = $this->VulnerabilitiesModel->idorGet(
                array(
                    "identityNumber" => $identityNumber,
                    "password" => $password
                )
            );

            if (isset($user)) {
                $this->session->set_userdata("user_session_idor", $user);
                redirect(base_url("Vulnerabilities/idor"));
            } else {
                redirect(base_url("Vulnerabilities/idor"));
            }
        } else {
            redirect(base_url("Vulnerabilities/idor"));
        }
    }

    public function idorLogout()
    {
        $this->session->unset_userdata("user_session_idor");
        redirect(base_url("Vulnerabilities/idor"));
    }

    public function idorSendMoney()
    {
        if ($this->input->post()) {
            $name = $this->input->post("name");
            $surname = $this->input->post("surname");
            $iban1 = $this->input->post("sender");
            $iban2 = $this->input->post("receiver");
            $amount = $this->input->post("amount");
            if (!empty($name) and !empty($surname) and !empty($iban1) and !empty($iban2)) {
                $user = $this->VulnerabilitiesModel->idorGet(
                    array(
                        "ibanNumber" => $iban1
                    )
                );
                $user2 = $this->VulnerabilitiesModel->idorGet(
                    array(
                        "ibanNumber" => $iban2
                    )
                );
                if ($user and $user2) {
                    if ($user->totalAmount >= $amount and $amount > 0) {
                        if ($user->ibanNumber != $iban2) {

                            $test = $this->session->userdata["user_session_idor"]->ibanNumber;

                            if ($test != $iban2) {
                                $insertLog = $this->VulnerabilitiesModel->idorİnsert(
                                    array(
                                        "id1" => $iban1,
                                        "id2" => $iban2,
                                        "amount" => $amount
                                    )
                                );
                                if ($insertLog) {
                                    $updateAmount = $this->VulnerabilitiesModel->idorUpdate(
                                        array(
                                            "ibanNumber" => $user->ibanNumber
                                        ),
                                        array(
                                            "totalAmount" => $user->totalAmount - $amount
                                        )
                                    );
                                    $updateAmount2 = $this->VulnerabilitiesModel->idorUpdate(
                                        array(
                                            "ibanNumber" => $user2->ibanNumber
                                        ),
                                        array(
                                            "totalAmount" => $user2->totalAmount + $amount
                                        )
                                    );
                                    if ($updateAmount and $updateAmount2) {
                                        redirect(base_url("Vulnerabilities/idor"));
                                    } else {
                                        redirect(base_url("Vulnerabilities/idor"));
                                    }
                                }
                            }
                        } else {
                            redirect(base_url("Vulnerabilities/idor"));
                        }
                    } else {
                        redirect(base_url("Vulnerabilities/idor"));
                    }
                } else {
                    redirect(base_url("Vulnerabilities/idor"));
                }

            } else {
                redirect(base_url("Vulnerabilities/idor"));
            }
        } else {
            redirect(base_url("Vulnerabilities/idor"));
        }
    }

    public function csrf()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "csrf";

        $transfers = $this->VulnerabilitiesModel->csrfSelectQuery(
            array(
                "identityNumber" => $this->session->userdata["user_session_csrf"]->identityNumber
            )
        );

        $user = $this->VulnerabilitiesModel->csrfGet(
            array(
                "identityNumber" => $this->session->userdata["user_session_csrf"]->identityNumber
            )
        );

        $viewData->transfers = $transfers;
        $viewData->user = $user;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function csrfLogin()
    {

        $identityNumber = $this->input->post("identityNumber");
        $password = $this->input->post("password");

        if ($identityNumber and $password) {
            $user = $this->VulnerabilitiesModel->csrfGet(
                array(
                    "identityNumber" => $identityNumber,
                    "password" => $password
                )
            );

            if (isset($user)) {
                $this->session->set_userdata("user_session_csrf", $user);
                redirect(base_url("Vulnerabilities/csrf"));
            } else {
                redirect(base_url("Vulnerabilities/csrf"));
            }
        } else {
            redirect(base_url("Vulnerabilities/csrf"));
        }
    }

    public function csrfLogout()
    {
        $this->session->unset_userdata("user_session_csrf");
        redirect(base_url("Vulnerabilities/csrf"));
    }

    public function csrfSendMoney()
    {
        if ($this->input->post()) {
            $name = $this->input->post("name");
            $surname = $this->input->post("surname");
            $iban1 = $this->session->userdata["user_session_csrf"]->ibanNumber;
            $iban2 = $this->input->post("receiver");
            $amount = $this->input->post("amount");
            if (!empty($name) and !empty($surname) and !empty($iban1) and !empty($iban2)) {
                $user = $this->VulnerabilitiesModel->csrfGet(
                    array(
                        "ibanNumber" => $iban1
                    )
                );
                $user2 = $this->VulnerabilitiesModel->csrfGet(
                    array(
                        "ibanNumber" => $iban2
                    )
                );
                if ($user and $user2) {
                    if ($user->totalAmount >= $amount and $amount > 0) {
                        if ($user->ibanNumber != $iban2) {
                            $insertLog = $this->VulnerabilitiesModel->csrfİnsert(
                                array(
                                    "id1" => $iban1,
                                    "id2" => $iban2,
                                    "amount" => $amount
                                )
                            );
                            if ($insertLog) {
                                $updateAmount = $this->VulnerabilitiesModel->csrfUpdate(
                                    array(
                                        "ibanNumber" => $user->ibanNumber
                                    ),
                                    array(
                                        "totalAmount" => $user->totalAmount - $amount
                                    )
                                );
                                $updateAmount2 = $this->VulnerabilitiesModel->csrfUpdate(
                                    array(
                                        "ibanNumber" => $user2->ibanNumber
                                    ),
                                    array(
                                        "totalAmount" => $user2->totalAmount + $amount
                                    )
                                );
                                if ($updateAmount and $updateAmount2) {
                                    redirect(base_url("Vulnerabilities/csrf"));
                                } else {
                                    redirect(base_url("Vulnerabilities/csrf"));
                                }
                            }
                        } else {
                            redirect(base_url("Vulnerabilities/csrf"));
                        }
                    } else {
                        redirect(base_url("Vulnerabilities/csrf"));
                    }
                } else {
                    redirect(base_url("Vulnerabilities/csrf"));
                }

            } else {
                redirect(base_url("Vulnerabilities/csrf"));
            }
        } else {
            redirect(base_url("Vulnerabilities/csrf"));
        }
    }

    public function xss()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "xss";

        $user = $this->VulnerabilitiesModel->xssLogin(
            array(
                "username" => $this->session->userdata["user_session_xss"]->username
            )
        );

        $tickets = $this->VulnerabilitiesModel->xssTickets(
            array(
                "userId" => $this->session->userdata["user_session_xss"]->id
            )
        );

        $adminTickets = $this->VulnerabilitiesModel->xssTickets();

        $viewData->user = $user;
        $viewData->tickets = $tickets;
        $viewData->adminTickets = $adminTickets;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function xssLogin()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "xss";

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if ($username and $password) {
            $user = $this->VulnerabilitiesModel->xssLogin(
                array(
                    "username" => $username,
                    "password" => $password
                )
            );
            if ($user) {
                $this->session->set_userdata("user_session_xss", $user);
                redirect(base_url("Vulnerabilities/xss"));
            } else {
                redirect(base_url("Vulnerabilities/xss"));
            }
        } else {
            redirect(base_url("Vulnerabilities/xss"));
        }

    }

    public function xssTicketDetail($id = '')
    {
        if (!$id) {
            redirect(base_url("Vulnerabilities/xss"));
        } else {
            if ($this->session->userdata["user_session_xss"]->role == 0) {
                $user = $this->VulnerabilitiesModel->xssLogin(
                    array(
                        "username" => $this->session->userdata["user_session_xss"]->username
                    )
                );

                $ticket = $this->VulnerabilitiesModel->xssTicket(
                    array(
                        "userID" => $this->session->userdata["user_session_xss"]->id,
                        "id" => $id,
                    )
                );

                $comments = $this->VulnerabilitiesModel->xssComments(
                    array(
                        "ticketId" => $id
                    )
                );

                if ($ticket) {
                    $viewData = new stdClass();
                    $viewData->viewFolder = $this->viewFolder;
                    $viewData->subViewFolder = "xss";
                    $viewData->ticket = $ticket;
                    $viewData->user = $user;
                    $viewData->comments = $comments;

                    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/ticket/index", $viewData);
                } else {
                    redirect(base_url("Vulnerabilities/xss"));
                }
            } else {

                $user = $this->VulnerabilitiesModel->xssLogin(
                    array(
                        "username" => $this->session->userdata["user_session_xss"]->username
                    )
                );

                $ticket = $this->VulnerabilitiesModel->xssTicket(
                    array(
                        "id" => $id
                    )
                );

                $comments = $this->VulnerabilitiesModel->xssComments(
                    array(
                        "ticketId" => $id
                    )
                );

                if ($ticket) {
                    $viewData = new stdClass();
                    $viewData->viewFolder = $this->viewFolder;
                    $viewData->subViewFolder = "xss";
                    $viewData->ticket = $ticket;
                    $viewData->user = $user;
                    $viewData->comments = $comments;

                    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/ticket/index", $viewData);
                } else {
                    redirect(base_url("Vulnerabilities/xss"));
                }
            }

        }
    }

    public function xssAddTicket()
    {
        $title = $this->input->post("title");
        $content = $this->input->post("content");

        if ($title and $content) {
            $ticket = $this->VulnerabilitiesModel->xssAddTicket(
                array(
                    "userID" => $this->session->userdata["user_session_xss"]->id,
                    "title" => $title,
                    "content" => $content
                )
            );
            if ($ticket) {
                redirect("Vulnerabilities/xss");
            } else {
                redirect("Vulnerabilities/xss");
            }
        } else {
            redirect("Vulnerabilities/xss");
        }

    }

    public function xssAddComment()
    {
        $content = $this->input->post("content");
        $ticketID = $this->input->post("ticket");

        if ($content) {
            $ticket = $this->VulnerabilitiesModel->xssAddComment(
                array(
                    "userID" => $this->session->userdata["user_session_xss"]->id,
                    "ticketId" => $ticketID,
                    "comment" => $content
                )
            );
            if ($ticket) {
                redirect(base_url("Vulnerabilities/xssTicketDetail/{$ticketID}"));
            }
        } else {
            redirect(base_url("Vulnerabilities/xss"));
        }
    }

    public function xssFileUpload()
    {
        if ($this->session->userdata["user_session_xss"]->role == 1) {
            $config['upload_path'] = "uploads/";
            $config['allowed_types'] = '*';

            $this->load->library("upload", $config);

            if (!$this->upload->do_upload("xssfile")) {
                redirect(base_url("Vulnerabilities/xss?ok"));
            } else {
                redirect(base_url("Vulnerabilities/xss"));
            }
        } else {
            echo "NoAdmin!";
        }
    }

    public function xssLogout()
    {
        $this->session->unset_userdata("user_session_xss");
        redirect(base_url("Vulnerabilities/xss"));
    }

    public function osCommand()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "osCommand";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function osCommandCheck()
    {
        $something = $this->input->post("something");

        if ($something) {
            system($something);
            redirect(base_url("Vulnerabilities/osCommand"));
        } else {
            redirect(base_url("Vulnerabilities/osCommand"));
        }

    }

    public function ssrf()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "ssrf";

        $path = $this->input->post("path");

        if ($path) {
            $path = "http://localhost" . $path . ".png";
            $viewData->path = file_get_contents($path);
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        } else {
            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }


    }

    public function missingFunction()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "missingFunction";

        if (missingFunctionIsActive()) {

            if ($this->session->userdata["user_session_missingFunction"]->role == 1) {
                $usersForAdmin = $this->VulnerabilitiesModel->missingFunctionGetAll();
                if ($usersForAdmin) {
                    $viewData->usersForAdmin = $usersForAdmin;
                }
                $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
            } else {
                if (isset($this->session->userdata["user_session_missingFunction"]->username)) {
                    $user = $this->VulnerabilitiesModel->missingFunctionGet(
                        array(
                            "username" => $this->session->userdata["user_session_missingFunction"]->username
                        )
                    );
                    if ($user) {
                        $viewData->user = $user;
                        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
                    }
                } else {
                    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
                }
            }

        }
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function missingFunctionLogin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if ($username and $password) {
            $user = $this->VulnerabilitiesModel->missingFunctionGet(
                array(
                    "username" => $username,
                    "password" => $password
                )
            );

            if ($user) {
                $this->session->set_userdata("user_session_missingFunction", $user);
                redirect(base_url("Vulnerabilities/missingFunction"));
            } else {
                redirect(base_url("Vulnerabilities/missingFunction"));
            }

        } else {
            redirect(base_url("Vulnerabilities/missingFunction"));
        }

    }

    public function missingFunctionUpdateProfile()
    {
        if (missingFunctionIsActive()) {
            $oldPassword = $this->input->post("oldPassword");
            $newPassword = $this->input->post("newPassword");

            if ($oldPassword and $newPassword) {
                if ($oldPassword != $newPassword) {
                    $update = $this->VulnerabilitiesModel->missingFunctionUpdateUserPass(
                        array(
                            "username" => $this->session->userdata["user_session_missingFunction"]->username
                        ),
                        array(
                            "password" => $newPassword
                        )
                    );
                    if ($update) {
                        redirect(base_url("Vulnerabilities/missingFunctionLogout"));
                    } else {
                        redirect(base_url("Vulnerabilities/missingFunction"));
                    }
                }
            } else {
                redirect(base_url("Vulnerabilities/missingFunction"));
            }
        } else {
            redirect(base_url("Vulnerabilities/missingFunction"));
        }

    }

    public function missingFunctionDeleteProfile($username = '')
    {
        if (missingFunctionIsActive()) {

            if ($username) {
                $update = $this->VulnerabilitiesModel->missingFunctionDeleteProfile(
                    array(
                        "username" => $username
                    )
                );
                redirect(base_url("Vulnerabilities/missingFunction"));
            } else {
                echo "Username is empty";
            }
        }
    }

    public function missingFunctionLogout()
    {
        $this->session->unset_userdata("user_session_missingFunction");
        redirect(base_url("Vulnerabilities/missingFunction"));
    }


}