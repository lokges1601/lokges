<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 - Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        .container {
            text-align: center;
            width: 100%;
            max-width: 640px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: left;
            
        }
        h1 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #FF6F00;
        }
        h2 {
            font-family: "Times New Roman", serif;
            font-size: 50px;
            color: #666;
            text-align: left;
            margin-bottom: 20px;
        }
        p {
            font-style: italic;
            font-size: 12px;
            color: #000;
            margin-bottom: 30px;
            text-align: left;
        }
        label {
            font-size: 16px;
            color: #666;
            text-align: left;
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            font-size: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px 0;
        }
        .error-message {
            color: red;
            font-style: italic;
            font-size: 12px;
            margin-top: 5px;
            text-align: left;
            display: none; /* Hide the error messages initially */
        }
        button {
            padding: 12px 20px;
            background-color: #FF6F00;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: auto;
            align-self: center;
        }
        button:hover {
            background-color: #e65c00;
        }
        footer {
            font-size: 12px;
            color: gray;
            margin-top: 40px;
            text-align: center;
        }
        footer a {
            color: #0073e6;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }

        /* Add styling for checkbox and label in one line */
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: left;
            margin-top: 10px;
        }

        .checkbox-container input {
            margin-right: 10px;
        }

        /* Styling for date input fields */
        .birthday-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .birthday-container select {
            width: 30%;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>MULAH</h1>
    <h2>Registration</h2>
    <p>Please fill up your details.</p>
    
    <!-- Name Input with Label -->
    <label for="name"><b>Name</label>
    <input type="text" id="name" placeholder="Enter Name" required>
    <div class="error-message" id="name-error">*Please insert a name.</div>

    <!-- Birthday Input with separate selections for date, month, and year -->
    <label for="birthday"><b>Birthday</label>
    <div class="birthday-container">
        <select id="day" required>
            <option value="">DD</option>
            <!-- Generate Day Options -->
            <script>
                for (let i = 1; i <= 31; i++) {
                    let option = document.createElement('option');
                    option.value = i;
                    option.textContent = i;
                    document.getElementById('day').appendChild(option);
                }
            </script>
        </select>

        <select id="month" required>
            <option value="">MM</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>

        <select id="year" required>
            <option value="">YYYY</option>
            <!-- Generate Year Options -->
            <script>
                let currentYear = new Date().getFullYear();
                for (let i = currentYear; i >= 1900; i--) {
                    let option = document.createElement('option');
                    option.value = i;
                    option.textContent = i;
                    document.getElementById('year').appendChild(option);
                }
            </script>
        </select>
    </div>
    <div class="error-message" id="birthday-error">*Please insert your birthday.</div>

    <!-- Email Input with Label -->
    <label for="email"><b>Email Address</label>
    <input type="email" id="email" placeholder="Email Address" required>
    <div class="error-message" id="email-error">*Please insert a valid email address.</div>

    <!-- Checkbox for no email in one line -->
    <div class="checkbox-container">
        <input type="checkbox" id="noEmail">
        <label for="noEmail">No email address</label>
    </div>
    <div class="error-message" id="no-email-error"></div>

    <!-- Continue Button -->
    <button id="continueButton">Continue</button>

    <footer>
        Powered by <a href="https://mulahrewards.com" target="_blank">MulahRewards.com</a>
    </footer>
</div>

<script>
    document.getElementById('continueButton').addEventListener('click', function () {
        const name = document.getElementById('name').value;
        const day = document.getElementById('day').value;
        const month = document.getElementById('month').value;
        const year = document.getElementById('year').value;
        const email = document.getElementById('email').value;
        const noEmail = document.getElementById('noEmail').checked;

        // Clear previous error messages
        document.getElementById('name-error').style.display = 'none';
        document.getElementById('birthday-error').style.display = 'none';
        document.getElementById('email-error').style.display = 'none';
        document.getElementById('no-email-error').style.display = 'none';

        let valid = true;

        // Validate name
        if (!name) {
            document.getElementById('name-error').style.display = 'block';
            valid = false;
        }

        // Validate birthday
        if (!day || !month || !year) {
            document.getElementById('birthday-error').style.display = 'block';
            valid = false;
        }

        // Validate email or no email
        if (!email && !noEmail) {
            document.getElementById('email-error').style.display = 'block';
            valid = false;
        }

        // If no email checkbox is checked, clear the email field validation
        if (noEmail) {
            document.getElementById('email').value = '';
        }

        // If everything is valid, store the data and navigate to page 3
        if (valid) {
            localStorage.setItem('name', name);
            localStorage.setItem('birthday', `${day}-${month}-${year}`);
            localStorage.setItem('email', email);

            window.location.href = 'mulah3.php'; // Redirect to Page 3
        }
    });
</script>

</body>
</html>
