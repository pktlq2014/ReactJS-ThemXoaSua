<?phpheader("Access-Control-Allow-Origin: *");header("Content-Type: application/json; charset=UTF-8");//Creating Array for JSON response$response = array();$servername = "nguyenvanty2020.000webhostapp.com";$username = "id13697991_nguyenvanty";$password = "be4EYC4vi@LcIo1i";$dbname = "id13697991_nguyenvanty";// Create connection$conn = new mysqli($servername, $username, $password, $dbname);// Check connectionif ($conn->connect_error) {    die("Connection failed: " . $conn->connect_error);} // Fire SQL query to get all data from led if (isset($_GET["id"])) {     $id = $_GET['id'];      // Fire SQL query to get weather data by id     $result = $conn->query("SELECT * FROM led WHERE id = '$id'"); 	//If returned result is not empty     if (!empty($result)) {         // Check for succesfull execution of query and no results found         if (mysqli_num_rows($result) > 0) { 			// Storing the returned array in response             $result = mysqli_fetch_array($result); 			// temperoary user array             $led = array();             $led["id"] = $result["id"];             $led["status"] = $result["status"];             // Show JSON response             echo json_encode($led);         } else {             // If no data is found             $response["success"] = 0;             $response["message"] = "No data on led found";             // Show JSON response             echo json_encode($response);         }     } else {         // If no data is found         $response["success"] = 0;         $response["message"] = "No data on led found";         // Show JSON response         echo json_encode($response);     } } else {     // If required parameter is missing     $response["success"] = 0;     $response["message"] = "Parameter(s) are missing. Please check the request";     // echoing JSON response     echo json_encode($response); } ?>