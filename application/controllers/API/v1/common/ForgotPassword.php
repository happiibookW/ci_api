
<?php


require APPPATH . 'libraries/REST_Controller.php';

class ForgotPassword extends REST_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('AuthenticationModel');
    }

    public function index_post()
    {

        try {
            $email = $this->input->post('email');
            if ($email != "") {
                $compare = array(
                    "email" => $email,
                );
                $verificationCode = rand(1000, 9999);
                $data = array(
                    "forgotPassword" => 1,
                    "verificationCode" => $verificationCode,
                );
                $profiledata = $this->AuthenticationModel->forgot($data, $compare);
                if ($profiledata == false) {
                    $this->response(array(
                        "status" => NOT_EXIST,
                        "message" => NOT_EXIST_MESSAGE,
                    ), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        "status" => MAIL_SENT,
                        "message" => MAIL_SENT_MESSAGE,
                    ), REST_Controller::HTTP_OK);
                }
            } else {
                $this->response(array(
                    "status" => REQUIRED_FIELDS,
                    "message" => REQUIRED_FIELDS_MESSAGE
                ), REST_Controller::HTTP_OK);
            }
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
    }
}

?>