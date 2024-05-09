
<?php


require APPPATH . 'libraries/REST_Controller.php';

class GetMusic extends REST_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('PostModel');
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
			$client_id = 'a8ee6bd205064e76b756054e488d1d69';
			$client_secret = '46a5161175174df5a87a6edffe7c0903';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret)));
			$result = curl_exec($ch);
			$result = json_decode($result, true);
			curl_close($ch);
			$barerToken = $result['access_token'];
		
			$spotifyAlbumsURL = 'https://api.spotify.com/v1/browse/new-releases';
			$authorization = 'Authorization: Bearer '.$barerToken;
		
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization));
			curl_setopt($ch, CURLOPT_URL, $spotifyAlbumsURL);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:x.x.x) Gecko/20041107 Firefox/x.x");
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$albumjson = curl_exec($ch);
		
			if(curl_errno($ch)) {
				echo 'Error: ' . curl_error($ch);
			}
		
			curl_close($ch);
		
			$data = json_decode($albumjson, true); // Decode JSON into an associative array
			if(isset($data['albums'])) {
				$albumdata = $data['albums'];
		
				$artistsjson = array();
		
				foreach($albumdata['items'] as $album){
					foreach ($album['artists'] as $artist) {
						$spotifyArtistsURL = 'https://api.spotify.com/v1/artists/'.$artist['id'].'?limit=5';
						$authorization = 'Authorization: Bearer '.$barerToken;
		
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization));
						curl_setopt($ch, CURLOPT_URL, $spotifyArtistsURL);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:x.x.x) Gecko/20041107 Firefox/x.x");
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						$artistsjson[] = curl_exec($ch);
		
						if(curl_errno($ch)) {
							echo 'Error: ' . curl_error($ch);
						}
		
						curl_close($ch);
					}
				}
				$artistsJsonString = '[' . implode(',', $artistsjson) . ']';

				$artistsArray = json_decode($artistsJsonString, true);
				
			} else {
				echo "No albums data found.";
			}
		
			$spotifyCategoryUrl = 'https://api.spotify.com/v1/browse/categories';
			$authorization = 'Authorization: Bearer '.$barerToken;
		
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization));
			curl_setopt($ch, CURLOPT_URL, $spotifyCategoryUrl);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:x.x.x) Gecko/20041107 Firefox/x.x");
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$categoryjson = curl_exec($ch);
			
			if(curl_errno($ch)) {
				echo 'Error: ' . curl_error($ch);
			}
		
			curl_close($ch);
		
			$spotifyGenreUrl = 'https://api.spotify.com/v1/recommendations/available-genre-seeds';
			$authorization = 'Authorization: Bearer '.$barerToken;
		
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization));
			curl_setopt($ch, CURLOPT_URL, $spotifyGenreUrl);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:x.x.x) Gecko/20041107 Firefox/x.x");
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$genrejson = curl_exec($ch);
		
			if(curl_errno($ch)) {
				echo 'Error: ' . curl_error($ch);
			}
		
			curl_close($ch);
		
			$recoArray = $artistsArray;
			$albumArray = json_decode($albumjson, true);
			$categoryArray = json_decode($categoryjson, true);
			$genreArray = json_decode($genrejson, true);
		
			// Create a new associative array with keys
			$resultArray = [
				"artistsjson" => $recoArray,
				"albumjson" => $albumArray,
				"categoryjson" => $categoryArray,
				"genrejson" => $genreArray
			];
		
			// Convert the associative array to JSON
			$resultJson = json_encode($resultArray);
			print($resultJson);
		
		} catch (Exception $e) {
			echo 'Message: ' . $e->getMessage();
		}
    }
}

?>
