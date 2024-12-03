<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=640, initial-scale=1.0">
    <title>Page 3 - Confirmation</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f9f9f9;
            height: 100vh;
            overflow: hidden;
        }

        /* Header styling */
        .header {
            width: 100%;
            background-color: #FF6F00;
            padding: 20px 0;
            color: white;
            text-align: center;
            font-size: 24px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Main container */
        .container {
            width: 100%;
            max-width: 640px;
            padding: 30px;
            margin-top: 80px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            height: auto;
            overflow-y: auto;
            padding-bottom: 40px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #FF6F00;
        }

        h2 {
            font-family: "Times New Roman", serif;
            font-size: 36px;
            color: #666;
            text-align: left;
            margin-bottom: 20px;
        }

        p {
            font-style: italic;
            font-size: 14px;
            color: #333;
            margin-bottom: 30px;
            text-align: left;
        }

        .box {
            width: 100%;
            max-width: 600px;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 50px;
            font-size: 16px;
            color: #333;
            background-color: #FFB74D;
            border: 1px solid #ffa726;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .box span.label {
            margin-right: 10px;
            color: #666;
        }

        .divider {
            height: 1px;
            background-color: #ccc;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        footer {
            font-size: 12px;
            color: gray;
            margin-top: 20px;
            text-align: center;
        }

        footer a {
            color: #0073e6;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Mobile-friendly adjustments */
        @media (max-width: 640px) {
            .header {
                font-size: 20px;
                padding: 15px 0;
            }

            h1 {
                font-size: 28px;
            }

            p {
                font-size: 14px;
            }

            footer {
                font-size: 10px;
            }

            .container {
                padding: 15px;
                margin-top: 70px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>MULAH</h1>
    <h2>Confirmation</h2>
    <p>Please confirm your details below:</p>

    <!-- User Details in Boxes -->
    <div class="box">
        <span class="label">Phone Number:</span> <span id="phoneNumber"></span>
    </div>
    <div class="box">
        <span class="label">Name:</span> <span id="userName"></span>
    </div>
    <div class="box">
        <span class="label">Birthday:</span> <span id="userBirthday"></span>
    </div>
    <div class="box">
        <span class="label">Email:</span> <span id="userEmail"></span>
    </div>

    <!-- Gray Divider Line -->
    <div class="divider"></div>

    <!-- Footer Section -->
    <footer>
        Powered by <a href="https://mulahrewards.com" target="_blank">MulahRewards.com</a>
    </footer>
</div>

<script>
    // Retrieve data from localStorage and display it
    document.getElementById('phoneNumber').textContent = localStorage.getItem('phoneNumber') || 'Not Provided';
    document.getElementById('userName').textContent = localStorage.getItem('userName') || 'Not Provided';
    document.getElementById('userBirthday').textContent = localStorage.getItem('userBirthday') || 'Not Provided';
    document.getElementById('userEmail').textContent = localStorage.getItem('userEmail') || 'Not Provided';
</script>

</body>
</html>
