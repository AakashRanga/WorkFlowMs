<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");

    include "config.php";

    try {

        $data = file_get_contents('php://input');
        $json_data = json_decode($data, true);

        $RequestMethod = $_SERVER["REQUEST_METHOD"];

        if ($RequestMethod !== "POST") {
            throw new Exception($RequestMethod . ' Method Not Allowed', 405);
        }

        $requiredFields = ['finalAmount', 'userEmail', 'userState', 'userName', 'userPhone', ];

        $missingFields = [];

        // Check for missing fields
        foreach ($requiredFields as $field) {
            if (!isset($json_data[$field]) || empty($json_data[$field])) {
                $missingFields[] = $field;  // Add the missing field to the array
            }
        }

        // If there are missing fields, throw an exception
        if (!empty($missingFields)) {
            $missingFieldsStr = implode(', ', $missingFields);
            throw new Exception('Missing required field(s): ' . $missingFieldsStr, 400);
        }

        $platform = 'web';

        // using web and api raw json
        $userName = isset($json_data['userName']) ? addslashes(trim($json_data['userName'])) : null;
        $userEmail = isset($json_data['userEmail']) ? addslashes(trim($json_data['userEmail'])) : null;
        $userPhone = isset($json_data['userPhone']) ? addslashes(trim($json_data['userPhone'])) : null;
        $userState = isset($json_data['userState']) ? addslashes(trim($json_data['userState'])) : null;
        $finalAmount = isset($json_data['finalAmount']) ? addslashes(trim($json_data['finalAmount'])) : null;

        // Insert new user
        $InsertUserQuery = "INSERT INTO payment_form (name, email, mobile, state, amount) VALUES ('$userName', '$userEmail', '$userPhone', '$userState', '$finalAmount')";
        if (!mysqli_query($conn, $InsertUserQuery)) {
            throw new Exception('Error registering user: ' . mysqli_error($conn), 500);
        }

        // Success response
        $Data = [
            'status' => 201,
            'message' => 'User successfully registered'
        ];
        header("HTTP/1.0 201 Created");
        echo json_encode($Data);
    } catch (Exception $e) {
        // Handle all errors in the catch block
        $Data = [
            'status' => $e->getCode() ?: 500,
            'message' => $e->getMessage()
        ];
        header("HTTP/1.0 " . ($e->getCode() ?: 500) . " Error");
        echo json_encode($Data);
    }
?>