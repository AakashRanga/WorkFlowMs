<script>
    // Create a WebSocket connection
let ws = new WebSocket('ws://localhost:8080/my-websocket');

// Event listener for when the connection is established
ws.onopen = function() {
    console.log('Connected to WebSocket server');
    // Send a message to the server
    ws.send('Hello Server!');
};

// Event listener for when a message is received from the server
ws.onmessage = function(event) {
    alert('Message from server:', event.data);
};

// Event listener for when the connection is closed
ws.onclose = function() {
    alert('Disconnected from WebSocket server');
};

// Event listener for errors
ws.onerror = function(error) {
    console.log('WebSocket Error:', error);
};

</script>