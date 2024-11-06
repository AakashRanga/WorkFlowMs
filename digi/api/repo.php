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

    

    // Query to join the trust_proposal and login tables
    $query = "SELECT DISTINCT units, title, zipfilepath FROM repo";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        throw new Exception('Database query failed', 500);
    }

    if (mysqli_num_rows($result) > 0) {
        $records = [];

        while ($record = mysqli_fetch_assoc($result)) {
            $records[] = [
                'units' => $record['units'],
                'title' => $record['title'],
                'zipfilepath' => $record['zipfilepath'],
             
            ];
        }

        $Data = [
            'status' => 200,
            'message' => 'Success',
            'data' => $records
        ];

        header("HTTP/1.0 200 Success");
        echo json_encode($Data);
    } else {
        $Data = [
            'status' => 404,
            'message' => 'No records found'
        ];
        echo json_encode($Data);
    }
} catch (Exception $e) {
    $status = $e->getCode() ? $e->getCode() : 500;
    $message = $e->getMessage();

    $Data = [
        'status' => $status,
        'message' => $message
    ];
    header("HTTP/1.0 $status " . getStatusCodeMessage($status));
    echo json_encode($Data);
}

function getStatusCodeMessage($status)
{
    $codes = [
        200 => 'OK',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        500 => 'Internal Server Error'
    ];
    return isset($codes[$status]) ? $codes[$status] : 'Unknown Status';
}
