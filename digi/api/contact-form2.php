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

        $requiredFields = ['full_name', 'email', 'mobile_number', 'organization'];

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

        // using raw json
        $name = isset($json_data['full_name']) ? addslashes(trim($json_data['full_name'])) : null;
        $email = isset($json_data['email']) ? addslashes(trim($json_data['email'])) : null;
        $mobile = isset($json_data['mobile_number']) ? addslashes(trim($json_data['mobile_number'])) : null;
        $organization = isset($json_data['organization']) ? addslashes(trim($json_data['organization'])) : null;
        $broucher = isset($json_data['broucher']) ? addslashes(trim($json_data['broucher'])) : null;
        $state = isset($json_data['state']) ? addslashes(trim($json_data['state'])) : null;

        $InsertUserQuery = "INSERT INTO contact (name, email, mobile, organization_name, broucher, state, datetime) VALUES ('$name', '$email', '$mobile', '$organization', '$broucher', '$state', NOW())";
        if (!mysqli_query($conn, $InsertUserQuery)) {
            throw new Exception('Error registering user: ' . mysqli_error($conn), 500);
        }

        $Data = [
            'status' => 201,
            'message' => 'Success'
        ];
        header("HTTP/1.0 201 Created");
        echo json_encode($Data);
        
    } catch (Exception $e) {

        $Data = [
            'status' => $e->getCode() ?: 500,
            'message' => $e->getMessage()
        ];
        header("HTTP/1.0 " . ($e->getCode() ?: 500) . " Error");
        echo json_encode($Data);

    }

?>
