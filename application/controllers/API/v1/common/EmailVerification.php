
<?php


require APPPATH . 'libraries/REST_Controller.php';

class EmailVerification extends REST_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index_post()
    {
		
        try {
            $email = $this->input->post('email');
            if ( $email != ""  ) {
                $verificationCode=mt_rand(1000,9999);
                $emailData = array(
                    "email" => $email,
                    "verificationCode"=>$verificationCode
                );
                $user=$this->UserModel->alreadyExists(array("email"=>$email),"mstuser");
				$business=$this->UserModel->alreadyExists(array("email"=>$email),"mstbusiness");
				if($user==false && $business==false){
                if ($this->UserModel->addEmail($emailData, "mstauthorization") == true) {
                    $message="Your verification code is: ".$verificationCode;
                    $sendMail = sendMail($email,"Verfication Code By Happiverse",$message);
					// if($sendMail){
					// 	// $responseData=$this->UserModel->getUserId($email);
					// 	$this->response(array(
					// 		"status" => DATA_SAVE,
					// 		"message" => DATA_SAVE_MESSAGE,
					// 		"verificationCode"=>$verificationCode,
					// 	// "userId"=>$responseData['userId'],
					// 	), REST_Controller::HTTP_OK);
					// }else{
					// 	$this->response(array(
					// 		"status" => DATA_SAVE_ERROR,
					// 		"message" => DATA_SAVE_ERROR_MESSAGE
					// 	), REST_Controller::HTTP_OK);
					// }
					$this->response(array(
						"status" => DATA_SAVE,
						"message" => DATA_SAVE_MESSAGE,
						"verificationCode"=>$verificationCode,
					// "userId"=>$responseData['userId'],
					), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        "status" => DATA_SAVE_ERROR,
                        "message" => DATA_SAVE_MESSAGE
                    ), REST_Controller::HTTP_OK);
                }
                 }else{
                       $this->response(array(
                        "status" => ALREADY_EXIST,
                        "message" => ALREADY_EXIST_MESSAGE,
                        "verificationCode"=>"",
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
