<?php
// Setup : 
// 1. Install composer
// 2. come to path in VS Terminal and Install (composer require cboden/ratchet)
// 3. Run server : php websocket.php

require 'vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $msgData = json_decode($msg, true);
    
        // Log incoming message
        error_log("Received message: " . print_r($msgData, true));
    
        if (isset($msgData['username']) && isset($msgData['message'])) {
            $username = $msgData['username'];
            $message = $msgData['message'];

            echo $username;
    
            include 'config.php';
            $query = "INSERT INTO messages (username, message) VALUES (?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("is", $username, $message);
            $stmt->execute();
    
            foreach ($this->clients as $client) {
                if ($from !== $client) {
                    $client->send($msg);
                }
            }
        } else {
            error_log("Received message is missing required fields.");
        }
    }
    

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}

$server = new Ratchet\App('localhost', 8080);
$server->route('/chat', new Chat, ['*']);
$server->run();
?>
