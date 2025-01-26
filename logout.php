<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <style>
        /* General Reset */
        body, h2, h3, p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #1b1b1e ;
            color: #c9d1d9;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: yellow;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: white;
        }

        p {
            font-size: 1.2rem;
            margin-top: 1rem;
        }

        #countdown {
            font-weight: bold;
            color: #f85149; /* Countdown in red */
        }

        /* Optional: Add a fade-in effect */
        body {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    <script>
        let countdown = 3; // Countdown starts at 3 seconds
        function startCountdown() {
            const countdownElement = document.getElementById("countdown");
            const interval = setInterval(() => {
                countdownElement.textContent = countdown;
                countdown--;
                if (countdown < 0) {
                    clearInterval(interval); // Stop the countdown
                    window.location.href = "https://www.google.com"; // Redirect to Google
                }
            }, 1000); // Decrease the countdown every 1 second
        }
    </script>
</head>
<body onload="startCountdown()">
    <h2>Your account has been logged out successfully</h2>
    <h3>Thank you for visiting :)</h3>
    <p>Redirecting in <span id="countdown">3</span> seconds...</p>
    <?php
        session_start();
        session_destroy();
    ?>
</body>
</html>