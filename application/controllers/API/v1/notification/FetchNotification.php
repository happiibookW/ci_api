
<?php


require APPPATH . 'libraries/REST_Controller.php';

class FetchNotification extends REST_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('NotificationModel');
        $this->load->model('AppModel');
        $haveAccess = array(
            'userId' => $this->input->get_request_header('userId'),
            // 'token' => $this->input->get_request_header('token'),
        );
        if ($this->AppModel->haveaccess($haveAccess) == false) {
            $this->response(array(
                "status" => UNAUTHORIZED,
                "message" => UNAUTHORIZED_MESSAGE
            ), REST_Controller::HTTP_UNAUTHORIZED);
        }
    }

    public function index_post()
    {

        try {
            $userId = $this->input->post('userId');
            if ($userId != "") {
                $data = array(
                    "receiverId" => $userId,
                );
                $notificationdata = $this->NotificationModel->fetchnotification($data);
				$notificationdata['profileImageUrl'] = ($this->checkFileInLaravel($notificationdata['profileImageUrl'])) ? 'http://18.117.21.112/hapiverse/public/'.$notificationdata['profileImageUrl'] : site_url('public/'.$notificationdata['profileImageUrl']);
                if ($notificationdata != "") {
                    $this->response(array(
                        "status" => DATA_AVAILABLE,
                        "message" => DATA_AVAILABLE_MESSAGE,
                        "data" => $notificationdata,
                    ), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        "status" => DATA_NOT_AVAILABLE,
                        "message" => DATA_NOT_AVAILABLE_MESSAGE,
                        "data" => $notificationdata
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

	public function checkFileInLaravel($image) {

		$laravelEndpoint = 'http://18.117.21.112/hapiverse/public/check-file';
		$filePath = $image;
		$url = $laravelEndpoint . '?file=' . urlencode($filePath);
		$response = file_get_contents($url);
		if ($response === '{"status":"exists"}') {
			return true;
		} else {
			return false;
		}
    }
}

?>
