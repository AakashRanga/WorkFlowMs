document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('login-form');
    const loginContainer = document.getElementById('login-container');
    const chatContainer = document.getElementById('chat-container');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');
    const chatMessages = document.getElementById('chat-messages');
    const logoutButton = document.getElementById('logout-button');
    let ws = null;
    let userId = null;
    let username = null;

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(loginForm);
        fetch('loginbk.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                userId = data.user_id;
                username = data.username;
                loginContainer.style.display = 'none';
                chatContainer.style.display = 'block';
                initializeWebSocket();
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while logging in.');
        });
    });

    function initializeWebSocket() {
        ws = new WebSocket('ws://localhost:8080/chat');

        ws.onopen = () => {
            console.log('Connected to WebSocket server');
        };

        ws.onmessage = event => {
            const data = JSON.parse(event.data);
            addMessage(`${data.username}: ${data.message}`, 'received');
        };

        ws.onclose = () => {
            console.log('Disconnected from WebSocket server');
        };

        ws.onerror = error => {
            console.error('WebSocket error:', error);
        };

        sendButton.addEventListener('click', sendMessage);
        messageInput.addEventListener('keydown', event => {
            if (event.key === 'Enter') {
                sendMessage();
            }
        });

        logoutButton.addEventListener('click', function() {
            fetch('logout.php', { method: 'POST' })
                .then(() => {
                    userId = null;
                    username = null;
                    chatContainer.style.display = 'none';
                    loginContainer.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while logging out.');
                });
        });
    }

    function sendMessage() {
        const message = messageInput.value.trim();
        if (message) {
            const msgData = {
                user_id: userId,
                username: username,
                message: message
            };
            ws.send(JSON.stringify(msgData));
            addMessage(`Me: ${message}`, 'sent');
            messageInput.value = '';
            messageInput.focus();
        }
    }

    function addMessage(message, type) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', type);
        messageElement.textContent = message;
        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
});

