<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High-Speed Chat App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .chat-container {
            width: 400px;
            max-width: 100%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            background-color: #007bff;
            padding: 15px;
            color: #fff;
            text-align: center;
            font-size: 20px;
        }

        .chat-messages {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .chat-messages .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            max-width: 70%;
        }

        .chat-messages .message.sent {
            align-self: flex-end;
            background-color: #007bff;
            color: #fff;
        }

        .chat-messages .message.received {
            align-self: flex-start;
            background-color: #f1f1f1;
            color: #333;
        }

        .chat-input {
            display: flex;
            border-top: 1px solid #ddd;
        }

        .chat-input input {
            flex-grow: 1;
            padding: 15px;
            border: none;
            border-radius: 0;
            outline: none;
        }

        .chat-input button {
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <div class="chat-header">
            <h2>Chat App</h2>
        </div>
        <div class="chat-messages" id="chat-messages"></div>
        <div class="chat-input">
            <input type="text" id="message-input" placeholder="Type your message...">
            <button id="send-button">Send</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ws = new WebSocket('ws://localhost:8080/my-websocket');
            const chatMessages = document.getElementById('chat-messages');
            const messageInput = document.getElementById('message-input');
            const sendButton = document.getElementById('send-button');

            ws.onopen = () => {
                console.log('Connected to WebSocket server');
            };

            ws.onmessage = event => {
                addMessage(event.data, 'received');
            };

            ws.onclose = () => {
                console.log('Disconnected from WebSocket server');
            };

            ws.onerror = error => {
                console.error('WebSocket error:', error);
            };

            sendButton.addEventListener('click', () => {
                const message = messageInput.value;
                if (message) {
                    ws.send(message);
                    addMessage(message, 'sent');
                    messageInput.value = '';
                    messageInput.focus();
                }
            });

            messageInput.addEventListener('keydown', event => {
                if (event.key === 'Enter') {
                    sendButton.click();
                }
            });

            function addMessage(message, type) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message', type);
                messageElement.textContent = message;
                chatMessages.appendChild(messageElement);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        });
    </script>
</body>

</html>