<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=640, initial-scale=1.0">
    <title>MULAH - Hello Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            text-align: center;
        }
        
        .content {
            width: 100%;
            max-width: 640px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            height: 100%;
            overflow-y: auto;
        }

        h1 {
            font-size: 32px;
            color: #FF6F00;
            margin-bottom: 10px;
        }

        h2 {
            font-family: "Times New Roman", serif;
            font-size: 50px;
            color: #666;
            text-align: left;
            margin-bottom: 20px;
        }

        p {
            font-family: "Times New Roman", serif;
            font-size: 14px;
            color: #FF6F00;
            margin-bottom: 30px;
        }

        .input-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .country-code {
            padding: 12px;
            width: 25%;
            border: none;
            border-bottom: 2px solid #FF6F00;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        .phone-number {
            width: 55%;
            padding: 12px;
            margin: 0 10px;
            border: none;
            border-bottom: 2px solid #FF6F00;
            font-size: 16px;
            color: #666;
            background-color: #f9f9f9;
        }

        .phone-number:focus {
            outline: none;
            border-bottom: 2px solid #FF6F00; /* Dark orange underline */
        }

        button {
            background-color: #FF6F00;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            width: 80%;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #ff8c00;
        }

        .divider {
            border-top: 1px solid #ccc;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        footer {
            font-size: 12px;
            color: gray;
            margin-top: 20px;
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
            .main-content {
                padding: 15px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 36px;
            }

            p {
                font-size: 12px;
            }

            button {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="main-content">
    <h1><b>MULAH</b></h1>
    <h2>Hello, <br> Welcome!</h2>
    <p align="left"><b>Check Your Loyalty Points & Rewards</b></p>

    <div class="input-container">
        <select class="country-code" id="countryCode">
            <option value="+60">+60</option> <!-- Malaysia country code preselected -->
            <option value="+1">+1</option>
            <option value="+44">+44</option>
            <option value="+91">+91</option>
            <!-- Add more country codes as needed -->
        </select>
        <input type="text" id="phoneNumber" class="phone-number" placeholder="Enter your mobile number" />
    </div>

    <button id="checkLoyaltyPoints">Check Loyalty Points</button>

    <div class="divider"></div> <!-- Gray line above footer -->

    <footer>
        Powered by <a href="https://mulahrewards.com" target="_blank">MulahRewards.com</a>
    </footer>
</div>

<script>
    document.getElementById('checkLoyaltyPoints').addEventListener('click', function() {
        const countryCode = document.getElementById('countryCode').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const fullPhoneNumber = countryCode + phoneNumber;
        
        // Validate phone number
        if (fullPhoneNumber === "+60173527250") {
            localStorage.setItem('phoneNumber', fullPhoneNumber); // Store in localStorage
            window.location.href = 'mulah2.php'; // Go to Page 2
        } else {
            alert("Please enter the correct phone number.");
        }
    });
</script>

</body>
</html>
