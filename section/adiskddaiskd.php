<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AK Loves Datchu</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }

        .love-message {
            font-size: 48px;
            color: #333;
            font-weight: bold;
            text-align: center;
        }

        .heart {
            color: red;
            font-size: 1.2em;
            margin: 0 10px;
            animation: heartbeat 1.5s infinite;
        }

        @keyframes heartbeat {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }
        }
    </style>
</head>

<body>
    <div class="love-message">
       <span class="heart">♥ </span> 
    </div>
</body>

</html>