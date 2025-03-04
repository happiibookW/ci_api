
<?php


require APPPATH . 'libraries/REST_Controller.php';

class EditBusinessProfile extends REST_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('BusinessModel');
    }

    public function index_post()
    {

        try {

            $businessName = $this->input->post('businessName');
            $email = $this->input->post('email');
            $ownerName = $this->input->post('ownerName');
            $vatNumber = $this->input->post('vatNumber');
            $address = $this->input->post('address');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $businessContact = $this->input->post('businessContact');
            $isAlwaysOpen = $this->input->post('isAlwaysOpen');
            $categoryId = $this->input->post('categoryId');
            $businessId = $this->input->post('businessId');
            // $token = random_string('alnum', 100);
            $password=$this->input->post('password');
            $businessType=$this->input->post('businessType');
            $country=$this->input->post('country');
            $city=$this->input->post('city');
            if ($businessName != "" && $ownerName != "" && $vatNumber != "" && $businessId!="") {
                $upload = array(
                    "upload_path" => "business/",
                    "allowed_types" => "jpg|png|jpeg|PNG|JPG|JPEG|PDF|DOC|CSV|Uint8List",
                    "max_size" => 100000,
                    "encrypt_name" => TRUE
                );
                $this->load->library('upload', $upload);
                if (isset($_FILES['logoImageUrl']['name']) && !empty($_FILES['logoImageUrl']['name'])) {
                    if (!$this->upload->do_upload('logoImageUrl')) {
                        echo $this->upload->display_errors();
                    } else {
                        $data       = $this->upload->data();
                        $logoImageUrl = "business/" . $data['file_name'];
                    }
                }
                // if (isset($_FILES['featureImageUrl']['name']) && !empty($_FILES['featureImageUrl']['name'])) {
                //     if (!$this->upload->do_upload('featureImageUrl')) {
                //         echo $this->upload->display_errors();
                //     } else {
                //         $data       = $this->upload->data();
                //         $featureImageUrl = "business/" . $data['file_name'];
                //     }
                // }
                // $verificationCode = rand(1000, 9999);
               
                if($logoImageUrl!=""){
                     $businessData = array(
                    // "businessId" => $businessId,
                    "businessName" => $businessName,
                    "email" => $email,
                    "ownerName" => $ownerName,
                    "vatNumber" => $vatNumber,
                    "address" => $address,
                    "latitude" => $latitude,
                    "longitude" => $longitude,
                    "country" => $country,
                    "city" => $city,
                    "businessType"=>$businessType,
                    "businessContact" => $businessContact,
                    "isAlwaysOpen" => $isAlwaysOpen,
                    "categoryId" => $categoryId,
                    "logoImageUrl" => $logoImageUrl,
                    // "featureImageUrl" => $featureImageUrl,
                );
                }else{
                     $businessData = array(
                    // "businessId" => $businessId,
                    "businessName" => $businessName,
                    "email" => $email,
                    "ownerName" => $ownerName,
                    "vatNumber" => $vatNumber,
                    "address" => $address,
                    "latitude" => $latitude,
                    "longitude" => $longitude,
                    "country" => $country,
                    "city" => $city,
                    "businessType"=>$businessType,
                    "businessContact" => $businessContact,
                    "isAlwaysOpen" => $isAlwaysOpen,
                    "categoryId" => $categoryId,
                    //"logoImageUrl" => $logoImageUrl,
                    // "featureImageUrl" => $featureImageUrl,
                );
                }
                // $authorizationData=array(
                //     "userId"=>$businessId,
                //     "email"=>$email,
                //     "phoneNo"=>$businessContact,
                //     "password"=>md5($password),
                //     "userTypeId"=>2,
                //     "token" => $token,
                //     "verificationCode" => $verificationCode,

                // );


                if ($this->BusinessModel->updatebusiness($businessData, "mstbusiness") == true) {
                    #sendMail($email,'verfication COde',$verficationCode);
                    $this->response(array(
                        "userId"=> $businessId,
                        "status" => DATA_SAVE,
                        "message" => DATA_SAVE_MESSAGE
                    ), REST_Controller::HTTP_OK);
                } else {
                    $this->response(array(
                        "status" => DATA_SAVE_ERROR,
                        "message" => DATA_SAVE_MESSAGE
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