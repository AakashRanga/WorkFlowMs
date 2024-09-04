<!-- WebSocket Library : Ratchet -->
<?php
require 'vendor/autoload.php';

use Ratchet\App;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class MyWebSocketServer implements MessageComponentInterface {
    public function onOpen(ConnectionInterface $conn) {
        echo "New connection: ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo "New message from ({$from->resourceId}): $msg\n";
        $from->send("Received: $msg");
    }

    public function onClose(ConnectionInterface $conn) {
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}

// Create a new Ratchet App instance
$app = new App('localhost', 8080, '0.0.0.0');

// Set up the route for the WebSocket
$app->route('/my-websocket', new MyWebSocketServer, ['*']);

// Run the application
$app->run();
